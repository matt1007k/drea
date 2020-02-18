<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Menu;
use App\Models\Submenu;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubmenuTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test 
     */
    public function a_submenu_belongs_to_a_menu()
    {
        $menu = factory(Menu::class)->create();
        $submenu = factory(Submenu::class)->create(['menu_id' => $menu->id]);

        $this->assertInstanceOf(Menu::class, $submenu->menu);
    }
}
