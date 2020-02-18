<?php

namespace Tests\Feature\Admin\Submenu;

use App\Models\Menu;
use Tests\TestCase;
use App\Models\Submenu;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteASubmenuTest extends TestCase
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
        $this->submenu = factory(Submenu::class)->create($this->formData(['menu_id' => $this->menu->id]));
    }

    /**
     * @test
     */
    public function guest_users_cannot_delete_a_submenu()
    {
        $this->delete(route('admin.menus.submenus.destroy', [$this->menu, $this->submenu]), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_delete_a_submenu()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.menus.submenus.destroy', [$this->menu, $this->submenu]), $this->formData());

        $this->assertDatabaseMissing('submenus', $this->formData());

        $response->assertRedirect(route('admin.menus.show', $this->menu))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
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
