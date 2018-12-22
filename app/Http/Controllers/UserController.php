<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\userRequest;
use App\User;
use DB;

class UserController extends Controller
{
    public function store(Request $request)
	{
		$un=$request->username;
    	$user=DB::table('user')
				->where('username',$un)
				->first();
				
    		if($user!=null)
    		{
    			$request->session()->flash('message','Username Already Exists');
    			return view('registration/userRegistration');
    			
    		}
    		else
    		{
    			$user = new User();
    			//On left field name in DB and on right field name in Form/view
    			$user->name = $request->name;
    			$user->username = $request->username;
    			$user->email = $request->email;
    			$user->phoneNo = $request->phoneNo;
    			$user->location = $request->location;
    			$user->password = $request->password;
    			$user->save();
    			$request->session()->flash('message','You have successfully registered. Now login to continue!' );
    			return redirect()->route('home');
    		}    
	}

	public function destroy($id) 
	{

    	User::find($id)->delete();

    	return redirect()->route('manage.index');

	}

	public function edit(Request $request,$id)
    {
    	$users=User::find($id);
    	return view('/profile/editUser')->with('users',$users);
    }

    public function update(Request $request,$id)
    {
    	$user=User::find($id);
    	$user->name=$request->name;
    	$user->username=$request->username;
		$user->email=$request->email;
		$user->phoneNo=$request->phoneNo;
		$user->location=$request->location;
		$user->password=$request->password;
    	$user->save();

    	return redirect()->route('home');
    }
}
