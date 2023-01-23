<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DetailController extends Controller
{
    public function Index(Request $request){
        $reviews = DB::table('reviews')->where('destination_id', '=', $request->id)
        ->orderBy('index', 'asc')->get();
        $reviews_count = Count($reviews);
        $destination = DB::table('destinations')->where('id', '=', $request->id)
        ->first();
        $todolist = DB::table('todolists')->where('id', '=', $request->id)
        ->first();
        $favourite = DB::table('favourite_destinations')->where('destination_id', '=', $request->id)->first();

        // Thumbnail Section
        $start = strpos($destination->video, '=') + 1;
        $thumbnail = substr($destination->video, $start, strlen($destination->video));
        return view('detail', compact('reviews', 'reviews_count', 'destination', 'todolist', 'thumbnail', 'favourite'));
    }

    public function Save(Request $req){
            DB::table('reviews')->insert([
                'value' => $req->value,
                'inputType' => $req->inputType,
                'class' => $req->class,
                'destination_id' => $req->destination_id,
                'index' => $req->index
            ]);

        return;
    }

    public function Delete(Request $req){
        DB::table('reviews')
        ->where('destination_id', '=', $req->detail_id)
        ->delete();

        return;
    }
}
