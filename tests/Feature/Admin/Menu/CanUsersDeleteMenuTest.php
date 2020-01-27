<?php

namespace Tests\Feature\Admin\Menu;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanUsersDeleteMenuTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function users_can_delete_a_menu()
    {
        $user = factory(User::class)->create();
        $menu = factory(Menu::class)->create($this->formData());

        $response = $this->actingAs($user)
            ->delete(route('admin.menus.destroy', $menu));

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
