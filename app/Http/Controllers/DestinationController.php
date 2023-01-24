<?php

namespace App\Http\Controllers;
use App\Models\destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function dest()
    {
        $destinations = destination::all();
        return view('home', compact('destinations'));
    }
}
