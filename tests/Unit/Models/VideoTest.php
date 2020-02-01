<?php

namespace Tests\Unit\Models;

use Tests\TestCase;
use App\Models\Video;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VideoTest extends TestCase
{
    use RefreshDatabase;


    /** @test */
    public function a_video_return_a_collection_by_search()
    {
        $video1 = factory(Video::class)->create(['created_at' => now()->subDays(1)]);
        $video2 = factory(Video::class)->create();

        $this->assertEquals(
            $video2->titulo,
            Video::search($video2->titulo)
                ->latest()->get()->first()->titulo
        );
    }
}
