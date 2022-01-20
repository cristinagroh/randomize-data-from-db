<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Http\Controllers\Controller;

class ArtistController extends Controller
{
    public function index()
    {
        return Artist::get();
    }
}
