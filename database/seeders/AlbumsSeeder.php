<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsSeeder extends Seeder
{
    public $tableName = 'albums';
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
                    'name' => 'Recovery',
                    'year' => '2010',
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'All Eyez on Me',
                    'year' => '1996',
                    'created_at' => Carbon::now(),
                ],
                [
                    'name' => 'Lucrare de control',
                    'year' => '2011',
                    'created_at' => Carbon::now(),
                ]
            ];
            DB::table($this->tableName)->insert($input);
        }
    }
}
