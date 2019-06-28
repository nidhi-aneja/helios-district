<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parentcategory extends Model
{
    protected $fillable=['name', 'slug'];
    
    public function subcategories(){
        return $this->hasMany('App\Subcategory', 'parent_id', 'id');
    }
    
    public static function scopeLevel1($query){
        return $query->orderBy('id', 'asc')->get();
    } 
}
