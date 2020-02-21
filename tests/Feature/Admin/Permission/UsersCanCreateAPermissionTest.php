<?php

namespace Tests\Feature\Admin\Role;

use Caffeinated\Shinobi\Models\Role;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreateAPermissionTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        factory(Role::class)->create();
        User::first()->assignRoles('admin');
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_a_role()
    {
        $this->get(route('admin.permissions.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_a_role()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user)
            ->get(route('admin.permissions.create'))
            ->assertViewIs('admin.permissions.create')
            ->assertViewHas('permission', new Permission)
            ->assertSeeText('Registrar permiso');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_a_role()
    {
        $this->post(route('admin.permissions.store'), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_role()
    {
        $response = $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData());

        $this->assertDatabaseHas('permissions', $this->formData());

        $response->assertRedirect(route('admin.permissions.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_name_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData([
                'name' => ''
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData([
                'name' => 121
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData([
                'name' => Str::random(101)
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_slug_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData([
                'slug' => ''
            ]))->assertSessionHasErrors(['slug']);
    }

    /** @test */
    public function the_slug_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData([
                'slug' => 121
            ]))->assertSessionHasErrors(['slug']);
    }

    /** @test */
    public function the_description_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData([
                'description' => ''
            ]))->assertSessionHasErrors(['description']);
    }

    /** @test */
    public function the_description_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData([
                'description' => 121
            ]))->assertSessionHasErrors(['description']);
    }

    /** @test */
    public function the_description_may_not_be_greater_than_250_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.permissions.store'), $this->formData([
                'description' => Str::random(251)
            ]))->assertSessionHasErrors(['description']);
    }


    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'name' => 'Primer permiso',
            'slug' => 'primer.permission',
            'description' => 'Primer permiso del sistema',
        ], $override);
    }
}
