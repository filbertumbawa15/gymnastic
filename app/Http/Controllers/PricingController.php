<?php

namespace App\Http\Controllers;

use App\Models\Features;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PricingController extends Controller
{
    public function index()
    {
        $breadcrumb = "Pricing";
        $features = Features::get();
        return view('pricing', compact('breadcrumb', 'features'));
    }

    public function get()
    {
        $limit = request('limit') ?? 10;
        $page = request('page') ?? 1;

        $query = DB::table((new Pricing())->getTable())->select('*');

        if (request('filters')) {
            foreach (request('filters') as $index => $filter) {
                $query = $query->orWhere($index, 'LIKE', "%$filter%");
            }

            $totalRecords = $query->count();
        }

        if (isset(request('sorts')['column']) && isset(request('sorts')['direction'])) {
            $query = $query->orderBy(request('sorts')['column'], request('sorts')['direction']);
        }

        $totalPages = ceil($totalRecords / $limit);

        $categories = $query->skip(($page - 1) * $limit)->take($limit)->get();

        return response([
            'totalRecords' => $totalRecords,
            'totalPages' => $totalPages,
            'data' => $categories,
        ]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'duration' => $request->duration,
                'features' => json_encode($request->features), // Store selected feature IDs as JSON
                'modifiedby' => auth()->user()->name
            ];

            $pricing = (new Pricing())->processStore($data);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Pricing saved successfully',
                'data' => $pricing
            ], 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function show($id)
    {
        $data = Pricing::findOrFail($id);
        return response([
            'data' => $data
        ]);
    }


    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'duration' => $request->duration,
                'features' => json_encode($request->features), // Store selected feature IDs as JSON
                'modifiedby' => auth()->user()->name
            ];

            $pricing = (new Pricing())->processUpdate($id, $data);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Pricing saved successfully',
                'data' => $pricing
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $pricing = (new Pricing())->processDestroy($id);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil dihapus',
                'data' => $pricing
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }
}
