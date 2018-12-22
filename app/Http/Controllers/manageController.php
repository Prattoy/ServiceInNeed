<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class manageController extends Controller
{
    public function index()
    {
    	if((Session('who'))=='admin'){
			return view('manage/index');
			
		}else{
			return redirect()->route('home');
		}
        //->with('users',$name);
    }
}
