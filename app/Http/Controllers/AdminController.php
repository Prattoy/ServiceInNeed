<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\adminRequest;
use App\Admin;
use DB;

class AdminController extends Controller
{
	public function index()
    {
        return view('/registration/adminRegistration');
    }
	public function store(Request $request)
	{
    	$un=$request->username;
    	$user=DB::table('admin')
				->where('username',$un)
				->first();
				
    		if($user!=null)
    		{
    			$request->session()->flash('message','Username Already Exists');
    			return view('registration/adminRegistration');
    			
    		}
    		else
    		{
    			$user = new Admin();
			    //On left field name in DB and on right field name in Form/view
			    $user->name = $request->name;
			    $user->username = $request->username;
			    $user->email = $request->email;
			    $user->password = $request->password;
			    $user->save();
			    $request->session()->flash('message','New admin has successfully created!' );
			    return redirect()->route('manage.index');
    		}
    
    
	}

	public function destroy($id) 
	{

    	Admin::find($id)->delete();

    	return redirect()->route('manage.index');

	}

    public function edit(Request $request,$id)
    {
    	$users=Admin::find($id);
    	return view('/profile/editAdmin')->with('users',$users);
    }

    public function update(Request $request,$id)
    {
    	$user=Admin::find($id);
    	$user->name=$request->name;
    	$user->username=$request->username;
    	$user->email=$request->email;
		$user->password=$request->password;
    	$user->save();

    	return redirect()->route('home');
    }
}
