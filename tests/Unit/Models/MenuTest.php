<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Menu;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MenuTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test 
     */
    // public function a_menu_belongs_to_a_type_menu()
    // {
    //     $tipo = factory(Typemenu::class)->create();
    //     $menu = factory(Menu::class)->create();

    //     $this->assertInstanceOf(Typemenu::class, $menu->tipo);
    // }


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
