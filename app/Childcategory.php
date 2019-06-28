<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Childcategory extends Model
    
{ protected $fillable=['name','parent_id','sub_id','slug'];
    public function subcategory(){
        return $this->belongsTo('App\Subcategory', 'sub_id', 'id');
    }
    
    public static function scopeLevel3($query){
        return $query->orderBy('id', 'asc')->get();
    } 
}
