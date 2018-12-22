<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\employeeRequest;
use App\Employee;
use DB;

class EmployeeController extends Controller
{
    public function store(Request $request)
	{
    	$un=$request->username;
    	$user=DB::table('employee')
				->where('username',$un)
				->first();
				
    		if($user!=null)
    		{
    			$request->session()->flash('message','Username Already Exists');
    			return view('registration/employeeRegistration');
    			
    		}
    		else
    		{
    			$employee = new Employee();
			    //On left field name in DB and on right field name in Form/view
			    $employee->name = $request->name;
			    $employee->username = $request->username;
			    $employee->profession = $request->profession;
			    $employee->experience = $request->experience;
			    $employee->cost = $request->cost;
			    $employee->location = $request->location;
			    $employee->phoneNo = $request->phoneNo;
			    $employee->password = $request->password;
			    $employee->save();
			    $request->session()->flash('message','You have successfully registered. Now login to continue!' );
    			return redirect()->route('home');
    		}    
	}

	public function destroy($id) 
	{

    	Employee::find($id)->delete();

    	return redirect()->route('manage.index');

	}

	public function edit(Request $request,$id)
    {
    	$users=Employee::find($id);
    	return view('/profile/editEmployee')->with('users',$users);
    }

    public function update(Request $request,$id)
    {
    	$user=Employee::find($id);
    	$user->name=$request->name;
    	$user->username=$request->username;
    	$user->profession=$request->profession;
		$user->experience=$request->experience;
		$user->cost=$request->cost;
		$user->phoneNo=$request->phoneNo;
		$user->location=$request->location;
		$user->password=$request->password;
    	$user->save();

    	return redirect()->route('home');
    }
}
