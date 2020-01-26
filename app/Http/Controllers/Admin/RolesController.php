<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleCreatedRequest;
use App\Http\Requests\RoleUpdatedRequest;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function __construct()
    {
        $this->middleware('has.permission:roles.index')->only(['index']);
        $this->middleware('has.permission:roles.show')->only(['show']);
        $this->middleware('has.permission:roles.create')->only(['create', 'store']);
        $this->middleware('has.permission:roles.edit')->only(['edit', 'update']);
        $this->middleware('has.permission:roles.destroy')->only(['destroy']);
    }
    public function index(Request $request)
    {
        $roles = Role::With(['permissions'])->orderBy('name', 'ASC')->get();

        return response()->json(['roles' => $roles], 200);
    }

    public function getRoles(Request $request)
    {
        $roles = Role::orderBy('name', 'ASC')->get();

        return response()->json(['roles' => $roles], 200);
    }

    public function store(RoleCreatedRequest $request)
    {
        $role = new Role();
        $role->name = $request->nombre;
        $role->slug = $request->identificador;
        $role->description = $request->descripcion;
        if ($role->save()) {
            // $role->permissions()->sync(collect($request->permissions)->pluck('id')->toArray());
            return response()->json([
                'created' => true,
            ], 200);
        } else {
            return response()->json([
                'created' => false,
            ], 500);
        }
    }

    public function update(RoleUpdatedRequest $request, $id)
    {
        $role = Role::findOrFail($id);
        $role->name = $request->nombre;
        $role->slug = $request->identificador;
        $role->description = $request->descripcion;
        if ($role->save()) {
            // $role->permissions()->sync(collect($request->permissions)->pluck('id')->toArray());// $role->permissions()->sync(collect($request->permissions)->pluck('id')->toArray());

            return response()->json([
                'updated' => true,
            ], 200);
        } else {
            return response()->json([
                'updated' => false,
            ], 500);
        }
    }
    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        if ($role->delete()) {
            return response()->json([
                'deleted' => true,
            ], 200);
        }
    }
}