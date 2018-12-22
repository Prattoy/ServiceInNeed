<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;

class requestController extends Controller
{
	
    public function employee()
    {
    	$employee=Employee::find(Session('login'));
    	if( session()->has('login'))
		{
			if((Session('who'))=='employee')
			{
				if(($employee->status)!='Busy')
				{
					return view('/Manage/employeeRequest');
				}
				else
				{
					return view('/Manage/userInfo');
				}
				
			}
			else
			{
				$request->session()->flash('message','You need to be an user to use this service!');
				return redirect()->route('home');
			}
		}
    }

    public function confirm(Request $request)
    {
    	$employee=Employee::find(Session('login'));
    	$user=User::find($employee->request);
    	if( session()->has('login'))
		{
			if((Session('who'))=='employee')
			{
		    	if(($request->confirm)=='accept')
		    	{
		    		$employee->status='Busy';
		    		$employee->save();
		    		$user->assigned=(Session('login'));
		    		$user->save();
		    		return view('/Manage/userInfo');
		    	}
		    	else
		    	{
		    		$employee->status='Free';
		    		$employee->request='0';
		    		$employee->save();
		    		$request->session()->flash('message','You did not accepted the service request.');
		    		return redirect()->route('home');
		    	}
	    	}
    	}
    }	
}
