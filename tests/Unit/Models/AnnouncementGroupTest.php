<?php

namespace Tests\Unit\Models;

use App\Models\Announcement;
use App\Models\AnnouncementGroup;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AnnouncementGroupTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_announcement_group_return_a_collection_by_search()
    {
        $announcement_group1 = factory(AnnouncementGroup::class)->create(['created_at' => now()->subDays(1)]);
        $announcement_group2 = factory(AnnouncementGroup::class)->create();

        $this->assertEquals(
            $announcement_group2->nombre,
            AnnouncementGroup::search($announcement_group2->nombre)
                ->latest()->get()->first()->nombre
        );
    }

    /** @test */
    public function an_announcement_group_has_many_announcements()
    {
        $grupo = factory(AnnouncementGroup::class)->create();
        factory(Announcement::class, 2)->create(['grupo_id' => $grupo->id]);

        $this->assertInstanceOf(Announcement::class, $grupo->convocatorias->first());
    }
}
