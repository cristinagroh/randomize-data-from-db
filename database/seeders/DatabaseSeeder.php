<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            \Database\Seeders\AlbumsSeeder::class,
            \Database\Seeders\ArtistsSeeder::class,
            \Database\Seeders\SongsSeeder::class
        ]);
    }
}
