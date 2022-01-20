<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        return Album::get();
    }
}
