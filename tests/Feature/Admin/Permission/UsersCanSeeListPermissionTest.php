<?php

namespace Tests\Feature\Admin\menu;

use Tests\TestCase;
use App\Models\User;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListPermissionTest extends TestCase
{
    use RefreshDatabase;

    protected $permission2;

    protected function setUp(): void
    {
        parent::setUp();

        $permission1 = factory(Permission::class)->create(['name' => 'primer', 'slug' => 'primer.permission', 'created_at' => now()->subDays(1)]);
        $this->permission2 = factory(Permission::class)->create(['name' => 'segundo', 'slug' => 'segundo.permission',]);
    }

    /** @test */
    public function guest_users_cannot_see_list_post()
    {
        $this->get(route('admin.permissions.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_post()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.permissions.index'));

        $response->assertViewHasAll([
            'permissions',
        ])
            ->assertViewIs('admin.permissions.index')
            ->assertSee($this->permission2->name);
    }
}
