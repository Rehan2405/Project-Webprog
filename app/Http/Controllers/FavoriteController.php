<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function about()
    {
        return view('about');
    }
    
    public function destination()
    {
        $destinations = destination::limit(6)->get();
        return view('favourite', compact('destinations'));
    }
}
