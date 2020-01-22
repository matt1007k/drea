<?php

namespace Tests\Browser\Users;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @throws \Throwable
     */
    public function user_can_authenticated()
    {
        factory(User::class)->create([
            'email' => 'test1@gmail.com'
        ]);
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->type('email', 'test1@gmail.com')
                ->type('password', 'password')
                ->press('@btn-login')
                ->assertPathIs('/admin')
                ->assertAuthenticated();
        });
    }
}
