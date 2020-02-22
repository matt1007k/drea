<?php

namespace Tests\Feature\Admin\User;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAnUserTest extends TestCase
{
    use RefreshDatabase;

    protected $user2;

    protected function setUp(): void
    {
        parent::setUp();

        $this->user2 = factory(User::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_show_a_user()
    {
        $this->get(route('admin.users.show', $this->user2))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_show_a_user()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user)
            ->get(route('admin.users.show', $this->user2))
            ->assertViewIs('admin.users.show')
            ->assertViewHas('user', $this->user2)
            ->assertSeeText('Detalle del usuario');
    }
}
