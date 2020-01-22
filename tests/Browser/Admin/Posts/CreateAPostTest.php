<?php

namespace Tests\Browser\admin\Posts;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateAPostTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @throws \Throwable
     */
    public function users_admin_can_create_a_post()
    {
        $user = factory(User::class)->create();
        $post = [
            'titulo' => 'Titulo de la publicacion',
            'contenido' => '<h1>Contenido</h1>',
            'fecha' => '31/12/2019',
        ];
        $this->browse(function (Browser $browser) use ($user, $post) {
            $browser->loginAs($user)
                ->visit(route('admin.posts.create'))
                ->assertSee('Registrar aviso');
        });
    }
}
