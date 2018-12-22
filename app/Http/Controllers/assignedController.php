<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;
use App\Services;

class assignedController extends Controller
{
    public function employee()
    {
    	$user=User::find(Session('login'));
    	if( session()->has('login'))
		{
			if((Session('who'))=='user')
			{
				return view('/Manage/assignedEmployee');	
			}
			else
			{
				$request->session()->flash('message','You need to be an user to use this service!');
				return redirect()->route('home');
			}
		}
    }

    public function rating(Request $request)
    {
    	$service = new Services();
    	$user=User::find(Session('login'));
    	$employee=Employee::find($user->assigned);
    	if( session()->has('login'))
		{
			if((Session('who'))=='user')
			{
				$service->userId=$user->id;
				$service->userName=$user->username;
				$service->employeeId=$employee->id;
				$service->employeeName=$employee->username;
				$service->rating=$request->rating;	
				$service->save();
					
				$employee->rating=$request->rating;
				$employee->status='Free';
				$employee->request='0';
				$employee->save();

				$user->assigned='0';
				$user->save();
				$request->session()->flash('message','Thank You For Using Our Service.');
				return redirect()->route('home');	
			}
			else
			{
				$request->session()->flash('message','You need to be an user to use this service!');
				return redirect()->route('home');
			}
		}
    }
}
