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
    protected $user;
    protected $menu2;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $menu1 = factory(Menu::class)->create(['created_at' => now()->subDays(1)]);
        $this->menu2 = factory(Menu::class)->create(['titulo' => 'menuo']);
    }

    /** @test */
    public function guest_users_cannot_see_list_menu()
    {
        $this->get(route('admin.menus.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_menu()
    {
        $response = $this->actingAs($this->user)
            ->get(route('admin.menus.index'));

        $response->assertViewHasAll([
            'menus',
            'search'
        ])
            ->assertViewIs('admin.menus.index')
            ->assertSee($this->menu2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_menu()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/menus?search={$this->menu2->titulo}");

        $response->assertViewHas(
            'search',
            $this->menu2->titulo
        )->assertViewHas(
            'menus',
            Menu::search($this->menu2->titulo)->latest()->get()
        );
    }
}
