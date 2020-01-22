<?php

namespace Tests\Browser\Admin\Products;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UsersCanCreateADocumentTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @throws \Throwable
     */
    public function users_authenticated_can_create_a_document()
    {
        $user = factory(User::class)->create();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(route('admin.documents.create'))
                ->assertSee('Registrar documento')
                ->type('titulo', 'Mi primer documento')
                ->type('descripcion', 'Mi primer descripcion')
                ->type('url', 'documento.pdf')
                ->press('@btn-registrar')
                ->assertUrlIs(route('admin.documents.index'));
        });
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function users_authenticated_cannot_create_a_document_with_invalid_data()
    {
        $user = factory(User::class)->create();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(route('admin.documents.create'))
                ->assertSee('Registrar documento')
                ->type('titulo', '')
                ->type('descripcion', '')
                ->type('url', '')
                ->press('@btn-registrar')
                ->assertPresent('@error-titulo')
                ->assertPresent('@error-descripcion');
        });
    }
}
