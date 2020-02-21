<?php

namespace Tests\Feature\Admin\Permission;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAPermissionTest extends TestCase
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

        $this->permission = factory(Permission::class)->create([
            'name' => 'Primer permiso',
            'slug' => 'primer.permission',
            'description' => 'Primer permiso del sistema',
        ]);
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_a_permission()
    {
        $this->get(route('admin.permissions.show', $this->permission))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_a_permission()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user)
            ->get(route('admin.permissions.show', $this->permission))
            ->assertViewIs('admin.permissions.show')
            ->assertViewHas('permission', $this->permission)
            ->assertSeeText('Detalle del permiso');
    }
}
