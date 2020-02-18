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

    protected $user;
    protected $tipo;
    protected $document2;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->tipo = factory(TypeDocument::class)->create();
        $document1 = factory(Document::class)->create(['tipo_id' => $this->tipo->id, 'created_at' => now()->subDays(1)]);
        $this->document2 = factory(Document::class)->create(['titulo' => 'Documento', 'tipo_id' => $this->tipo->id]);
    }
    /** @test */
    public function guest_users_cannot_see_list_document()
    {
        $this->get(route('admin.documents.index'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_authenticated_can_see_list_document()
    {
        $this->withoutExceptionHandling();
        $response = $this->actingAs($this->user)
            ->get(route('admin.documents.index'));

        $response->assertViewHasAll([
            'documents',
            'tipo',
            'tipos',
            'search'
        ])
            ->assertViewIs('admin.documents.index')
            ->assertSee($this->document2->titulo);
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_tipo_documento_on_the_list_document()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/documents?tipo={$this->tipo->nombre}");

        $response->assertViewHas(
            'tipo',
            $this->tipo->nombre
        )->assertViewHas(
            'documents',
            Document::with('tipo')->byTipo($this->tipo->nombre)->latest()->get()
        );
    }

    /**
     * @test
     */
    public function users_authenticated_can_search_by_fields_on_the_list_document()
    {
        $response = $this->actingAs($this->user)
            ->get("/admin/documents?tipo={$this->tipo->nombre}&search={$this->document2->titulo}");

        $response->assertViewHas(
            'tipo',
            $this->tipo->nombre
        )->assertViewHas(
            'search',
            $this->document2->titulo
        )->assertViewHas(
            'documents',
            Document::with('tipo')->search($this->document2->titulo)->latest()->get()
        );
    }
}
