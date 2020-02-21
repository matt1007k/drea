<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleCreatedRequest;
use App\Http\Requests\RoleUpdatedRequest;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:roles.index')->only(['index']);
        $this->middleware('can:roles.show')->only(['show']);
        $this->middleware('can:roles.create')->only(['create', 'store']);
        $this->middleware('can:roles.edit')->only(['edit', 'update']);
        $this->middleware('can:roles.destroy')->only(['destroy']);
    }

    public function index()
    {
        $search = request('search') ? request('search') : '';

        if ($search != '') {
            $roles = Role::where('name', 'LIKE', "%$search%")
                ->orWhere('slug', 'LIKE', "%$search%")
                ->orWhere('description', 'LIKE', "%$search%")
                ->latest()
                ->get();
        } else {
            $roles = Role::latest()->get();
        }

        return view('admin.roles.index', compact('roles', 'search'));
    }

    public function show(Role $role)
    {
        return view('admin.roles.show', compact('role'));
    }

    public function create()
    {
        $role = new Role();
        return view('admin.roles.create', compact('role'));
    }

    public function store(RoleCreatedRequest $request)
    {
        Role::create($request->all());

        return redirect()->route('admin.roles.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(RoleUpdatedRequest $request, Role $role)
    {
        $role->update($request->all());

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
