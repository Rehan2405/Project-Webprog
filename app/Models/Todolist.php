<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    use HasFactory;

    protected $table = 'todolists';

    protected $fillable = [
        'list',
        'image'
    ];

    public function destination(){
        return $this -> belongsTo(Destination::class);
    }
}
