<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{

    protected $guarded = ['id'];

    use HasFactory;

//Relacion polimorfica

    public function commentable(){
        return $this->morphTo();
    }

    //Relacion 1 a muchos polimorfica

    public function comments(){
        return $this->morphMany('app\Models\comment', 'commentable');
    }

    public function reactions(){
        return $this->morphMany('app\Models\reaction', 'reactionable');
    }

    //relacion 1 a muchos inversa

    public function user(){
        return $this->belongsTo('app\Models\User');
    }
}
