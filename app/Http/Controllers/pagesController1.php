<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Profile;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController1 extends Controller
{
	public function __construct(){
		$this->middleware('auth',['only'=>['contact']]);
	}

    public function contact(){
    	$people = ['Augustino','Emanuel','Shillah'];
    	return view('pages.contact',compact('people'));
    }

    public function blog(){
    	$blog=Profile::all();
    	return view('pages.Blog',compact('blog'));
    }

    
}
