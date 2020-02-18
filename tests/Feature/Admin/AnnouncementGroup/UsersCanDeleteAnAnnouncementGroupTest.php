<?php

namespace Tests\Feature\Admin\AnnouncementGroup;

use Tests\TestCase;
use App\Models\AnnouncementGroup;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersCanDeleteAnAnnouncementGroupTest extends TestCase
{
  use RefreshDatabase;

  protected $user;
  protected $announcement_group;
  protected $pathLogin;

  protected function setUp(): void
  {
    parent::setUp();
    $this->pathLogin = '/auth/login';

    $this->user = factory(User::class)->create();
    $this->announcement_group = factory(AnnouncementGroup::class)->create($this->formData());
  }
  /**
   * @test
   */
  public function guest_users_cannot_delete_an_announcement_group()
  {
    $this->delete(route('admin.announcement_groups.destroy', $this->announcement_group), $this->formData())
      ->assertRedirect($this->pathLogin);
  }

  /**
   * @test
   */
  public function users_admin_can_delete_an_announcement_group()
  {
    $response = $this->actingAs($this->user)
      ->delete(route('admin.announcement_groups.destroy', $this->announcement_group), $this->formData());

    $this->assertDatabaseMissing('announcement_groups', $this->formData());

    $response->assertRedirect(route('admin.announcement_groups.index'))
      ->assertSessionHas('msg', 'El registro se eliminó correctamente');
  }

  /** data send for user */
  public function formData($override = [])
  {
    return array_merge([
      'nombre' => 'Mi primer CAS',
      'anio' => 2019
    ], $override);
  }
}
