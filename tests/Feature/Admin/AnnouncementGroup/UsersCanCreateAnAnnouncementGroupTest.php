<?php

namespace Tests\Feature\Admin\AnnouncementGroup;

use Tests\TestCase;
use App\Models\AnnouncementGroup;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanCreateAnAnnouncementGroupTest extends TestCase
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
    public function guest_users_cannot_see_page_create_announcement_group()
    {
        $this->get(route('admin.announcement_groups.create'))
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_see_page_create_announcement_group()
    {
        $this->actingAs($this->user)
            ->get(route('admin.announcement_groups.create'))
            ->assertViewIs('admin.announcement_groups.create')
            ->assertViewHas('announcement_group', new AnnouncementGroup)
            ->assertSeeText('Registrar grupo de convocatoria');
    }

    /**
     * @test
     */
    public function guest_users_cannot_create_an_announcement_group()
    {
        $this->post(route('admin.announcement_groups.store'), $this->formData())
            ->assertRedirect($this->pathLogin);
    }

    /**
     * @test
     */
    public function users_admin_can_create_an_announcement_group()
    {
        $this->withoutExceptionHandling();
        $response = $this->actingAs($this->user)
            ->post(route('admin.announcement_groups.store'), $this->formData());

        $this->assertDatabaseHas('announcement_groups', $this->formData());

        $response->assertRedirect(route('admin.announcement_groups.index'))
            ->assertSessionHas('msg', 'El registro se guardó correctamente');
    }

    /** @test */
    public function the_nombre_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.announcement_groups.store'), $this->formData([
                'nombre' => ''
            ]))->assertSessionHasErrors(['nombre']);
    }

    /** @test */
    public function the_nombre_must_be_a_string()
    {
        $this->actingAs($this->user)
            ->post(route('admin.announcement_groups.store'), $this->formData([
                'nombre' => 121
            ]))->assertSessionHasErrors(['nombre']);
    }

    /** @test */
    public function the_nombre_may_not_be_greater_than_50_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.announcement_groups.store'), $this->formData([
                'nombre' => Str::random(51)
            ]))->assertSessionHasErrors(['nombre']);
    }

    /** @test */
    public function the_anio_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.announcement_groups.store'), $this->formData([
                'anio' => ''
            ]))->assertSessionHasErrors(['anio']);
    }

    /** @test */
    public function the_anio_may_not_be_greater_than_4_characters()
    {
        $this->actingAs($this->user)
            ->post(route('admin.announcement_groups.store'), $this->formData([
                'anio' => 12345
            ]))->assertSessionHasErrors(['anio']);
    }

    /** @test */
    public function the_anio_must_be_a_integer()
    {
        $this->actingAs($this->user)
            ->post(route('admin.announcement_groups.store'), $this->formData([
                'anio' => 'd'
            ]))->assertSessionHasErrors(['anio']);
    }

    /** @test */
    public function the_introduccion_is_required()
    {
        $this->actingAs($this->user)
            ->post(route('admin.announcement_groups.store'), $this->formData([
                'introduccion' => ''
            ]))->assertSessionHasErrors(['introduccion']);
    }


    /** data send for user */
    public function formData($override = [])
    {
        return array_merge([
            'nombre' => 'Mi primer CAS',
            'anio' => 2019,
            'introduccion' => '<p>introduccion</p>'
        ], $override);
    }
}
