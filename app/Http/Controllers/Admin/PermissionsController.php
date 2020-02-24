<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PermissionCreatedRequest;
use App\Http\Requests\PermissionUpdatedRequest;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:permissions.index')->only(['index']);
        $this->middleware('can:permissions.show')->only(['show']);
        $this->middleware('can:permissions.create')->only(['create', 'store']);
        $this->middleware('can:permissions.edit')->only(['edit', 'update']);
        $this->middleware('can:permissions.destroy')->only(['destroy']);
    }

    public function index()
    {
        $permissions = Permission::latest()->get();
        return view('admin.permissions.index', compact('permissions'));
    }

    public function show(Permission $permission)
    {
        return view('admin.permissions.show', compact('permission'));
    }

    public function create()
    {
        $permission = new Permission();
        return view('admin.permissions.create', compact('permission'));
    }

    public function store(PermissionCreatedRequest $request)
    {
        Permission::create($request->all());

        return redirect()->route('admin.permissions.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(PermissionUpdatedRequest $request, Permission $permission)
    {
        $permission->update($request->all());

        return redirect()->route('admin.permissions.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('admin.permissions.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
