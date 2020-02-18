<?php

namespace Tests\Feature\Admin\Document;

use App\Models\Document;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteADocumentTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $document;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
        $this->document = factory(Document::class)->create($this->formData());
    }
    /**
     * @test
     */
    public function autheticated_users_cannot_destroy_a_document()
    {
        $this->delete(route('admin.documents.destroy', $this->document))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_can_destroy_a_document()
    {
        $this->actingAs($this->user)
            ->delete(route('admin.documents.destroy', $this->document))
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
