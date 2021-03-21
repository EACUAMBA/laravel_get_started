<?php


namespace App\Services;


use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Exception;

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

    public function update(PermissionRequest $permissionRequest, Permission $permission)
    {
        return $permission->update($permissionRequest->only([
            'name',
            'can_create',
            'can_edit',
            'can_delete',
            'can_see',

        ]));
    }

    public function destroy(Permission $permission)
    {
        if ($permission->person()->count() <= 0) {
            try {
                return $permission->delete();
            } catch (Exception $e) {
            }
        } else {
            return back()->withErrors([
                'message' => 'A permissão ' . $permission->name . ' que deseja apagar possui usuario(s), apague os usuarios para apagar a permissão.'
            ]);
        }

        return;
    }
}
