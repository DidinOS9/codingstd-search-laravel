<?php

namespace App\Http\Controllers;

use App\Attraction;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $attractions = Attraction::where('tempat_wisata', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('provinsi', 'LIKE', '%'.$request->search.'%')
                                ->orWhere('jumlah_pengunjung', 'LIKE', '%'.$request->search.'%')->get();
        return view('welcome', compact('attractions'));
    }
}
