<?php

namespace App\Http\Controllers;

use App\Models\destination;
use App\Models\FavouriteDestination;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FavoriteController extends Controller
{
    public function about()
    {
        return view('about');
    }
    
    public function destination()
    {
        $destinations = destination::limit(6)->get();
        $destinations = DB::table('destinations')->whereIn('id', function($query) { 
            $query->select('destination_id')->from('favourite_destinations'); 
        })->get();

        return view('favourite', compact('destinations'));
    }

    public function Save(Request $request){
        DB::table('favourite_destinations')->insert([
            'destination_id' => $request->destination_id,
            'favourite' => 1
        ]);
        
        $favourite = DB::table('favourite_destinations')->where('destination_id', '=', $request->destination_id)->first();
        return response()->json($favourite, 200);
    }

    public function Delete(Request $request){
        DB::table('favourite_destinations')
            ->where('destination_id', '=', $request->destination_id)
            ->delete();

        $favourite = DB::table('favourite_destinations')->where('destination_id', '=', $request->destination_id)->first();
        return response()->json($favourite, 200);;
    }
}
