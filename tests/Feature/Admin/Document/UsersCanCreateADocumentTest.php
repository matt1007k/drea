<?php

namespace Tests\Feature\Admin\Document;

use App\Models\Document;
use App\Models\TypeDocument;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class UsersCanCreateADocumentTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        factory(TypeDocument::class)->create(['nombre' => 'Fake']);
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_create_a_document()
    {
        $this->get(route('admin.documents.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_see_form_for_create_a_document()
    {
        $this->actingAs($this->user)
            ->get(route('admin.documents.create'))
            ->assertViewHasAll([
                'document',
                'tipos',
            ])
            ->assertViewIs('admin.documents.create');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_a_document()
    {
        $this->post(route('admin.documents.store'), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_create_a_document()
    {
        Storage::fake('documentos');

        $image = UploadedFile::fake()->image('document.pdf');
        $image_url = 'documentos/' . date('Y') . '/fake/' . $image->name;

        $response = $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'archivo' => $image,
            ]));

        Storage::disk('public')->assertExists($image_url);

        $this->assertDatabaseHas('documentos', $this->formData([
            'archivo' => $image_url,
        ]));

        $response->assertRedirect(route('admin.documents.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'titulo' => '',
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_tipo_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'tipo_id' => '',
            ]))->assertSessionHasErrors(['tipo_id']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'titulo' => 1212,
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_250_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'titulo' => Str::random(251),
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_descripcion_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'descripcion' => '',
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'descripcion' => 1212,
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'descripcion' => Str::random(301),
            ]))->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_archivo_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'archivo' => '',
            ]))->assertSessionHasErrors(['archivo']);
    }

    /** @test */
    public function the_anio_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'anio' => '',
            ]))->assertSessionHasErrors(['anio']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.documents.store'), $this->formData([
                'fecha' => '',
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** data send for user */
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
