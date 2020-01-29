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

    /**
     * @test
     */
    public function autheticated_users_cannot_show_a_menu()
    {
        $menu = factory(Menu::class)->create();
        $this->get(route('admin.menus.show', $menu))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_show_a_menu()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $this->actingAs($user)
            ->get(route('admin.menus.show', $menu))
            ->assertViewIs('admin.menus.show')
            ->assertViewHas('menu', $menu)
            ->assertSee($menu->titulo);
    }
}
