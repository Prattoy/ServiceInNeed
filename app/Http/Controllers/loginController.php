<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use App\Admin;
//for Query Builder
use Illuminate\Support\Facades\DB;

class loginController extends Controller
{
    public function index(Request $request)
    {
    	if( session()->has('login')){
			return redirect()->route('home');
			
		}else{
			return view('login.index');
		}
    	
    }
    public function verify(Request $request)
    {
    	$un=$request->username;
    	//$pw=$request->input('password');
    	$pw=$request->password;
    	$tp=$request->type;		

    	//Query Builder
    	if($tp == 'user')
    	{
    		//$u="user";
    		$user=DB::table('user')
				->where('username',$un)
				->where('password',$pw)
				->first();
				
    		if($user!=null)
    		{
    			$request->session()->put('login',$user->id);
    			$request->session()->put('who','user');
    			return redirect()->route('home');
    		}
    		else
    		{
    			$request->session()->flash('message','Invalid username or password');
    			return view('login/index');
    		}
    	}
    	if($tp == 'employee')
    	{
    		//$u="employee";
    		$employee=DB::table('employee')
				->where('username',$un)
				->where('password',$pw)
				->first();
				
    		if($employee!=null)
    		{
    			$request->session()->put('login',$employee->id);
    			$request->session()->put('who','employee');
    			return redirect()->route('home');
    		}
    		else
    		{
    			$request->session()->flash('message','Invalid username or password');
    			return view('login/index');
    		}
    	}
    	if($tp == 'admin')
    	{
    		//$u="admin";
    		$admin=DB::table('admin')
				->where('username',$un)
				->where('password',$pw)
				->first();
				
    		if($admin!=null)
    		{
    			$request->session()->put('login',$admin->id);
    			$request->session()->put('who','admin');
    			return redirect()->route('home');
    		}
    		else
    		{
    			$request->session()->flash('message','Invalid username or password');
    			return view('login/index');
    		}
    	}
    }
}
