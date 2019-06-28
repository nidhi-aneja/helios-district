<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{ 
    protected $fillable=['name', 'parent_id', 'slug'];
    public function childcategories(){
        return $this->hasMany('App\Childcategory', 'sub_id', 'id');
    }
    public function parentcategory(){
        return $this->belongsTo('App\Parentcategory', 'parent_id', 'id');
    }
    
    public static function scopeLevel2($query){
        return $query->orderBy('id', 'asc')->get();
    } 
}
