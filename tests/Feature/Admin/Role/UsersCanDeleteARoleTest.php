<?php

namespace Tests\Feature\Admin\Role;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteARoleTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $role;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        // role admin and assign to user
        $this->user = factory(User::class)->create();
        factory(Role::class)->create();
        User::first()->assignRoles('admin');

        $this->role = factory(Role::class)->create($this->formData());
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_a_role()
    {
        $this->delete(route('admin.roles.destroy', $this->role), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_delete_a_role()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.roles.destroy', $this->role), $this->formData());

        $this->assertDatabaseMissing('roles', $this->formData());

        $response->assertRedirect(route('admin.roles.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'name' => 'Primer rol',
            'slug' => 'primer.role',
            'description' => 'Primer rol del sistema',
        ], $override);
    }
}
