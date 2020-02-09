<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Announcement;
use App\Models\AnnouncementLink;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnnounementLinkTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test 
     */
    public function an_announcement_link_belongs_to_an_announcement()
    {
        $announcement = factory(Announcement::class)->create();
        $announcement_link = factory(AnnouncementLink::class)->create(['announcement_id' => $announcement->id]);

        $this->assertInstanceOf(Announcement::class, $announcement_link->announcement);
    }
}
