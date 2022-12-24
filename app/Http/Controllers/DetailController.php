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
        return view('detail', compact('reviews', 'reviews_count'));
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
