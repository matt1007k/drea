<?php

namespace Tests\Feature\Admin\menu;

use Tests\TestCase;
use App\Models\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListRoleTest extends TestCase
{
    use RefreshDatabase;

    protected $role2;

    protected function setUp(): void
    {
        parent::setUp();

        $role1 = factory(Role::class)->create(['name' => 'primer', 'slug' => 'primer.role', 'created_at' => now()->subDays(1)]);
        $this->role2 = factory(Role::class)->create(['name' => 'segundo', 'slug' => 'segundo.role',]);
    }

    /** @test */
    public function guest_users_cannot_see_list_post()
    {
        $this->get(route('admin.roles.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_post()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.roles.index'));

        $response->assertViewHasAll([
            'roles',
        ])
            ->assertViewIs('admin.roles.index')
            ->assertSee($this->role2->name);
    }
}
