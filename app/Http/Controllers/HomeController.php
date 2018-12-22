<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');//->with('users',$name);
    }
    public function services()
    {
        return view('services');
    }
    public function aboutUs()
    {
        return view('aboutUs');
    }
    public function contact()
    {
        return view('contact');
    }
    public function registration()
    {
    	if( session()->has('login')){
            return redirect()->route('home');
            
        }else{
            return view('registration/index');
        }
        
    }
    public function userReg()
    {
    	if( session()->has('login')){
            return redirect()->route('home');
            
        }else{
            return view('registration/userRegistration');
        }
        
    }
    public function employeeReg()
    {
    	if( session()->has('login')){
            return redirect()->route('home');
            
        }else{
            return view('registration/employeeRegistration');
        }
        
    }
    
}
