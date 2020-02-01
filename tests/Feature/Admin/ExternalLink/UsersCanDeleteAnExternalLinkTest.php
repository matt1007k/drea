<?php

namespace Tests\Feature\Admin\ExternalLink;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\ExternalLink;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAnExternalLinkTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function guest_users_cannot_create_external_link()
    {
        $external_link = factory(ExternalLink::class)->create();
        $this->delete(route('admin.external_links.destroy', $external_link), $this->formData())
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

        $image = UploadedFile::fake()->image('imagen.png');
        $external_link = factory(ExternalLink::class)->create($this->formData([
            'imagen' => 'external_links/' . $image->hashName()
        ]));

        $response = $this->actingAs($user)
            ->delete(route('admin.external_links.destroy', $external_link));

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing('external_links/' . $image->hashName());

        $this->assertDatabaseMissing('external_links', $this->formData([
            'imagen' => 'external_links/' . $image->hashName()
        ]));

        $response->assertRedirect(route('admin.external_links.index'))
            ->assertSessionHas('msg', 'El registro se eliminó correctamente');
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
