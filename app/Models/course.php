<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class course extends Model
{

    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];

    use HasFactory;

    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function getRatingAttribute(){

        if ($this->reviews_count) {
            return round($this->reviews->avg('rating'), 1);
        }else{
            return 5;
        }
    }

    //Query Scope

    public function scopeCategory($query, $category_id){
        if ($category_id) {
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeLevel($query, $level_id){
        if ($level_id) {
            return $query->where('level_id', $level_id);
        }
    }


    public function getRouteKeyName(){
        return 'slug';
    }

    // Relacion 1 a 1

    public function observation(){
        return $this->hasOne('App\Models\Observation');
    }
    //Relacion 1 a muchos
    public function reviews(){
        return $this->hasMany('App\Models\review');
    }

    public function goals(){
        return $this->hasMany('App\Models\goal');
    }

    public function audiences(){
        return $this->hasMany('App\Models\audience');
    }

    public function sections(){
        return $this->hasMany('App\Models\section');
    }

    public function requirements(){
        return $this->hasMany('App\Models\requirement');
    }

    //Relacion 1 a muchos inversa

    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function level(){
        return $this->belongsTo('App\Models\level');
    }

    public function category(){
        return $this->belongsTo('App\Models\category');
    }

    public function price(){
        return $this->belongsTo('App\Models\price');
    }

    //Relacion muchos a muchos 

    public function students(){
        return $this->belongsToMany('App\Models\User');
    }

    //Relacion 1 a 1 polimorfica

    public function image(){
        return $this->morphOne('App\Models\image', 'imageable');
    }

    //Relacion hasManyThrough

    public function lessons(){
        return $this->hasManyThrough('App\Models\lesson', 'App\Models\section');
    }
}
