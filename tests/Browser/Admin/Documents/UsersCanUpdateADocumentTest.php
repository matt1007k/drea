<?php

namespace Tests\Browser\Admin\Products;

use App\Models\TypeDocument;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UsersCanUpdateADocumentTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @throws \Throwable
     */
    public function users_authenticated_can_update_a_document()
    {
        $user = factory(User::class)->create();
        $tipo = factory(TypeDocument::class)->create();
        $this->browse(function (Browser $browser) use ($user, $tipo) {
            $elemento = $browser->loginAs($user)
                ->visit(route('admin.documents.create'))
                ->assertSee('Registrar documento')
                ->element('.select-wrapper.mdb-select.colorful-select.dropdown-primary.md-dropdown');
            $elemento->click();

            $browser
                ->waitFor('.dropdown-content.select-dropdown')
                ->click('.dropdown-content.select-dropdown > li.')
                ->select('tipo_id')
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
