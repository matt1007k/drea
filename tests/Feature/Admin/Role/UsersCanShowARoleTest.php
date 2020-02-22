<?php

namespace Tests\Feature\Admin\Role;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowARoleTest extends TestCase
{
    use RefreshDatabase;

    protected $role;

    protected function setUp(): void
    {
        parent::setUp();
        $this->role = factory(Role::class)->create(['name' => 'teste', 'slug' => 'slugtest']);
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_a_role()
    {
        $this->get(route('admin.roles.show', $this->role))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_a_role()
    {
        $this->actingAs($this->user)
            ->get(route('admin.roles.show', $this->role))
            ->assertViewIs('admin.roles.show')
            ->assertViewHas('role', $this->role)
            ->assertSeeText('Detalle de rol');
    }
}
