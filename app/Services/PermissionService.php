<?php


namespace App\Services;


use App\Http\Requests\PermissionRequest;
use App\Models\Permission;

class PermissionService
{
    public function store(PermissionRequest $permissionRequest)
    {
        Permission::create($permissionRequest->all());
    }

    public function all()
    {
        return Permission::all();
    }
}
