<?php

namespace Tests\Feature\Admin\ExternalLink;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\ExternalLink;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreateAnExternalLinkTest extends TestCase
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
    public function guest_users_cannot_see_page_create_external_link()
    {
        $this->get(route('admin.external_links.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_external_link()
    {
        $this->actingAs($this->user)
            ->get(route('admin.external_links.create'))
            ->assertViewIs('admin.external_links.create')
            ->assertViewHas('external_link', new ExternalLink)
            ->assertSeeText('Registrar enlace externo');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_external_link()
    {
        $this->post(route('admin.external_links.store'), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_external_link()
    {
        Storage::fake('external_links');

        $this->withoutExceptionHandling();
        $image = UploadedFile::fake()->image('public/img/drea/logo.png');
        $image_url = 'external_links/' . $image->hashName();

        $response = $this->actingAs($this->user)
            ->post(route('admin.external_links.store'), $this->formData([
                'imagen' => $image
            ]));

        // Assert the file was stored...
        Storage::disk('public')->assertExists($image_url);
        $this->assertDatabaseHas('external_links', $this->formData([
            'imagen' => $image_url
        ]));

        $response->assertRedirect(route('admin.external_links.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_url_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.external_links.store'), $this->formData([
                'url' => ''
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_url_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.external_links.store'), $this->formData([
                'url' => 121
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_orden_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.external_links.store'), $this->formData([
                'orden' => ''
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_orden_must_be_a_integer()
    {
        $this->actingAs($this->user)
            ->post(route('admin.external_links.store'), $this->formData([
                'orden' => 's'
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_imagen_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.external_links.store'), $this->formData([
                'imagen' => ''
            ]))->assertSessionHasErrors(['imagen']);
    }

    /** @test */
    public function the_imagen_must_be_image()
    {
        $this->actingAs($this->user)
            ->post(route('admin.external_links.store'), $this->formData([
                'imagen' => 'file.pdf'
            ]))->assertSessionHasErrors(['imagen']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'url' => 'http//:www.google.com',
            'imagen' => 'image.png',
            'orden' => 1,
            'publicado' => true
        ], $override);
    }
}
