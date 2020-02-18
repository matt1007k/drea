<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MenuTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test 
     */
    public function a_menu_has_many_submenus()
    {
        $menu = factory(Menu::class)->create();
        factory(Submenu::class)->create(['menu_id' => $menu->id]);

        $this->assertInstanceOf(Submenu::class, $menu->submenus->first());
    }

    /** @test */
    public function a_menu_return_a_collection_by_search()
    {
        $menu1 = factory(Menu::class)->create(['created_at' => now()->subDays(1)]);
        $menu2 = factory(Menu::class)->create();

        $this->assertEquals(
            $menu2->titulo,
            Menu::search($menu2->titulo)
                ->latest()->get()->first()->titulo
        );
    }
}
