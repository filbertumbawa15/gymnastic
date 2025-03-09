<?php

namespace App\Http\Controllers;

use App\Models\Features;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeatureController extends Controller
{
    public function index()
    {
        $breadcrumb = "Feature";
        return view('features', compact('breadcrumb'));
    }

    public function get()
    {
        $limit = request('limit') ?? 10;
        $page = request('page') ?? 1;

        $query = DB::table((new Features())->getTable())->select('*');

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

    public function checkFeature(Request $request)
    {
        $features = $request->input('name');
        $id = $request->input('id');

        // Example: Check if features already exists in 'users' table
        $exists = DB::table('features')->where('name', $features)->where('id', '!=', $id)->exists();

        return response()->json([
            'valid' => !$exists,
        ]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {
            $data = [
                'name' => $request->name
            ];
            $feature = (new Features())->processStore($data);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil disimpan',
                'data' => $feature
            ], 201);
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }

    public function show($id)
    {
        $data = Features::findOrFail($id);
        return response([
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        DB::beginTransaction();

        try {
            $data = [
                'name' => $request->name
            ];
            $feature = (new Features())->processUpdate($id, $data);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil diupdate',
                'data' => $feature
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
            $feature = (new Features())->processDestroy($id);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil dihapus',
                'data' => $feature
            ], 200);
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }
}
