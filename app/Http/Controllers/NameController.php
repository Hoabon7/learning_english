<?php

namespace App\Http\Controllers;
use App\model\level;
use Illuminate\Http\Request;

class NameController extends Controller
{
    public function getid(){
    	return view('master');
    }
    public function getLevel(){
    	$All_level=level::all();
    	return view('admin-layout/Level',['level'=>$All_level]);
    }
}
