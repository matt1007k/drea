<?php

namespace Tests\Browser\Admin\TypeDocuments;

use App\Models\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CreateATypeDocumentTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @throws \Throwable
     */
    public function users_can_visit_create_a_type_document()
    {
        $user = factory(User::class)->create();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(route('admin.documents.index'))
                ->press('@btn-create-type')
                ->assertUrlIs(route('admin.types.create'));
        });
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function users_authenticated_can_create_a_type_document()
    {
        $user = factory(User::class)->create();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(route('admin.types.create'))
                ->assertSee('Registrar tipo de documento')
                ->type('nombre', 'Mi primer tipo de documento')
                ->press('@btn-registrar')
                ->assertUrlIs(route('admin.documents.index'));
        });
    }

    /**
     * @test
     * @throws \Throwable
     */
    public function users_authenticated_cannot_create_a_type_document_with_data_invalid()
    {
        $user = factory(User::class)->create();
        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                ->visit(route('admin.types.create'))
                ->assertSee('Registrar tipo de documento')
                ->type('nombre', '')
                ->press('@btn-registrar')
                ->assertUrlIs(route('admin.types.create'))
                ->assertSeeIn('@error-nombre', 'El campo nombre es obligatorio');
        });
    }
}
