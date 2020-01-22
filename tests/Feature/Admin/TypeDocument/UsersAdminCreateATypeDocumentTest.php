<?php

namespace Tests\Feature\Admin\TypeDocument;

use Tests\TestCase;
use App\Models\TypeDocument;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class UsersAdminCreateATypeDocumentTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_type_document()
    {
        $this->get(route('admin.types.create'))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_type_document()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->get(route('admin.types.create'))
            ->assertViewIs('admin.types.create')
            ->assertViewHas('type', new TypeDocument)
            ->assertSeeText('Registrar tipo de documento');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_post()
    {
        $this->post(route('admin.types.store'), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_create_post()
    {
        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.types.store'), $this->formData());

        $this->assertDatabaseHas('tipo_documentos', $this->formData());

        $response->assertRedirect(route('admin.documents.index'))
            ->assertSessionHas('msg', 'Registro completado');
    }

    /** @test */
    public function the_nombre_is_required()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.types.store'), $this->formData([
                'nombre' => ''
            ]))->assertSessionHasErrors(['nombre']);
    }

    /** @test */
    public function the_nombre_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $this->actingAs($user)
            ->post(route('admin.types.store'), $this->formData([
                'nombre' => 121
            ]))->assertSessionHasErrors(['nombre']);
    }

    /** @test */
    public function the_nombre_may_not_be_greater_than_50_characters()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
            ->post(route('admin.types.store'), $this->formData([
                'nombre' => Str::random(51)
            ]));

        $response->assertSessionHasErrors(['nombre']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'nombre' => 'Primer tipo',
        ], $override);
    }
}
