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

  /**
   * @test
   */
  public function guest_users_cannot_delete_an_announcement_group()
  {
    $announcement_group = factory(AnnouncementGroup::class)->create();
    $this->delete(route('admin.announcement_groups.destroy', $announcement_group), $this->formData())
      ->assertRedirect('/login');
  }

  /**
   * @test
   */
  public function users_admin_can_delete_an_announcement_group()
  {
    $user = factory(User::class)->create();
    $announcement_group = factory(AnnouncementGroup::class)->create($this->formData());

    $response = $this->actingAs($user)
      ->delete(route('admin.announcement_groups.destroy', $announcement_group), $this->formData());

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
