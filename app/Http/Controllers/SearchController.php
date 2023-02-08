<?php

namespace App\Http\Controllers;

use App\Attraction;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $attractions = Attraction::all();
        return view('welcome', compact('attractions'));
    }
}
