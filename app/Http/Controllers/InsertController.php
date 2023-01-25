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
            'list' => $request->todolist,
            'image' => $request->image
        ]);
        $validation = $request->validate([  
            'title' => 'required',
            'desc' => 'required',
            'todolist' => 'required',
            'video' => 'required',
            'location' => 'required',
            'image' => 'required|file|image|mimes:png,jpg'
        ]);

        // $validation['image'] = $request->file('image')->store('images');
        $image = $request->file('image');
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('Images'), $imageName);

        $todolist_data = Todolist::query()->latest()->first();
        $foreign_key = $todolist_data->id;

        Destination::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'todolist' => $request->todolist,
            'video' => $request->video,
            'location' => $request->location,
            'image' => $imageName,
            'review_id' => $foreign_key,
            'todolist_id' => $foreign_key,
        ]);

        return redirect('/home')->with('success', 'Product has been added');
    }
}
