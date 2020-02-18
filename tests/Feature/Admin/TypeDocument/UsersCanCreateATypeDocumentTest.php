<?php

namespace Tests\Feature\Admin\TypeDocument;

use Tests\TestCase;
use App\Models\TypeDocument;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class UsersCanCreateATypeDocumentTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_create_type_document()
    {
        $this->get(route('admin.types.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_type_document()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->user)
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
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_create_post()
    {
        $response = $this->actingAs($this->user)
            ->post(route('admin.types.store'), $this->formData());

        $this->assertDatabaseHas('tipo_documentos', $this->formData());

        $response->assertRedirect(route('admin.documents.index'))
            ->assertSessionHas('msg', 'Registro completado');
    }

    /** @test */
    public function the_nombre_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.types.store'), $this->formData([
                'nombre' => ''
            ]))->assertSessionHasErrors(['nombre']);
    }

    /** @test */
    public function the_nombre_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.types.store'), $this->formData([
                'nombre' => 121
            ]))->assertSessionHasErrors(['nombre']);
    }

    /** @test */
    public function the_nombre_may_not_be_greater_than_50_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.types.store'), $this->formData([
                'nombre' => Str::random(51)
            ]))->assertSessionHasErrors(['nombre']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'nombre' => 'Primer tipo',
        ], $override);
    }
}
