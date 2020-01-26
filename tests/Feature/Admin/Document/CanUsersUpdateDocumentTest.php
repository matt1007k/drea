<?php

namespace Tests\Feature\Admin\Document;

use App\Models\Document;
use App\Models\TypeDocument;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanUsersUpdateDocumentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_edit_a_document()
    {
        $document = factory(Document::class)->create();
        $this->get(route('admin.documents.edit', $document))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_see_form_for_edit_a_document()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();
        $document = factory(Document::class)->create();

        $this->actingAs($user)
            ->get(route('admin.documents.edit', $document))
            ->assertViewHasAll([
                'document',
                'tipos'
            ])
            ->assertViewIs('admin.documents.edit');
    }

    /**
     * @test
     */
     public function guest_users_cannot_update_a_document()
     {
         $document = factory(Document::class)->create();

         $this->put(route('admin.documents.update', $document), $this->formData())
             ->assertRedirect('/login');
     }

    /**
     * @test
     */
     public function users_can_update_a_document()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();

         factory(TypeDocument::class)->create();

         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData());

         $this->assertDatabaseHas('documentos', $this->formData());

         $response->assertRedirect(route('admin.documents.index'))
             ->assertSessionHas('msg', 'El registro se editó correctamente');
     }

    /** @test */
     public function the_titulo_is_required()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();

         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData([
                 'titulo' => ''
             ]));

         $response->assertSessionHasErrors(['titulo']);
     }

    /** @test */
     public function the_tipo_is_required()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();
         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData([
                 'tipo_id' => ''
             ]));

         $response->assertSessionHasErrors(['tipo_id']);
     }

    /** @test */
     public function the_titulo_must_be_a_string()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();

         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData([
                 'titulo' => 1212
             ]));

         $response->assertSessionHasErrors(['titulo']);
     }

    /** @test */
     public function the_titulo_may_not_be_greater_than_100_characters()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();

         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData([
                 'titulo' => Str::random(101)
             ]));

         $response->assertSessionHasErrors(['titulo']);
     }

    /** @test */
     public function the_descripcion_is_required()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();

         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData([
                 'descripcion' => ''
             ]));

         $response->assertSessionHasErrors(['descripcion']);
     }

    /** @test */
     public function the_descripcion_must_be_a_string()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();

         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData([
                 'descripcion' => 1212
             ]));

         $response->assertSessionHasErrors(['descripcion']);
     }

    /** @test */
     public function the_descripcion_may_not_be_greater_than_100_characters()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();

         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData([
                 'descripcion' => Str::random(301)
             ]));

         $response->assertSessionHasErrors(['descripcion']);
     }

    /** @test */
     public function the_url_is_required()
     {
         $user = factory(User::class)->create();
         $document = factory(Document::class)->create();

         $response = $this->actingAs($user)
             ->put(route('admin.documents.update', $document), $this->formData([
                 'url' => ''
             ]));

         $response->assertSessionHasErrors(['url']);
     }

    /** data send create for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer documento',
            'descripcion' => 'Mi primer descripcion',
            'url' => 'document.pdf',
            'tipo_id' => 1,
        ], $override);
    }

}
