<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TypeDocumentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function a_type_document_has_many_documents()
    {
        $tipo = factory(TypeDocument::class)->create();
        factory(Document::class, 2)->create(['tipo_id' => $tipo->id]);

        $this->assertInstanceOf(Document::class, $tipo->documentos->first());
    }
}
