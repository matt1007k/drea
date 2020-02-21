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

    protected $user;
    protected $role2;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';
        $this->user = factory(User::class)->create();
        factory(Role::class)->create();
        User::first()->assignRoles('admin');

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
            'search'
        ])
            ->assertViewIs('admin.roles.index')
            ->assertSee($this->role2->name);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_post()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/roles?search={$this->role2->name}");

        $response->assertViewHas(
            'search',
            $this->role2->name
        )->assertViewHas(
            'roles',
            Role::where('name', 'LIKE', "%{$this->role2->name}%")
                ->orderBy('created_at', 'DESC')->get()
        );
    }
}
