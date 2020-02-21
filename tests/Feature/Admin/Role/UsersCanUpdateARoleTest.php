<?php

namespace Tests\Feature\Admin\Role;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateARoleTest extends TestCase
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

        $this->role = factory(Role::class)->create([
            'name' => 'Primer rol',
            'slug' => 'primer.role',
            'description' => 'Primer rol del sistema',
        ]);
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_a_role()
    {
        $this->get(route('admin.roles.edit', $this->role))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_a_role()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user)
            ->get(route('admin.roles.edit', $this->role))
            ->assertViewIs('admin.roles.edit')
            ->assertViewHas('role', $this->role)
            ->assertSeeText('Editar rol');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_a_role()
    {
        $this->put(route('admin.roles.update', $this->role), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_update_a_role()
    {
        $response = $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData());

        $this->assertDatabaseHas('roles', $this->formData());

        $response->assertRedirect(route('admin.roles.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_name_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData([
                'name' => ''
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData([
                'name' => 121
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData([
                'name' => Str::random(101)
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_slug_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData([
                'slug' => ''
            ]))->assertSessionHasErrors(['slug']);
    }

    /** @test */
    public function the_slug_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData([
                'slug' => 121
            ]))->assertSessionHasErrors(['slug']);
    }

    /** @test */
    public function the_description_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData([
                'description' => ''
            ]))->assertSessionHasErrors(['description']);
    }

    /** @test */
    public function the_description_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData([
                'description' => 121
            ]))->assertSessionHasErrors(['description']);
    }

    /** @test */
    public function the_description_may_not_be_greater_than_250_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.roles.update', $this->role), $this->formData([
                'description' => Str::random(251)
            ]))->assertSessionHasErrors(['description']);
    }


    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'name' => 'Segundo rol',
            'slug' => 'segundo.role',
            'description' => 'Segundo rol del sistema',
        ], $override);
    }
}
