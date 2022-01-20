<?php

namespace App\Console\Commands;

use App\Models\Album;
use Illuminate\Console\Command;

class RandomizeData extends Command
{
    protected $signature = 'randomize:show';

    protected $description = 'Randomize data from a selected database';

    public function handle()
    {
        $albums = Album::get();
        $this->info(string: 'This is the table: '. $albums);
    }
}
