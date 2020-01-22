<?php

namespace Tests\Browser\Admin\Products;

use App\Models\Document;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CanSeeListDocumentTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * @test
     * @throws \Throwable
     */
    public function users_can_see_list_document()
    {
        $user = factory(User::class)->create();
        $documents = factory(Document::class, 2)->create();
        $this->browse(function (Browser $browser) use ($user, $documents) {
            $browser->loginAs($user)
                ->visit(route('admin.documents.index'));

            foreach ($documents as $document) {
                $browser->assertSee($document->titulo)
                    ->assertSee($document->descripcion)
                    ->assertPresent("@url-$document->id");
            }
        });
    }
}