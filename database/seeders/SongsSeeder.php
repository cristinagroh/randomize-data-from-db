<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
{
    public $tableName = 'songs';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table($this->tableName)->count() == 0) {
            $input = [
                [
                    'name' => 'Cold wind blows',
                    'year' => '2010',
                    'lyrics' => 'Cause some things just don t change',
                    'album_id' => 1,
                    'artist_id' => 1,
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Talkin 2 myself',
                    'year' => '2010',
                    'lyrics' => 'I just want to thank everybody for being so patient',
                    'album_id' => 1,
                    'artist_id' => 1,
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'On fire',
                    'year' => '2010',
                    'lyrics' => 'Critics never got nothin nice to say, man',
                    'album_id' => 1,
                    'artist_id' => 1,
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Ambitionz az a Ridah',
                    'year' => '1996',
                    'lyrics' => 'Let s get ready to rumble!',
                    'album_id' => 2,
                    'artist_id' => 2,
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'All Bout U',
                    'year' => '1996',
                    'lyrics' => 'It s all about you, one time',
                    'album_id' => 2,
                    'artist_id' => 2,
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Skandalouz',
                    'year' => '1996',
                    'lyrics' => 'Can t wait til I see L.A., cause it s so scandalous',
                    'album_id' => 2,
                    'artist_id' => 2,
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Nu ma poti opri',
                    'year' => '2011',
                    'lyrics' => 'Eram în liceu când am dat o lucrare de control la limba română',
                    'album_id' => 3,
                    'artist_id' => 3,
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Toata lumea canta',
                    'year' => '2011',
                    'lyrics' => 'Ei zic că eu nu cant, doar spun versuri',
                    'album_id' => 3,
                    'artist_id' => 3,
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Ceai',
                    'year' => '2011',
                    'lyrics' => 'Dacă vrei să stai, cu mine la un ceai ',
                    'album_id' => 3,
                    'artist_id' => 3,
                    'created_at' => Carbon::now(),
                ]
            ];
            DB::table($this->tableName)->insert($input);
        }
    }
}
