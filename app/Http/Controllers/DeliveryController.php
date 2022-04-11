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
        // foreach ($idArray as $key) {

            // $affected = DB::table('parcels')
            //   ->where('id', $key)
            //   ->update(['assigned' => 'delivery_man_name','status'=>'Delivered']);
                    

        // }

        //asume that we pass the distance matrix functio to the cordinates and we received the total distance of all the nodes

// //global object to keep track of all the substring  
//  $substring= null;
//  $path=null;



// function pc_permute($items, $perms = array()) 
// {
   
//     STATIC $subs = array("");

//     if (empty($items))
//      { 
        
//         $val =join($perms);
//         array_push($subs, $val);
//          $GLOBALS['substring'] = $subs;
        
//         // echo $val."<br>";
//         //echo join(' ', $perms) . "<br />";
//     }
//      else
//       {
//         for ($i = count($items) - 1; $i >= 0; --$i)
//          {
//              $newitems = $items;
//              $newperms = $perms;
//              list($foo) = array_splice($newitems, $i, 1);
//              array_unshift($newperms, $foo);
//              pc_permute($newitems, $newperms);
//          }
//     }
// }


// // $arr = array(1, 2,3);
//  // pc_permute($arr);






// // print_r($substring);
// // echo sizeof($substring);


// // foreach ($substring as $item)
// // {
// //  echo $item."<br>";
// // }

// // ------------substring work done done here--------




// ===========================================================================


// ---------------------------implementing the tsp here--------------
// ----------------Tsp Start-------------

// function tsp(array $graph,$s,$size)
    {
      
        //in place of vertex everytime a new array combination should be provided
        $vertex = array();
        
        //storing the other village in array except the startin village
        for($j=0;$j<$size;$j++)
        {
            if($j!=$s)
            {
                array_push($vertex, $j);
            }
        }

        // calling permutation function
        pc_permute($vertex);
        //checking if the villages are ordered
            

        $min = 99999;

        //number of time the loop will run for substring
        $fact =1;
        
        for($l=1;$l<=$size;$l++)
        {
            $fact=$fact*$l;
        }

        


        // //calculating min path from for loop from for loop (not working)
        //     for($z=0;$z<$fact;$z++)
        //     {

        //         // //currentn path weighgt
        //          $current_path_weihgt = 0;


        //         //  //compute current path weight
        //          $k= $s;

        //          for($i=0;$i<count($vertex);$i++)
        //          {
        //              $current_path_weihgt += $graph[$k][$vertex[$i]];
        //              $k=$vertex[$i];
        //          }

        //          $current_path_weihgt+=$graph[$k][$s];
        //          // echo $current_path_weihgt;

        //          //update minimun
                 

        //         // echo $z.' insode the tsp function to check the number of loop <br>';
        //     }

        //calculating from for eachh loop
            foreach ($GLOBALS['substring'] as $key) 
            {
                
                $vertex = str_split($key);
                // print_r($vertex);
                // echo "<br>";

                if(count($vertex)==1)
                    continue;



                 //currentn path weighgt
                 $current_path_weihgt = 0;


                //  //compute current path weight
                 $k= $s;

                 // echo "--".count($vertex)."--";
                 for($i=0;$i<count($vertex);$i++)
                 {
                     
                     $current_path_weihgt += $graph[$k][$vertex[$i]];
                     $k=$vertex[$i];
                 }

                 $current_path_weihgt+=$graph[$k][$s];
                 // echo $current_path_weihgt;

                 //updating min weighted path
                 // $min = min($min,$current_path_weihgt);

                 if($current_path_weihgt<$min)
                 {
                    $min = $current_path_weihgt;
                    $GLOBALS['path']= $vertex;
                 }

            }



            // $min = min($min,$current_path_weihgt);
            echo $min;
            print_r( $GLOBALS['path']);


    }


//driver function for tsp pasing the matrix
$arr = array(
                array(0,10,15,20),
                array(10,0,35,25),
                array(15,35,0,30),
                array(20,25,30,0)   
            );

tsp($arr,0,4);


  
// ======================================TSP END================


 



// --------------------------------------------
        // echo $min;

    










        $delivery_path = array(1,2,3,4,1);

        // print_r($parcels[0]);

        
        



        



        return view('delivery.index')->with('path',$parcels);
    }
}
