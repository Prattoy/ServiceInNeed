<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use DB;

class searchController extends Controller
{
    public function index()
    {
        return view('/services/electrician');
    }
    function action(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      console.log($query);
      if($query != '')
      {
       $data = DB::table('employee')
         ->where('location', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
       $data = DB::table('employee')
         ->orderBy('id', 'desc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->Serial.'</td>
         <td>'.$row->Name.'</td>
         <td>'.$row->Location.'</td>
         <td>'.$row->Work Experience (in years).'</td>
         <td>'.$row->Cost.'</td>
         <td>'.$row->PhoneNo.'</td>
         <td>'.$row->Rating.'</td>
         <td>'.$row->Availability.'</td>
         <td>'.$row->Booking.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
