<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserRole;
use DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $userr = User::all();
        // dd($userr);
        return view('user.index', compact('user','userr'));
    }
    public function list(Request $request)
    {
        $query = User::query();
        // dd($query);
        $users = $query->orderBy('created_at', 'DESC')->get();
        $datatable = Datatables::of($users)
            ->addIndexColumn()
            ->addColumn('name', function($row){
                return $row->name;
            })
            ->addColumn('statue', function($row){
                return $row->statue;
            })
            ->addColumn('role', function($row){
                return $row->role;
            })
            ->addColumn('action', function ($row) {
                $btn = '';
                $btn .= '<a href="'.route('user.edit', encode($row->id)) .'" class="btn btn-success mb-2 me-4" title="Edit User"><i class="fa fa-edit"></i></a>';
                $btn .= ' <button type="button" data-id="'.encode($row->id).'" class="btn btn-soft-danger delete" title="Delete User"><i class="fas fa-trash-alt"></i></button>';

                return $btn;
            })
            ->rawColumns(['name','statue','role','action'])
            ->make(true);

        return $datatable;

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
