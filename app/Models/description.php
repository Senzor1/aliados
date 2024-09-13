<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class description extends Model
{

    protected $guarded = ['id'];
    
    use HasFactory;

    //Relacion 1 a 1 inversa

    public function lesson(){
        return $this->belongsTo('app\Models\lesson');
    }

    //Relacion muchos a muchos

    public function users(){
        return $this->belongsToMany('app\Models\User');
    }
}
