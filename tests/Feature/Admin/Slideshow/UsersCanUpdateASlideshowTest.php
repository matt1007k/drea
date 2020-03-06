<?php

namespace Tests\Feature\Admin\Slideshow;

use App\Models\Slideshow;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Tests\TestCase;

class UsersCanUpdateASlideshowTest extends TestCase
{
    use RefreshDatabase;

    protected $slideshow;
    protected $image_name_old;

    protected function setUp(): void
    {
        parent::setUp();

        Storage::fake('slideshows');
        $image_old = UploadedFile::fake()->image('public/img/drea/logo.png');
        $this->image_name_old = 'slideshows/' . $image_old->hashName();
        $this->slideshow = factory(Slideshow::class)->create(['imagen' => $this->image_name_old]);
    }

    /**
     * @test
     */
    public function guest_users_cannot_see_page_edit_slideshow()
    {
        $this->get(route('admin.slideshows.edit', $this->slideshow))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_edit_slideshow()
    {
        $this->actingAs($this->user)
            ->get(route('admin.slideshows.edit', $this->slideshow))
            ->assertViewIs('admin.slideshows.edit')
            ->assertViewHas('slideshow', $this->slideshow)
            ->assertSeeText('Editar slideshow');
    }

    /**
     * @test
     */
    public function guest_users_cannot_update_slideshow()
    {
        $this->put(route('admin.slideshows.update', $this->slideshow), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_update_a_slideshow()
    {
        $image_new = UploadedFile::fake()->image('public/img/drea/logo.png');
        $image_name_new = 'slideshows/' . $image_new->hashName();

        $response = $this->actingAs($this->user)
            ->put(route('admin.slideshows.update', $this->slideshow), $this->formData([
                'imagen' => $image_new,
            ]));

        // Assert the file was updated...
        Storage::disk('public')->assertExists($image_name_new);
        // Assert the file was deleted...
        Storage::disk('public')->assertMissing($this->image_name_old);

        $this->assertDatabaseHas('slideshows', $this->formData([
            'imagen' => $image_name_new,
        ]));

        $response->assertRedirect(route('admin.slideshows.index'))
            ->assertSessionHas('msg', 'El registro se editó correctamente');
    }

    /** @test */
    public function the_titulo_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.slideshows.update', $this->slideshow), $this->formData([
                'titulo' => '',
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->put(route('admin.slideshows.update', $this->slideshow), $this->formData([
                'titulo' => 121,
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_titulo_may_not_be_greater_than_100_characters()
    {
        $this->actingAs($this->user)
            ->put(route('admin.slideshows.update', $this->slideshow), $this->formData([
                'titulo' => Str::random(101),
            ]))->assertSessionHasErrors(['titulo']);
    }

    /** @test */
    public function the_fecha_is_required()
    {
        $this->actingAs($this->user)
            ->put(route('admin.slideshows.update', $this->slideshow), $this->formData([
                'fecha' => '',
            ]))->assertSessionHasErrors(['fecha']);
    }

    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'titulo' => 'Mi primer slideshow',
            'imagen' => 'image.png',
            'fecha' => '2019-12-31 00:00:00',
            'publicado' => true,
        ], $override);
    }
}
