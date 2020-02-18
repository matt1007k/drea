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

    protected $user;
    protected $external_link;
    protected $image_url;
    protected $pathLogin;

    protected function setUp(): void
    {
        parent::setUp();
        $this->pathLogin = '/auth/login';

        $this->user = factory(User::class)->create();

        Storage::fake('external_links');

        $image = UploadedFile::fake()->image('imagen.png');
        $this->image_url = 'external_links/' . $image->hashName();

        $this->external_link = factory(ExternalLink::class)->create($this->formData([
            'imagen' => $this->image_url
        ]));
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_external_link()
    {
        $this->delete(route('admin.external_links.destroy', $this->external_link), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_a_external_link()
    {
        $response = $this->actingAs($this->user)
            ->delete(route('admin.external_links.destroy', $this->external_link));

        // Assert a file does not exist...
        Storage::disk('public')->assertMissing($this->image_url);

        $this->assertDatabaseMissing('external_links', $this->formData([
            'imagen' => $this->image_url
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
