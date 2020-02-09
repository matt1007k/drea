<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Announcement;
use App\Models\AnnouncementLink;
use App\Models\AnnouncementGroup;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnnounementTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test 
     */
    public function an_announcement_belongs_to_an_announcement_group()
    {
        $grupo = factory(AnnouncementGroup::class)->create();
        $announcement = factory(Announcement::class)->create(['grupo_id' => $grupo->id]);

        $this->assertInstanceOf(AnnouncementGroup::class, $announcement->grupo);
    }

    /**
     * @test 
     */
    public function an_announcement_has_many_an_announcement_links()
    {
        $announcement = factory(Announcement::class)->create();
        factory(AnnouncementLink::class)->create(['announcement_id' => $announcement->id]);

        $this->assertInstanceOf(AnnouncementLink::class, $announcement->links->first());
    }

    /** @test */
    public function an_announcement_return_a_collection_by_group()
    {
        $grupo = factory(AnnouncementGroup::class)->create();
        $announcement1 = factory(Announcement::class)->create(['grupo_id' => $grupo->id, 'created_at' => now()->subDays(1)]);
        $announcement2 = factory(Announcement::class)->create(['grupo_id' => $grupo->id]);

        $this->assertEquals(
            $grupo->convocatorias()->latest()->first()->titulo, // $announcement2->titulo
            Announcement::with('grupo')->byGroup($grupo->nombre)->latest()->get()->first()->titulo
        );
    }

    /** @test */
    public function an_announcement_return_a_collection_by_search()
    {
        $grupo = factory(AnnouncementGroup::class)->create();
        $announcement1 = factory(Announcement::class)->create(['grupo_id' => $grupo->id, 'created_at' => now()->subDays(1)]);
        $announcement2 = factory(Announcement::class)->create(['grupo_id' => $grupo->id]);

        $this->assertEquals(
            $announcement2->titulo,
            Announcement::with('grupo')->search($announcement2->titulo)
                ->latest()->get()->first()->titulo
        );
    }
}
