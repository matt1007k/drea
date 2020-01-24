<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DocumentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test 
     */
    public function a_document_belongs_to_a_type_document()
    {
        $tipo = factory(TypeDocument::class)->create();
        $document = factory(Document::class)->create(['tipo_id' => $tipo->id]);

        $this->assertInstanceOf(TypeDocument::class, $document->tipo);
    }

    /** @test */
    public function a_document_return_a_collection_by_tipo_nombre()
    {
        $tipo = factory(TypeDocument::class)->create();
        $document1 = factory(Document::class)->create(['tipo_id' => $tipo->id, 'created_at' => now()->subDays(1)]);
        $document2 = factory(Document::class)->create(['tipo_id' => $tipo->id]);

        $this->assertEquals(
            $tipo->documentos()->latest()->first()->titulo, // $document2->titulo
            Document::with('tipo')->byTipo($tipo->nombre)->latest()->get()->first()->titulo
        );
    }

    /** @test */
    public function a_document_return_a_collection_by_search()
    {
        $tipo = factory(TypeDocument::class)->create();
        $document1 = factory(Document::class)->create(['tipo_id' => $tipo->id, 'created_at' => now()->subDays(1)]);
        $document2 = factory(Document::class)->create(['tipo_id' => $tipo->id]);

        $this->assertEquals(
            $document2->titulo,
            Document::with('tipo')->search($document2->titulo)
                ->latest()->get()->first()->titulo
        );
    }
}
