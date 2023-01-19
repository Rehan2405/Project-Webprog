<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $destinations = Destination::all();
        return view('search', [
            'destinations' => $destinations
        ]);
    }

    public function search_dest(Request $req)
    {

        $req->validate([
            'search' => 'required'
        ]);

        $destinations = Destination::where('title', 'like', '%' . $req->search . '%')->get();

        return view('search', [
            'destinations' => $destinations
        ]);
    }
}
