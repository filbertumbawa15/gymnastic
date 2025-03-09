<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public $breadcrumb = "User";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breadcrumb = $this->breadcrumb;
        $roles = Role::get();
        return view('user', compact('breadcrumb', 'roles'));
    }

    public function get()
    {
        $limit = request('limit') ?? 10;
        $page = request('page') ?? 1;

        $query =  DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->select('users.*', 'roles.rolename');

        if (request('filters')) {
            foreach (request('filters') as $index => $filter) {
                if ($index == "rolename") {
                    $query = $query->orWhere("roles.$index", 'LIKE', "%$filter%");
                } else {
                    $query = $query->orWhere("users.$index", 'LIKE', "%$filter%");
                }
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->user_role,
            ];

            $user = (new User())->processStore($data);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil disimpan',
                'data' => $user
            ], 201);
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = User::findOrFail($id);
        $data->user_role = $data->role_id;
        return response([
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $request->user_role,
            ];

            $user = (new User())->processUpdate($id, $data);

            DB::commit();

            return response()->json([
                'status' => true,
                'message' => 'Berhasil disimpan',
                'data' => $user
            ], 201);
        } catch (\Throwable $th) {
            DB::rollBack();

            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try {
            $user = (new User())->processDestroy($id);

            DB::commit();

            return response()->json([
                'message' => 'Berhasil dihapus',
                'data' => $user
            ]);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
