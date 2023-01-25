<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\Todolist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DestinationController extends Controller
{
    public function dest()
    {
        $destinations = destination::all();
        return view('home', compact('destinations'));
    }

    public function Edit(Request $request) {

        $destination = DB::table('destinations')
            ->where('id', '=', $request->id)
            ->first();

        $todolist = DB::table('todolists')
            ->where('id', '=', $request->id)
            ->first();

        return view('edit', compact('destination', 'todolist'));
    }

    public function Update($id, Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'todolist' => 'required',
            'youtubelink' => 'required',
            'location' => 'required'
        ]);

        $destination = destination::findOrFail($id);
        $todoList = Todolist::findOrFail($destination->todolist_id);

        $destination->title = $request->title;
        $destination->desc = $request->description;
        $destination->video = $request->youtubelink;
        $destination->location = $request->location;

        $todoList->list = $request->todolist;
        if($request->hasFile('thumbnail')) {

            $image = $request->file('thumbnail');

            if(!file_exists(public_path().'/images/'.$image->getClientOriginalName())) {
                $image->move(public_path('/images/'), $image->getClientOriginalName());
            }

            $destination->image = $image->getClientOriginalName();
            $todoList->image = $image->getClientOriginalName();
        }

        $destination->save();
        $todoList->save();

        return redirect('/detail/'.$destination->id)->with('message', 'Destination updated');
    }

    // public function DeleteDest(Request $req){
    //     DB::table('destinations')
    //     ->where('id', '=', $req->detail_id)
    //     ->delete();

    //     return;
    // }
}
