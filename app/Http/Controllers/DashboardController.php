<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        if(Auth::check()){
            $title = 1;
        return view('dashboard.index',['title'=>$title]);
    }else{
            return Redirect::to("login");
         }
    }
}
