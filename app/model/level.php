<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class level extends Model
{
    protected $table="level";
    public $timestamp=false;
    protected $fillable=['namelevel'];
    
    public function level(){
    	return $this->hasMany('App\model\test','idlevel','id');
    	
    }
}
