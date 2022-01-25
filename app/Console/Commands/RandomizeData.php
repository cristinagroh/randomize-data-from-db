<?php

namespace App\Console\Commands;

use Exception;
use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class RandomizeData extends Command
{
    protected $signature = 'randomize {database} {--field=*}';

    protected $description = 'Randomize data from a selected database';

    public function handle()
    {
        config(["database.connections.mysql" =>
        [
            'driver' => 'mysql',
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => $this->argument('database'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'strict' => true,
            'engine' => null
        ]]);

        DB::reconnect('mysql');

        $tables_in_db = DB::select('SHOW TABLES');
        $db = "Tables_in_".$this->argument('database');
        $options = $this->option();
        $tables = [];

        foreach($tables_in_db as $table){
            $tables[] = $table->{$db};
            $columns[] = DB::getSchemaBuilder()->getColumnListing($table->{$db});
        }

        foreach($tables as $table){
            if($table != 'migrations'){
                foreach($options['field'] as $op){
                    try{
                        $query = DB::Table($table)->select($op)->get();
                        self::fakerCreation($table, $op);
                        $this->info($query);
                    }catch(Exception $e){
                        // $this->info(string: "Column ".$op." not found in ".$table);
                    }
                }
            }
        }
    }

    static function fakerCreation($table, $op){
        $faker = Factory::create();
        for($j = 1; $j <= DB::table($table)->count(); $j++){
            if($op == 'email'){
                DB::table($table)->where('id', $j)->update([
                    $op => $faker->email()
                ]);
            }elseif($op == 'phone'){
                DB::table($table)->where('id', $j)->update([
                    $op => $faker->phoneNumber()
                ]);
            }elseif($op == 'year'){
                DB::table($table)->where('id', $j)->update([
                    $op => $faker->year()
                ]);
            }elseif($op == 'number' || str_contains($op, 'number')){
                DB::table($table)->where('id', $j)->update([
                    $op => $faker->number_format()
                ]);
            }else{
                DB::table($table)->where('id', $j)->update([
                    $op => $faker->name(20)
                ]);
            }
        }
    }
}
