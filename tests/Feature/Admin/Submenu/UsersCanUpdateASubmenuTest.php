<?php

namespace Tests\Feature\Admin\Submenu;

use App\Models\Menu;
use Tests\TestCase;
use App\Models\Submenu;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateASubmenuTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $menu;
    protected $submenu;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->menu = factory(Menu::class)->create();
        $this->submenu = factory(Submenu::class)->create(['menu_id' => $this->menu->id]);
    }
    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_edit_a_submenu()
    {
        $this->get(route('admin.menus.submenus.edit', [$this->menu, $this->submenu]))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_a_submenu()
    {
        $this->actingAs($this->user)
            ->get(route('admin.menus.submenus.edit', [$this->menu, $this->submenu]))
            ->assertViewIs('admin.submenus.edit')
            ->assertViewHas(
                'submenu',
                $this->submenu
            );
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_a_submenu()
    {
        $this->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_update_a_submenu()
    {
        $response = $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData());

        $this->assertDatabaseHas('submenus', $this->formData());

        $response->assertRedirect(route('admin.menus.show', $this->menu))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }


    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData([
                'titulo' => 1212
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_50_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData([
                'titulo' => Str::random(51)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_ruta_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData([
                'ruta' => ''
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_ruta_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData([
                'ruta' => 1212
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_ruta_may_not_be_greater_than_20_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData([
                'ruta' => Str::random(21)
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_orden_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData([
                'orden' => ''
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_orden_must_be_a_number()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.submenus.update', [$this->menu, $this->submenu]), $this->formData([
                'orden' => 'd'
            ]))->assertSessionHasErrors(['orden']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer submenu',
            'ruta' => '/pagina',
            'orden' => 1,
            'publicado' => true,
            'menu_id' => 1
        ], $override);
    }
}
