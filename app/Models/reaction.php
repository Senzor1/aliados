<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reaction extends Model
{

    protected $guarded = ['id'];
    
    use HasFactory;

    const LIKE = 1;
    const DISLIKE = 2;

    //Relacion polimorfica

    public function reactionable(){
        return $this->morphTo();
    }

    //relacion 1 a muchos inversa

    public function user(){
        return $this->belongsTo('app\Models\User');
    }
}
