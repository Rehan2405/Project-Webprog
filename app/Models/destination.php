<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    public function todolist(){
        return $this -> hasMany(Todolist::class);
    }
    
    public function favourite_destination(){
        return $this -> hasMany(FavouriteDestination::class);
    }
}
