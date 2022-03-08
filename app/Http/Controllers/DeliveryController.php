<?php

namespace App\Http\Controllers;
use App\Parcel;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    //

    
    public function Home()
    {
        $parcels = DB::table('parcels')->take(5)->where('assigned','null')->get();
        return view('delivery.firstpage')->with('data',$parcels);
    }

    public function index()
    {
        //fetching the first five or n parcel details and asigining to the delivery man who logged in

     
        $parcels = DB::table('parcels')->take(5)->where('assigned','null')->get();
        // now loop through all the parcel and change their assigned value to the loggin i user id

        //taking the id  of each parcel to change in the databse 
        $idArray = array();
        foreach ($parcels as $key=>$assigned) {
            foreach ($assigned as $key=>$attr) {
                    if($key=='id')
                    {
                        // echo $key."<br>".$attr ;
                        array_push($idArray, $attr);
                    }
                
            }

        }


         // updating database for fetched parcels
        foreach ($idArray as $key) {

            // $affected = DB::table('parcels')
            //   ->where('id', $key)
            //   ->update(['assigned' => 'totdeliver_shankar']);
                    

        }

        //asume that we pass the distance matrix functio to the cordinates and we received the total distance of all the nodes

        $delivery_path = array(1,2,3,4,1);

        // print_r($parcels[0]);

        
        



        



        return view('delivery.index')->with('path',$parcels);
    }
}
