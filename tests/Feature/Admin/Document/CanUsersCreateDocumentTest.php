<?php

namespace Tests\Feature\Admin\Document;

use App\Models\Document;
use App\Models\TypeDocument;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CanUsersCreateDocumentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_form_for_create_a_document()
    {
        $this->get(route('admin.documents.create'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_see_form_for_create_a_document()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('admin.documents.create'))
            ->assertViewHasAll([
                'document',
                'tipos'
            ])
            ->assertViewIs('admin.documents.create');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_a_document()
    {
        $this->post(route('admin.documents.store'), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_can_create_a_document()
    {
        $user = factory(User::class)->create();
        factory(TypeDocument::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData());

        $this->assertDatabaseHas('documentos', $this->formData());

        $response->assertRedirect(route('admin.documents.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData([
                'titulo' => ''
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_tipo_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData([
                'tipo_id' => ''
            ]));

        $response->assertSessionHasErrors(['tipo_id']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData([
                'titulo' => 1212
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData([
                'titulo' => Str::random(101)
            ]));

        $response->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_descripcion_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData([
                'descripcion' => ''
            ]));

        $response->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_must_be_a_string()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData([
                'descripcion' => 1212
            ]));

        $response->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_descripcion_may_not_be_greater_than_100_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData([
                'descripcion' => Str::random(301)
            ]));

        $response->assertSessionHasErrors(['descripcion']);
    }

    /** @test */
    public function the_url_is_required()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.documents.store'), $this->formData([
                'url' => ''
            ]));

        $response->assertSessionHasErrors(['url']);
    }

    /** data send for user */
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
