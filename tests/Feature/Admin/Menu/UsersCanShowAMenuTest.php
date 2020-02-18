<?php

namespace Tests\Feature\Admin\Menu;

use App\Models\Menu;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanShowAMenuTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $menu;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->menu = factory(Menu::class)->create();
    }

    /**
     * @test
     */
    public function autheticated_users_cannot_show_a_menu()
    {
        $this->get(route('admin.menus.show', $this->menu))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_show_a_menu()
    {
        $this->actingAs($this->user)
            ->get(route('admin.menus.show', $this->menu))
            ->assertViewIs('admin.menus.show')
            ->assertViewHas('menu', $this->menu)
            ->assertSee($this->menu->titulo);
    }
}
