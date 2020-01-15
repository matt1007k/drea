<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UsersCanSeeAboutUsTest extends DuskTestCase
{
    /**
     * @test
     * @throws \Throwable
     */
    public function users_see_about_us_page_content()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/nosotros')
                ->assertSee('La institución')
                ->assertSee('Misión')
                ->assertSee('Visión')
                ->assertSee('Valores institucionales')
                ->assertSee('Reseña histórica');
        });
    }
}
