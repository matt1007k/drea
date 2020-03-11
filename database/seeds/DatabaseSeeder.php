<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(DocumentsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(AlbumsTableSeeder::class);
        $this->call(VideosTableSeeder::class);
        $this->call(ExternalLinksTableSeeder::class);
        $this->call(AnnouncementGroupsTableSeeder::class);
        $this->call(AnnouncementsTableSeeder::class);
        $this->call(AnnouncementLinksTableSeeder::class);
        $this->call(AdsTableSeeder::class);
        $this->call(SlideshowsTableSeeder::class);
        $this->call(PagesTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
