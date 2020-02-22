<?php

namespace Tests\Feature\Admin\menu;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListUserTest extends TestCase
{
    use RefreshDatabase;

    protected $user2;

    protected function setUp(): void
    {
        parent::setUp();

        $user1 = factory(User::class)->create(['created_at' => now()->subDays(1)]);
        $this->user2 = factory(User::class)->create(['name' => 'segundo']);
    }

    /** @test */
    public function guest_users_cannot_see_list_post()
    {
        $this->get(route('admin.users.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_post()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.users.index'));

        $response->assertViewHasAll([
            'users',
        ])
            ->assertViewIs('admin.users.index')
            ->assertSee($this->user2->name);
    }
}
