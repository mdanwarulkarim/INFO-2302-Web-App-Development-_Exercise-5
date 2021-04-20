<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class catController extends Controller
{
       public function about(){
		return view('subview/about');
	}
	  public function list(){
	  	  echo "<br> <h1>Book List</h1>";
	  
		return view('subview/list');
	}
	  public function master(){
		return view('subview/master');
	}
	  public function nav(){
		return view('subview/nav');
	}
}
