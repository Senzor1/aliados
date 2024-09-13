<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class section extends Model
{

    protected $guarded = ['id'];
    
    use HasFactory;

    //Relacion uno a muchos inversa

    public function course(){
        return $this->BelongsTo('app\Models\course');
    }

    //Relacion uno a muchos 

    public function lessons(){
        return $this->hasMany('App\Models\lesson');
    }
}
