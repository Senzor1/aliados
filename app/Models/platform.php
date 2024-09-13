<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platform extends Model
{

    protected $guarded = ['id'];
    
    use HasFactory;

    //Relacion de uno a muchos 

    public function lessons(){
        return $this->hasMany('app\Models\lesson');
    }
}
