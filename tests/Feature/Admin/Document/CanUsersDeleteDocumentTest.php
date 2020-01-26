<?php

namespace Tests\Feature\Admin\Document;

use App\Models\Document;
use App\Models\TypeDocument;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanUsersDeleteDocumentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function autheticated_users_cannot_destroy_a_document()
    {
        $document = factory(Document::class)->create();
        $this->delete(route('admin.documents.destroy', $document))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_destroy_a_document()
    {
        $user = factory(User::class)->create();
        $document = factory(Document::class)->create($this->formData());

        $this->actingAs($user)
            ->delete(route('admin.documents.destroy', $document))
            ->assertRedirect(route('admin.documents.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');

        $this->assertDatabaseMissing('documentos', $this->formData());
    }


    /** data send create for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer documento',
            'descripcion' => 'Mi primer descripcion',
            'url' => 'document.pdf',
            // create factory
        ], $override);
    }
}
