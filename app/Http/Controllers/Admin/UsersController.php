<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserCreatedRequest;
use App\Http\Requests\UserUpdatedRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:users.index')->only(['index']);
        $this->middleware('can:users.show')->only(['show']);
        $this->middleware('can:users.create')->only(['store', 'create']);
        $this->middleware('can:users.edit')->only(['update', 'edit']);
        $this->middleware('can:users.destroy')->only(['destroy']);
    }

    public function index()
    {
        $users = User::With(['roles'])->latest()->get();

        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function create()
    {
        $user = new User();
        return view('admin.users.create', compact('user'));
    }

    public function store(UserCreatedRequest $request)
    {
        $user = User::create($request->all());
        $user->syncRoles($request->roles);
        $user->syncPermissions($request->permissions);

        return redirect()->route('admin.users.index')
            ->with('msg', 'El registro se guardó correctamente');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    public function update(UserUpdatedRequest $request, User $user)
    {
        $user->update($request->all());
        $user->syncRoles($request->roles);
        $user->syncPermissions($request->permissions);

        return redirect()->route('admin.users.index')
            ->with('msg', 'El registro se editó correctamente');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin.users.index')
            ->with('msg', 'El registro se eliminó correctamente');
    }
}
