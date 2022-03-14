<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Restaurant;



class RetoranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { if(Auth::check()){
        // DB::table('Restaurant_infos')->insert([
    
        //     'restaurant_name'=>'hartut',
        //     'address'=>'hartut',
        //     'city'=>'hartut',
        //     'icon'=>'hartut',
        //     'image'=>'hartut',
        //     'top'=>'1',
           
        //  ]);
    
       
       $Restaurant = Restaurant::where('companyname',ucfirst(Auth()->user()->companyname))->get();
        // $Restaurant = Restaurant::where('companyname','hartut')->get();
         return view('restoran.index',['Restaurant'=>$Restaurant]);
         }else{
            return Redirect::to("login");
    
     
         }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){return view('restoran.create'); }
            else
            {
                 return Redirect::to("login");
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       



        $createuser =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'companyname'=>ucfirst(Auth()->user()->companyname),
            'password' => Hash::make($request['password']),
        ]);

        // $createuser->assignRole("user");

        $createrestoran = Restaurant::create([

         'restaurant_name'=>$request['restaurant_name'],
         'contact_name'=>$request['name'], 
         'companyname'=>$request['companyname'], 
         'phone'=>$request['phone'], 
         'email'=>$request['email'],
         'password'=>Hash::make($request['password']),

        ]);

        return Redirect::back()->withErrors(['success', 'Restoran Create Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
