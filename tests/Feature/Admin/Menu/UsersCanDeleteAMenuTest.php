<?php

namespace Tests\Feature\Admin\Menu;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAMenuTest extends TestCase
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
        $this->menu = factory(Menu::class)->create($this->formData());
    }

    /**
     * @test
     */
    public function guest_cannot_delete_a_menu()
    {
        $this->delete(route('admin.menus.destroy', $this->menu))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_delete_a_menu()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.menus.destroy', $this->menu));

        $this->assertDatabaseMissing('menus', $this->formData());

        $response->assertRedirect(route('admin.menus.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
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
