<?php

namespace Tests\Browser\Users;


use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @throws \Throwable
     */
    public function user_can_registered()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->type('name', 'test1')
                ->type('email', 'test1@gmail.com')
                ->type('password', 'password')
                ->type('password_confirmation', 'password')
                ->press('@btn-register')
                ->assertPathIs('/admin')
                ->assertAuthenticated();
        });
    }
}
