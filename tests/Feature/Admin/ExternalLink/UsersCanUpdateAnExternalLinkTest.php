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

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_external_link()
    {
        $external_link = factory(ExternalLink::class)->create();
        $this->get(route('admin.external_links.edit', $external_link))
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_external_link()
    {
        $user = factory(User::class)->create();
        $external_link = factory(ExternalLink::class)->create();

        $this->actingAs($user)
            ->get(route('admin.external_links.edit', $external_link))
            ->assertViewIs('admin.external_links.edit')
            ->assertViewHas('external_link', $external_link)
            ->assertSeeText('Editar enlace externo');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_external_link()
    {
        $external_link = factory(ExternalLink::class)->create();
        $this->put(route('admin.external_links.update', $external_link), $this->formData())
            ->assertRedirect('/login');
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_external_link()
    {
        Storage::fake('external_links');

        $this->withoutExceptionHandling();
        $user = factory(User::class)->create();

        $old_image = UploadedFile::fake()->image('imagen.png');
        $external_link = factory(ExternalLink::class)->create($this->formData([
            'imagen' => 'external_links/' . $old_image->hashName()
        ]));

        $new_image = UploadedFile::fake()->image('imagen.png');

        $response = $this->actingAs($user)
            ->put(route('admin.external_links.update', $external_link), $this->formData([
                'imagen' => $new_image
            ]));

        // Assert the file was updated...
        Storage::disk('public')->assertExists('external_links/' . $new_image->hashName());

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing('external_links/' . $old_image->hashName());

        $this->assertDatabaseHas('external_links', $this->formData([
            'imagen' => 'external_links/' . $new_image->hashName()
        ]));

        $response->assertRedirect(route('admin.external_links.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_url_is_required()
    {
        $user = factory(User::class)->create();
        $external_link = factory(ExternalLink::class)->create();

        $this->actingAs($user)
            ->put(route('admin.external_links.update', $external_link), $this->formData([
                'url' => ''
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_url_must_be_a_string()
    {
        $user = factory(User::class)->create();
        $external_link = factory(ExternalLink::class)->create();

        $this->actingAs($user)
            ->put(route('admin.external_links.update', $external_link), $this->formData([
                'url' => 121
            ]))->assertSessionHasErrors(['url']);
    }

    /** @test */
    public function the_orden_is_required()
    {
        $user = factory(User::class)->create();
        $external_link = factory(ExternalLink::class)->create();

        $this->actingAs($user)
            ->put(route('admin.external_links.update', $external_link), $this->formData([
                'orden' => ''
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_orden_must_be_a_integer()
    {
        $user = factory(User::class)->create();
        $external_link = factory(ExternalLink::class)->create();

        $this->actingAs($user)
            ->put(route('admin.external_links.update', $external_link), $this->formData([
                'orden' => 's'
            ]))->assertSessionHasErrors(['orden']);
    }

    /** @test */
    public function the_imagen_must_be_image()
    {
        $user = factory(User::class)->create();
        $external_link = factory(ExternalLink::class)->create();

        $this->actingAs($user)
            ->put(route('admin.external_links.update', $external_link), $this->formData([
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
