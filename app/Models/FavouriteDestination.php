<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavouriteDestination extends Model
{
    use HasFactory;

    protected $table = 'favourite_destinations';

    public function destination(){
        return $this -> belongsTo(Destination::class);
    }
}
