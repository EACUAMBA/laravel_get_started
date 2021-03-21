<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use App\Services\PermissionService;
use Cassandra\Date;
use Illuminate\Http\Request;

class PermissionController extends Controller
{

    protected $permissionService;

    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view(
            'person.permission.index',
            [
                'permissions' => $this->permissionService->all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PermissionRequest $permissionRequest)
    {
        $this->permissionService->store($permissionRequest);
        return redirect(route('permission.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Permission $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
