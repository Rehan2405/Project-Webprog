<?php

namespace App\Http\Controllers;

use App\Models\destination;
use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function create() {
        return view('insert', [
            'destinations' => destination::all()
        ]);
    }

    public function add(Request $request) {

        $validation = $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'todolist' => 'required',
            'location' => 'required',
            'image' => 'required|file|image|mimes:png,jpg'
        ]);

        $validation['image'] = $request->file('image')->store('image');

        destination::create($validation);

        return redirect('/home')->with('success', 'Product has been added');
    }
}
    // public function store(Request $request)
    // {
    //     //validate form
    //     $this->validate($request, [
    //         'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'title'     => 'required|min:5',
    //         'desc'   => 'required|min:10',
    //         'location'   => 'required|min:10',
    //         'todolist',
    //     ]);

    //     //upload image
    //     $image = $request->file('image');
    //     $image->storeAs('public/images', $image->hashName());

    //     //create post
    //     destination::create([
    //         'image'     => $image->hashName(),
    //         'title'     => $request->title,
    //         'desc'   => $request->desc,
    //         'location'   => $request->location,
    //         'todolist'   => $request->todolist,
    //     ]);

    //     //redirect to index
    //     return redirect()->route('insert')->with(['success' => 'Data Berhasil Disimpan!']);
    // }

