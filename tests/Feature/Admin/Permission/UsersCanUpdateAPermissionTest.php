<?php

namespace Tests\Feature\Admin\Permission;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAPermissionTest extends TestCase
{
    use RefreshDatabase;

    protected $permission;

    protected function setUp(): void
    {
        parent::setUp();

        $this->permission = factory(Permission::class)->create([
            'name' => 'Primer permiso',
            'slug' => 'primer.permission',
            'description' => 'Primer permiso del sistema',
        ]);
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_a_permission()
    {
        $this->get(route('admin.permissions.edit', $this->permission))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_a_permission()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user)
            ->get(route('admin.permissions.edit', $this->permission))
            ->assertViewIs('admin.permissions.edit')
            ->assertViewHas('permission', $this->permission)
            ->assertSeeText('Editar permiso');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_a_permission()
    {
        $this->put(route('admin.permissions.update', $this->permission), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_update_a_permission()
    {
        $response = $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData());

        $this->assertDatabaseHas('permissions', $this->formData());

        $response->assertRedirect(route('admin.permissions.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_name_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData([
                'name' => ''
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData([
                'name' => 121
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_name_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData([
                'name' => Str::random(101)
            ]))->assertSessionHasErrors(['name']);
    }

    /** @test */
    public function the_slug_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData([
                'slug' => ''
            ]))->assertSessionHasErrors(['slug']);
    }

    /** @test */
    public function the_slug_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData([
                'slug' => 121
            ]))->assertSessionHasErrors(['slug']);
    }

    /** @test */
    public function the_description_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData([
                'description' => ''
            ]))->assertSessionHasErrors(['description']);
    }

    /** @test */
    public function the_description_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData([
                'description' => 121
            ]))->assertSessionHasErrors(['description']);
    }

    /** @test */
    public function the_description_may_not_be_greater_than_250_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.permissions.update', $this->permission), $this->formData([
                'description' => Str::random(251)
            ]))->assertSessionHasErrors(['description']);
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
