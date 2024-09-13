<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{

    protected $guarded = ['id'];

    public function getCompletedAttribute(){
        return $this->users->contains(auth()->user()->id);
    }
    
    use HasFactory;

    //Relacion 1 a 1

    public function description(){
        return $this->hasOne('App\Models\description');
    }

    //Relacion uno a muchos inversa

    public function section(){
        return $this->belongsTo('App\Models\section');
    }

    public function platform(){
        return $this->belongsTo('App\Models\platform');
    }

    //Relacion muchos a muchos 

    public function users(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion 1 a 1 polimorfica

    public function resource(){
        return $this->morphOne('App\Models\resource', 'resourceable');
    }

    //Relacion 1 a muchos polimorfica

    public function comments(){
        return $this->morphMany('App\Models\comment', 'commentable');
    }

    public function reactions(){
        return $this->morphMany('App\Models\reaction', 'reactionable');
    }
}
