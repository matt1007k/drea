<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\PermisoCreatedRequest;
use App\Http\Requests\PermisoUpdatedRequest;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

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
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $permissions = Permission::where('name', 'LIKE', "%$search%")
                ->orWhere('slug', 'LIKE', "%$search%")
                ->orWhere('description', 'LIKE', "%$search%")
                ->latest()
                ->get();
        } else {
            $permissions = Permission::latest()->get();
        }

        return view('admin.permissions.index', compact('permissions', 'search'));
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

    public function store(PermisoCreatedRequest $request)
    {
        Permission::create($request->all());

        return redirect()->route('admin.permissions.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(PermisoUpdatedRequest $request, Permission $permission)
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
