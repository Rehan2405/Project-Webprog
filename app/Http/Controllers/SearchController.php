<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $destinations = Destination::all();
        return view('search', compact('destinations'));
    }
}
