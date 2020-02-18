<?php

namespace Tests\Feature\Admin\Submenu;

use App\Models\Menu;
use Tests\TestCase;
use App\Models\Submenu;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreateASubmenuTest extends TestCase
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
    public function guest_users_cannot_see_form_for_create_a_submenu()
    {
        $this->get(route('admin.menus.submenus.create', $this->menu))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_form_for_create_a_submenu()
    {
        $this->actingAs($this->user)
            ->get(route('admin.menus.submenus.create', $this->menu))
            ->assertViewIs('admin.submenus.create')
            ->assertViewHas(
                'submenu',
                new Submenu()
            );
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_a_submenu()
    {
        $this->post(route('admin.menus.submenus.store', $this->menu), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_create_a_submenu()
    {
        $response = $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData());

        $this->assertDatabaseHas('submenus', $this->formData());

        $response->assertRedirect(route('admin.menus.show', $this->menu))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }


    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData([
                'titulo' => 1212
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_50_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData([
                'titulo' => Str::random(51)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_ruta_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData([
                'ruta' => ''
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_ruta_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData([
                'ruta' => 1212
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_ruta_may_not_be_greater_than_20_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData([
                'ruta' => Str::random(21)
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_orden_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData([
                'orden' => ''
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_orden_must_be_a_number()
    {
        $this->actingAs($this->user)
            ->post(route('admin.menus.submenus.store', $this->menu), $this->formData([
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
