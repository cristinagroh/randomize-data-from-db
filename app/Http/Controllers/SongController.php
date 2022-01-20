<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        return Song::get();
    }
}
