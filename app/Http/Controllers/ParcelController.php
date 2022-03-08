<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Parcel;
use Illuminate\Support\Facades\DB;


class ParcelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hello world";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parcel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'sname' => 'required|max:40',
            'sadd' => 'required|min:20',
            'snumber'=>'required',
            'lat' =>'required',
            'lng' =>'required',

            'rname'=>'required',
            'radd'=>'required',
            'rnumber'=>'required',
            'lat2' =>'required',
            'lng2' =>'required',

            'pweight'=>'required',
            'pheight'=>'required',
            'plength'=>'required',
            'pwidth' =>'required',
            'comment'=>'required',
            
        ]);



        $p = new Parcel;
        
        $p->sname = $request->sname;
        $p->sadd = $request->sadd;
        $p->snumber=$request->snumber;
        $p->lat = $request->lat;
        $p->lng = $request->lng;
        // dd($p);
        $p->rname = $request->rname;
        $p->rnumber = $request->rnumber;
        $p->radd=$request->radd;
        $p->lat2=$request->lat2;
        $p->lng2 = $request->lng2;
        
        $p->pweight=$request->pweight;
        $p->pheight=$request->pheight;
        $p->plength=$request->plength;
        $p->pwidth=$request->pwidth;
        $p->comment = $request->comment;
        $p->save();
        // dd($p->id);
        $request->session()->flash('msg','Congratulations the Pickup Request has been Received. Your UID is:     ' .$p->id.'                                                                                         Plese Keep the UID for future Refrence and Treaking of the Parcel');


$parcels = DB::table('parcels')->take(5)->get();
// $orders = DB::DB::table('parcels')->where('assigned','null')->get();        
// dd(gettype($parcels));
// if($parcels==null)
// {
//     echo 'empty';
//     dd($parcel);
// }
// if($parcels!=null)
// {
//     echo 'not empty';
//     dd($parcels);
// }
return view('home')->with('items',$parcels);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // echo "viewing the parcel details by users and admin";
        $parcel = Parcel::find(1);
        // dd($parcel);
        return view('parcel/show')->with('parcel',$parcel);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function Status(Request $request)
    {
        // return $id.'showing thhe status for the parcel';

        // dd($request);

        $parcel = Parcel::find($request->id);
        if($parcel==null)
        {
                  return view('parcel.status')->with('parcel','null')->with('id',$request->id);
        }
        return view('parcel.status')->with('parcel',$parcel)->with('id',$request->id);
    }

    public function View($id)
    {
        // echo $id;
        $parcel = Parcel::find($id);
        

        return view('Viewparcel')->with('item',$parcel);
    } 
}
