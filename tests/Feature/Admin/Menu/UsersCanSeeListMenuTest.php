<?php

namespace Tests\Feature\Admin\menu;

use Tests\TestCase;
use App\Models\User;
use App\Models\Menu;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListMenuTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_users_cannot_see_list_menu()
    {
        $this->get(route('admin.menus.index'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_menu()
    {

        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $menu1 = factory(Menu::class)->create(['created_at' => now()->subDays(1)]);
        $menu2 = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->get(route('admin.menus.index'));

        $response->assertViewHasAll([
            'menus',
            'search'
        ])
            ->assertViewIs('admin.menus.index')
            ->assertSee($menu2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_menu()
    {
        $user = factory(User::class)->create();
        $menu1 = factory(Menu::class)->create(['created_at' => now()->subDays(1)]);
        $menu2 = factory(Menu::class)->create(['titulo' => 'menuo']);

        $response = $this->actingAs($user)
            ->get("/admin/menus?search={$menu2->titulo}");

        $response->assertViewHas(
            'search',
            $menu2->titulo
        )->assertViewHas(
            'menus',
            Menu::search($menu2->titulo)->latest()->get()
        );
    }
}
