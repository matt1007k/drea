<?php

use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Database\Seeder;

class DocumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeDocument::truncate();
        Document::truncate();

        $tipo1 = factory(TypeDocument::class)->create(['nombre' => 'Documentos de interés']);
        factory(Document::class, 10)->create(['tipo_id' => $tipo1->id]);

        $tipo2 = factory(TypeDocument::class)->create(['nombre' => 'Resoluciones']);
        factory(Document::class, 10)->create(['tipo_id' => $tipo2->id]);

        $tipo3 = factory(TypeDocument::class)->create(['nombre' => 'Directivas']);
        factory(Document::class, 10)->create(['tipo_id' => $tipo3->id]);

        $tipo4 = factory(TypeDocument::class)->create(['nombre' => 'Notas de prensa']);
        factory(Document::class, 10)->create(['tipo_id' => $tipo4->id]);

        $tipo5 = factory(TypeDocument::class)->create(['nombre' => 'Contratos']);
        factory(Document::class, 10)->create(['tipo_id' => $tipo5->id]);

        $tipo6 = factory(TypeDocument::class)->create(['nombre' => 'Otros']);
        factory(Document::class, 10)->create(['tipo_id' => $tipo6->id]);
    }
}
