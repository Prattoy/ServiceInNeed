<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Employee;

class profileController extends Controller
{
    public function index(Request $request)
	{
    
	}
	public function contactMason(Request $request,$id){
		if( session()->has('login'))
		{
			if((Session('who'))=='user')
			{
				// dd($id);
				// $user = User::find($id);

				$employee=Employee::find($id);

				if(($employee->request)=='0')
				{
					$employee->status='Requested';
					$employee->request=(Session('login'));
					$employee->save();
					$request->session()->flash('message','Your request has been sent. You will be notified shortly.');
					return redirect()->route('home');
				}
				else
				{
					$request->session()->flash('message','This worker is not available right now!');
					return redirect()->route('mason');
				}
			}
			else
			{
				$request->session()->flash('message','You need to be an user to use this service!');
				return redirect()->route('home');
			}
		}
	}

	public function contactCarpenter(Request $request,$id){
		if( session()->has('login'))
		{
			if((Session('who'))=='user')
			{
				// dd($id);
				// $user = User::find($id);

				$employee=Employee::find($id);

				if(($employee->request)=='0')
				{
					$employee->request=(Session('login'));
					$employee->save();
					$request->session()->flash('message','Your request has been sent. You will be notified shortly.');
					return redirect()->route('home');
				}
				else
				{
					$request->session()->flash('message','This worker is not available right now!');
					return redirect()->route('carpenter');
				}
			}
			else
			{
				$request->session()->flash('message','You need to be an user to use this service!');
				return redirect()->route('home');
			}
		}
	}

	public function contactElectrician(Request $request,$id){
		if( session()->has('login'))
		{
			if((Session('who'))=='user')
			{
				// dd($id);
				// $user = User::find($id);

				$employee=Employee::find($id);

				if(($employee->request)=='0')
				{
					$employee->request=(Session('login'));
					$employee->save();
					$request->session()->flash('message','Your request has been sent. You will be notified shortly.');
					return redirect()->route('home');
				}
				else
				{
					$request->session()->flash('message','This worker is not available right now!');
					return redirect()->route('electrician');
				}
			}
			else
			{
				$request->session()->flash('message','You need to be an user to use this service!');
				return redirect()->route('home');
			}
		}
	}

	public function contactPlumber(Request $request,$id){
		if( session()->has('login'))
		{
			if((Session('who'))=='user')
			{
				// dd($id);
				// $user = User::find($id);

				$employee=Employee::find($id);

				if(($employee->request)=='0')
				{
					$employee->request=(Session('login'));
					$employee->save();
					$request->session()->flash('message','Your request has been sent. You will be notified shortly.');
					return redirect()->route('home');
				}
				else
				{
					$request->session()->flash('message','This worker is not available right now!');
					return redirect()->route('plumber');
				}
			}
			else
			{
				$request->session()->flash('message','You need to be an user to use this service!');
				return redirect()->route('home');
			}
		}
	}

	public function user(Request $request)
	{
    	if( session()->has('login')){
            return view('profile/userProfile');
            
        }else{
            return redirect()->route('home');
        }
	}
	public function employee(Request $request)
	{
    	if( session()->has('login')){
            return view('profile/employeeProfile');
            
        }else{
            return redirect()->route('home');
        }
	}
	public function admin(Request $request)
	{
    	if( session()->has('login')){
            return view('profile/adminProfile');
            
        }else{
            return redirect()->route('home');
        }
	}
}
