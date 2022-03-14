<?php

namespace App\Http\Controllers;

use App\Models\Floor_plane;
use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AddFloorPlanController extends Controller
{
    public function addFloorPlan(Request $request){
        // return view('add-floor-plan.add-floor-plan');
        // $validation=$request->validate([
        //     'room_name' =>'required',
        //     'description' => 'required',
        //     'width_x' => 'required',
        //     'height_y' => 'required'
        // ]);

        $user =User::where('id',Auth::id())->first();
        $restaurnt_id=Restaurant::where('email', $user->email)->first();

        $arr_tbl=json_decode($request['arr_tbl']);
        $file= $request->file('img');
        $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
        $filename = time()*rand(100000, 1000000).'.'.$ext;
         // File upload location
         $location = 'assets/images-background-floor-plane';
         $arr=[];
        foreach($arr_tbl as $value){
           $floor_plane=Floor_plane::create([
                'restaurnt_id'=> $restaurnt_id->id,
                'hall_name' =>$request['hall_name'],
                'background_img' => $filename,
                'table_x' => $request['table_x'],
                'table_y' => $request['table_y'],
                'data_json' => json_encode($value),
                'description' => $request['description'],
            ]);
            if($floor_plane){
                 $res=1;
                 array_push($arr, 1);
            }
        }
        if($file->move($location, $filename) && count($arr)==count($arr_tbl)){
            return 1;
        }
    }
}
