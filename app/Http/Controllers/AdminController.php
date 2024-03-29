<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\Parcel;
use Illuminate\Support\Facades\Hash;
// use App\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $totalusers = User::get();
        // dd();
        $userCount = User::count();

        $parcelCount = parcel::where('status','topick')->count();
        // $user = DB::table('users')->where('name', 'John')->first();
        
        $NormalUser = DB::table('users')->where('role', 'user')->count();
        // dd($NormalUser);
        $employee = $userCount-$NormalUser;


        return view('admin.index')->with('msg','')->with('usercount',$userCount)->with('parcelCount',$parcelCount)->with('employee',$employee);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // for creating the employee
        
        return view("admin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // storing the employee
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' =>['required','string'],
            'phone' =>['required','string','min:10'],
    ]);


        User::create([
          'role' => $request['role'],
          'phone' => $request['phone'],
          'name' => $request['name'],
          'email' => $request['email'],
          'address'=>$request['address'],
          'password' => Hash::make($request['password']),

        ]);


        // return view('admin.index')->with('msg','User Addes Successfully');
        $userCount = User::count();

        $parcelCount = parcel::where('status','topick')->count();
        // $user = DB::table('users')->where('name', 'John')->first();
        
        $NormalUser = DB::table('users')->where('role', 'user')->count();
        // dd($NormalUser);
        $employee = $userCount-$NormalUser;


        return view('admin.index')->with('msg','User Addes Successfully')->with('usercount',$userCount)->with('parcelCount',$parcelCount)->with('employee',$employee);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //show the employee list
        $employes = User::where('role','delivery_man')->get();
        // $employes = User::find('1');
        // dd($employes);

        return view('admin.employes')->with('employes',$employes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // show the employee list or signle tot he admin
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

    // ============controller for  parcels======
        //function to searchc the parcel
    public function SearchParcel($id)
    {
        //search parcel with the id
        // to be shown in single page
         
        return view('admin.SearchParcel');

    }

    public function viewParcel()
    {
        //list the whole package
        // whole list of the parcels to be shown
        $parcels = DB::table('parcels')->take(8)->get();
        return view('admin.viewParcel')->with('parcels',$parcels);

    }


// ===========controllers for the Users=======
    public function ViewUsers()
    {
       

        $employee = DB::table('users')->get();
        // dd($employee);
        return view('admin.viewUsers')->with('employee',$employee);
    }


    public function ViewSingleUser($id)
    {

        return view('admin.ViewSingleUser');
    }

}
