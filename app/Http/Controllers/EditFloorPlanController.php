<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Floor_plane;
use App\Models\Floor_plane;

class EditFloorPlanController extends Controller
{
    public function edit_floor_plan($restaurnt_id, $name){
        dd(333);
       $floor_plan=Floor_plane::where(['restaurnt_id'=> $restaurnt_id, 'hall_name'=> $name] )->get();
        return view('edit-floor-plan.index', ['floor_plan'=>$floor_plan]);
    }


    public function update_floor_plan(Request $request){
        $file= $request->file('img');
// dd($file);
    //   ----------delete-----------------
        $delete=Floor_plane::where(['restaurnt_id'=> $request['restaurnt_id'], 'hall_name'=> $request['hall_name'] ])->delete();
        $old_img = 'assets/images-background-floor-plane/'.$request['hidden_background_url'];
        if($delete && !empty($file)){
            unlink($old_img);
        }
// ------create again------------------------
        $arr_tbl=json_decode($request['arr_tbl']);
        if(empty($file)){
            $filename=$request['hidden_background_url'];
        }
        else{
            $ext = pathinfo($file->getClientOriginalName(), PATHINFO_EXTENSION);
            $filename = time()*rand(100000, 1000000).'.'.$ext;
        }
        // $file= $request->file('img');
         // File upload location
         $location = 'assets/images-background-floor-plane';
         $arr=[];
        foreach($arr_tbl as $value){
            $update_floor_plan=Floor_plane::create([
                'restaurnt_id'=> '9',
                'hall_name' =>$request['hall_name'],
                'background_img' => $filename,
                'table_x' => $request['table_x'],
                'table_y' => $request['table_y'],
                'data_json' => json_encode($value),
                'description' => $request['description'],
            ]);
            if($update_floor_plan){
                 $res=1;
                 array_push($arr, 1);
            }
        }
        if(!empty($file)){
            if($file->move($location, $filename) && count($arr)==count($arr_tbl)){
                return 1;
            }
        }
        else{
            if( count($arr)==count($arr_tbl)){
                return 1;
            }
        }

    }
}
