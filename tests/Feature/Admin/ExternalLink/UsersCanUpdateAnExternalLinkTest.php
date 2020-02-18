<?php

namespace Tests\Feature\Admin\ExternalLink;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\ExternalLink;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanUpdateAnExternalLinkTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    protected $external_link;
    protected $old_image_url;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();

        Storage::fake('external_links');

        $old_image = UploadedFile::fake()->image('imagen.png');
        $this->old_image_url = 'external_links/' . $old_image->hashName();

        $this->external_link = factory(ExternalLink::class)->create($this->formData([
            'imagen' => $this->old_image_url,
        ]));
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_external_link()
    {
        $this->get(route('admin.external_links.edit', $this->external_link))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_external_link()
    {
        $this->actingAs($this->user)
            ->get(route('admin.external_links.edit', $this->external_link))
            ->assertViewIs('admin.external_links.edit')
            ->assertViewHas('external_link', $this->external_link)
            ->assertSeeText('Editar enlace externo');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_external_link()
    {
        $this->put(route('admin.external_links.update', $this->external_link), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_update_a_external_link()
    {
        $new_image = UploadedFile::fake()->image('imagen.png');
        $new_image_url = 'external_links/' . $new_image->hashName();

        $response = $this->actingAs($this->user)
            ->put(route('admin.external_links.update', $this->external_link), $this->formData([
                'imagen' => $new_image
            ]));

        // Assert the file was updated...
        Storage::disk('public')->assertExists($new_image_url);

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing($this->old_image_url);

        $this->assertDatabaseHas('external_links', $this->formData([
            'imagen' => $new_image_url
        ]));

        $response->assertRedirect(route('admin.external_links.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_url_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.external_links.update', $this->external_link), $this->formData([
                'url' => ''
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_url_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.external_links.update', $this->external_link), $this->formData([
                'url' => 121
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_orden_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.external_links.update', $this->external_link), $this->formData([
                'orden' => ''
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_orden_must_be_a_integer()
    {
        $this->actingAs($this->user)
            ->put(route('admin.external_links.update', $this->external_link), $this->formData([
                'orden' => 's'
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_imagen_must_be_image()
    {
        $this->actingAs($this->user)
            ->put(route('admin.external_links.update', $this->external_link), $this->formData([
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
