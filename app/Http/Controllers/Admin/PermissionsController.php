<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PermisoCreatedRequest;
use App\Http\Requests\PermisoUpdatedRequest;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('has.permission:permissions.index')->only(['index']);
        $this->middleware('has.permission:permissions.show')->only(['show']);
        $this->middleware('has.permission:permissions.create')->only(['create', 'store']);
        $this->middleware('has.permission:permissions.edit')->only(['edit', 'update']);
        $this->middleware('has.permission:permissions.destroy')->only(['destroy']);
    }
    public function index(Request $request)
    {
        $permissions = Permission::orderBy('name', 'ASC')->get();

        return response()->json(['permissions' => $permissions], 200);
    }

    public function getPermissions(Request $request)
    {
        $permissions = Permission::orderBy('name', 'ASC')->get();

        return response()->json(['permissions' => $permissions], 200);
    }

    public function store(PermisoCreatedRequest $request)
    {
        $permission = new Permission();
        $permission->name = $request->nombre;
        $permission->slug = $request->identificador;
        $permission->description = $request->descripcion;
        if ($permission->save()) {
            return response()->json([
                'created' => true,
            ], 200);
        } else {
            return response()->json([
                'created' => false,
            ], 500);
        }
    }

    public function update(PermisoUpdatedRequest $request, $id)
    {
        $permission = Permission::findOrFail($id);
        $permission->name = $request->nombre;
        $permission->slug = $request->identificador;
        $permission->description = $request->descripcion;
        if ($permission->save()) {

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
        $permission = Permission::findOrFail($id);
        if ($permission->delete()) {
            return response()->json([
                'deleted' => true,
            ], 200);
        }
    }
}