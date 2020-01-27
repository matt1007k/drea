<?php

namespace Tests\Feature\Admin\Document;

use Tests\TestCase;
use App\Models\User;
use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanSeeListDocumentTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_users_cannot_see_list_document()
    {
        $this->get(route('admin.documents.index'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_document()
    {

        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $tipo = factory(TypeDocument::class)->create();
        $document1 = factory(Document::class)->create(['tipo_id' => $tipo->id, 'created_at' => now()->subDays(1)]);
        $document2 = factory(Document::class)->create(['tipo_id' => $tipo->id]);

        $response = $this->actingAs($user)
            ->get(route('admin.documents.index'));

        $response->assertViewHasAll([
            'documents',
            'tipo',
            'tipos',
            'search'
        ])
            ->assertViewIs('admin.documents.index')
            ->assertSee($document2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_tipo_documento_on_the_list_document()
    {

        $user = factory(User::class)->create();
        $tipo = factory(TypeDocument::class)->create();
        $document1 = factory(Document::class)->create(['tipo_id' => $tipo->id, 'created_at' => now()->subDays(1)]);
        $document2 = factory(Document::class)->create(['tipo_id' => $tipo->id]);

        $response = $this->actingAs($user)
            ->get("/admin/documents?tipo={$tipo->nombre}");

        $response->assertViewHas(
            'tipo',
            $tipo->nombre
        )->assertViewHas(
            'documents',
            Document::with('tipo')->byTipo($tipo->nombre)->latest()->get()
        );
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_document()
    {
        $user = factory(User::class)->create();
        $tipo = factory(TypeDocument::class)->create();
        $document1 = factory(Document::class)->create(['tipo_id' => $tipo->id, 'created_at' => now()->subDays(1)]);
        $document2 = factory(Document::class)->create(['titulo' => 'Documento', 'tipo_id' => $tipo->id]);

        $response = $this->actingAs($user)
            ->get("/admin/documents?tipo={$tipo->nombre}&search={$document2->titulo}");

        $response->assertViewHas(
            'tipo',
            $tipo->nombre
        )->assertViewHas(
            'search',
            $document2->titulo
        )->assertViewHas(
            'documents',
            Document::with('tipo')->search($document2->titulo)->latest()->get()
        );
    }
}
