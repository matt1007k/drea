<?php

namespace Tests\Feature\Admin\Document;

use App\Models\Document;
use App\Models\TypeDocument;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class UsersCanUpdateADocumentTest extends TestCase
{
    use RefreshDatabase;

    protected $document;

    protected function setUp(): void
    {
        parent::setUp();

        $tipo = factory(TypeDocument::class)->create(['nombre' => 'Fake']);
        $this->document = factory(Document::class)->create(['tipo_id' => $tipo->id]);
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_edit_a_document()
    {
        $this->get(route('admin.documents.edit', $this->document))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_a_document()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user)
            ->get(route('admin.documents.edit', $this->document))
            ->assertViewHasAll([
                'document',
                'tipos',
            ])
            ->assertViewIs('admin.documents.edit');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_a_document()
    {
        $this->put(route('admin.documents.update', $this->document), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_update_a_document()
    {
        Storage::fake('documentos');

        $old_image = UploadedFile::fake()->image('document.pdf');
        $old_image_url = 'documentos/' . date('Y') . '/fake/' . $old_image->name;

        $this->document = factory(Document::class)->create($this->formData([
            'archivo' => $old_image_url,
        ]));

        $image = UploadedFile::fake()->image('document1.pdf');
        $image_url = 'documentos/' . date('Y') . '/fake/' . $image->name;

        $response = $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'archivo' => $image,
            ]));
        // Assert a file does not exist...
        Storage::disk('public')->assertMissing($old_image_url);

        Storage::disk('public')->assertExists($image_url);

        $this->assertDatabaseHas('documentos', $this->formData([
            'archivo' => $image_url,
        ]));

        $response->assertRedirect(route('admin.documents.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'titulo' => '',
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_tipo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'tipo_id' => '',
            ]))->assertSessionHasErrors(['tipo_id']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'titulo' => 1212,
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_250_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'titulo' => Str::random(251),
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_descripcion_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'descripcion' => '',
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'descripcion' => 1212,
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'descripcion' => Str::random(301),
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_anio_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'anio' => '',
            ]))->assertSessionHasErrors(['anio']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.documents.update', $this->document), $this->formData([
                'fecha' => '',
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** data send create for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer documento',
            'descripcion' => 'Mi primer descripcion',
            'archivo' => 'document.pdf',
            'anio' => date('Y'),
            'fecha' => now(),
            'publicado' => true,
            'tipo_id' => 1,
        ], $override);
    }
}
