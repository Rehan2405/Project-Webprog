<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\Todolist;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function create() {
        return view('insert', [
            'destinations' => Destination::all()
        ]);
    }

    public function add(Request $request) {

        Todolist::create([
            'todolist' => $request->list
        ]);
        $validation = $request->validate([
            'title' => 'required',
            'desc' => 'required',
            'todolist' => 'required',
            'video' => 'required',
            'location' => 'required',
            'image' => 'required|file|image|mimes:png,jpg'
        ]);

        $validation['image'] = $request->file('image')->store('images');

        Todolist::create([
            'todolist' => $request->list
        ]);

        Destination::create($validation);


        return redirect('/home')->with('success', 'Product has been added');
    }
}
