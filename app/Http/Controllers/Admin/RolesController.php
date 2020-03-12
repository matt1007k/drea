<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleCreatedRequest;
use App\Http\Requests\RoleUpdatedRequest;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:roles.lista')->only(['index']);
        $this->middleware('can:roles.ver')->only(['show']);
        $this->middleware('can:roles.registrar')->only(['create', 'store']);
        $this->middleware('can:roles.editar')->only(['edit', 'update']);
        $this->middleware('can:roles.eliminar')->only(['destroy']);
    }

    public function index()
    {
        $roles = Role::latest()->get();
        return view('admin.roles.index', compact('roles'));
    }

    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    public function create()
    {
        $role = new Role();
        $permissions = Permission::all();
        return view('admin.roles.create', compact('role', 'permissions'));
    }

    public function store(RoleCreatedRequest $request)
    {
        $role = Role::create($request->all());
        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }

        return redirect()->route('admin.roles.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    public function update(RoleUpdatedRequest $request, Role $role)
    {
        $role->update($request->all());
        if (empty($request->get('permissions'))) {
            $role->revokePermissionTo($role->permissions->pluck('slug'));
        }

        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }

        return redirect()->route('admin.roles.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('admin.roles.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
