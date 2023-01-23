<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function create() {
        return view('insert', [
            'destination' => destination::all()
        ]);
    }
    public function add(Request $request) {

        $validation = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'link' => 'required|integer',
            'photo_url' => 'required|file|image|mimes:png,jpg'
        ]);

        $validation['photo_url'] = $request->file('photo_url')->store('image');

       destination::create($validation);

        return redirect('/home')->with('success', 'Product has been added');
    }
}
