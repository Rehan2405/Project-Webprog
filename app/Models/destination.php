<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $table='destinations';
    // protected $guarded="id";
    protected $fillable = [
        'review_id',
        'todolist_id',
        'image',
        'title',
        'desc',
        'location',
        'video',
    ];

    public function todolist(){
        return $this -> hasMany(Todolist::class);
    }
}
