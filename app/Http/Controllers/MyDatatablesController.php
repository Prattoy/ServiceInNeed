<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use App\User;
use App\Employee;

class MyDatatablesController extends Controller

{

	/**

     * Displays front end view

     *

     * @return \Illuminate\View\View

     */

    public function index()

    {

    	return view('datatables');

    }

    public function get_electrician()

    {
        if( session()->has('login')){
            return view('Services.electrician');
            
        }else{
            return redirect()->route('home');
        }
        

    }

    public function get_mason()

    {
        if( session()->has('login')){
            return view('Services.mason');
            
        }else{
            return redirect()->route('home');
        }
        

    }

    public function get_plumber()

    {
        if( session()->has('login')){
            return view('Services.plumber');
            
        }else{
            return redirect()->route('home');
        }
        

    }

    public function get_carpenter()

    {
        if( session()->has('login')){
            return view('Services.carpenter');
            
        }else{
            return redirect()->route('home');
        }
        

    }

    /**

     * Process ajax request.

     *

     * @return \Illuminate\Http\JsonResponse

     */

    public function getData()

    {

        return Datatables::of(User::query())->make(true);

    }

    public function getEmployeeData()

    {

        return Datatables::of(Employee::query()->where('profession','=','Electrician'))->make(true);

    }

    public function getCarpenterData()

    {

        return Datatables::of(Employee::query()->where('profession','=','Carpenter'))->make(true);

    }

    public function getMasonData()

    {

        return Datatables::of(Employee::query()->where('profession','=','Mason'))->make(true);

    }

    public function getPlumberData()

    {

        return Datatables::of(Employee::query()->where('profession','=','Plumber'))->make(true);

    }


}