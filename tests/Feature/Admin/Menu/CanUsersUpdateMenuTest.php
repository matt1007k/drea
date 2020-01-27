<?php

namespace Tests\Feature\Admin\Menu;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanUsersUpdateMenuTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_edit_a_menu()
    {
        $menu = factory(Menu::class)->create();

        $this->get(route('admin.menus.edit', $menu))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_a_menu()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $this->actingAs($user)
            ->get(route('admin.menus.edit', $menu))
            ->assertViewIs('admin.menus.edit')
            ->assertViewHas(
                'menu',
                $menu
            );
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_a_menu()
    {
        $menu = factory(Menu::class)->create();
        $this->put(route('admin.menus.update', $menu), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_update_a_menu()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData());

        $this->assertDatabaseHas('menus', $this->formData());

        $response->assertRedirect(route('admin.menus.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData([
                'titulo' => ''
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }


    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData([
                'titulo' => 1212
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_50_characters()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData([
                'titulo' => Str::random(51)
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_ruta_is_required()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData([
                'ruta' => ''
            ]));

        $response->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_ruta_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData([
                'ruta' => 1212
            ]));

        $response->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_ruta_may_not_be_greater_than_20_characters()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData([
                'ruta' => Str::random(21)
            ]));

        $response->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_orden_is_required()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData([
                'orden' => ''
            ]));

        $response->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_orden_must_be_a_number()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create();

        $response = $this->actingAs($user)
            ->put(route('admin.menus.update', $menu), $this->formData([
                'orden' => 'd'
            ]));

        $response->assertSessionHasErrors(['orden']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer menu',
            'ruta' => '/pagina',
            'orden' => 1,
            'publicado' => true,
        ], $override);
    }
}
