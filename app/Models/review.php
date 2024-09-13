<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{

    protected $guarded = ['id'];
    
    use HasFactory;

    //Relacion 1 a muchos inversa

    public function user(){
        return $this->belongsTo('app\Models\User');
    }

    public function course(){
        return $this->hasMany('app\Models\course');
    }
}
