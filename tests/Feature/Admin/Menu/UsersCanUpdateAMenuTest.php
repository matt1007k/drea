<?php

namespace Tests\Feature\Admin\Menu;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAMenuTest extends TestCase
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
    public function guest_users_cannot_see_form_for_edit_a_menu()
    {
        $this->get(route('admin.menus.edit', $this->menu))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_a_menu()
    {
        $this->actingAs($this->user)
            ->get(route('admin.menus.edit', $this->menu))
            ->assertViewIs('admin.menus.edit')
            ->assertViewHas(
                'menu',
                $this->menu
            );
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_a_menu()
    {
        $this->put(route('admin.menus.update', $this->menu), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_update_a_menu()
    {
        $response = $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData());

        $this->assertDatabaseHas('menus', $this->formData());

        $response->assertRedirect(route('admin.menus.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData([
                'titulo' => ''
            ]))->assertSessionHasErrors(['titulo']);
    }


    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData([
                'titulo' => 1212
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData([
                'titulo' => Str::random(101)
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_ruta_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData([
                'ruta' => ''
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_ruta_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData([
                'ruta' => 1212
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_ruta_may_not_be_greater_than_50_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData([
                'ruta' => Str::random(51)
            ]))->assertSessionHasErrors(['ruta']);
    }

    /** @test */
    public function the_orden_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData([
                'orden' => ''
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_orden_must_be_a_number()
    {
        $this->actingAs($this->user)
            ->put(route('admin.menus.update', $this->menu), $this->formData([
                'orden' => 'd'
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_orden_must_be_uniqued()
    {
        factory(Menu::class)->create();
        $this->actingAs($this->user)
            ->post(route('admin.menus.store'), $this->formData([
                'orden' => 2
            ]))->assertSessionHasErrors(['orden']);
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
