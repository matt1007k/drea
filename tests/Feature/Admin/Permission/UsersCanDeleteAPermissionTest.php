<?php

namespace Tests\Feature\Admin\Permission;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAPermissionTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $permission;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        // permission admin and assign to user
        $this->user = factory(User::class)->create();
        factory(Role::class)->create();
        User::first()->assignRoles('admin');

        $this->permission = factory(Permission::class)->create($this->formData());
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_a_permission()
    {
        $this->delete(route('admin.permissions.destroy', $this->permission), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_delete_a_permission()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.permissions.destroy', $this->permission), $this->formData());

        $this->assertDatabaseMissing('permissions', $this->formData());

        $response->assertRedirect(route('admin.permissions.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'name' => 'Segundo permiso',
            'slug' => 'segundo.permission',
            'description' => 'Segundo permiso del sistema',
        ], $override);
    }
}
