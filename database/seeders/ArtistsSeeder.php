<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistsSeeder extends Seeder
{
    public $tableName = 'artists';
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
                    'name' => 'Eminem',
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Tupac',
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Doc',
                    'created_at' => Carbon::now(),
                ]
            ];
            DB::table($this->tableName)->insert($input);
        }
    }
}
