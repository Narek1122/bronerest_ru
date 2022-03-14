<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Floor_plane;
use App\Models\City;
use App\Models\Restaurant_type;
use App\Models\Restaurant;

class RestoranController extends Controller
{
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function support(Request $request)
    {
        return response()->json([
                                    'messege' =>'success',
                                ]);
        
        
    }
   
   
   public function lant_long($latitude,$longitude)
    {
       
       $Restaurant_type =Restaurant_type::All();
       $Restaurant =Restaurant::All();


       return response()->json([
                                    'Restaurant' =>$Restaurant,
                                ]);

    }

   public function city($city)
    {
       
       $Restaurant_type =Restaurant_type::All();
       $Restaurant =Restaurant::All();


       return response()->json([
                                    
                                    'Restaurant_catigory' =>$Restaurant_type,
                                    'Restaurant' =>$Restaurant,
                                ]);

    }

   public function filtercategorycity($category,$city)
    {
       $City =City::All();
       $Restaurant_type =Restaurant_type::All();
       $Restaurant =Restaurant::All();


       return response()->json([
                                    'City' => $City,
                                    'Restaurant_catigory' =>$Restaurant_type,
                                    'Restaurant' =>$Restaurant,
                                ]);

    }
     public function category($category)
    {
       $City =City::All();
       $Restaurant_type =Restaurant_type::All();
       $Restaurant =Restaurant::All();


       return response()->json([
                                    'City' => $City,
                                    'Restaurant_catigory' =>$Restaurant_type,
                                    'Restaurant' =>$Restaurant,
                                ]);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $City =City::All();
       $Restaurant_type =Restaurant_type::All();
       $Restaurant =Restaurant::All();


       return response()->json([
                                    'City' => $City,
                                    'Restaurant_catigory' =>$Restaurant_type,
                                    'Restaurant_top' =>$Restaurant,
                                ]);

    }
    
    public function search($search)
    {
       
       
       $Restaurant =Restaurant::where('restaurant_name',$search)->orwhere('address',$search)->get();


       return response()->json([
           'data' =>  $Restaurant,
                                ]);

    }

 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
    $stack = array();

    $data = Floor_plane::where('restaurnt_id',$id)->first();
    
   // $room = Floor_plane::where('restaurnt_id',$id)->distinct()->get(['hall_name']);
   
    $room = Floor_plane::where('restaurnt_id',$id)->distinct()->get(['hall_name']);

    $cars = array();

   
    
    foreach($room  as $dat){
         
         $k = Floor_plane::where('restaurnt_id',$id)->where('hall_name', $dat->hall_name)->get();
   
    foreach($k as $val){
        
        if($val->hall_name == $dat->hall_name){
             $js = json_decode($val->data_json, true);
            
             if($val->data_json == "{}"){
                   array_push( $cars, (object) array());
                 
             }
              else{
                  array_push( $cars, (object) array('id' => $val->id,'x' => $js['x'],'y' => $js['y'],'img' => $js['img'],'quantity_chair'=>$js['quantity_chair'])); 
                 
              }
        }
        
     }
      $stack[$dat->hall_name]=$cars;
    }
   
    $info = array();
    $Restaurant =Restaurant::where('id',$id)->get();
    $restoran=array();
    foreach($room as $dataone){
    foreach($Restaurant as $data){
    $k = Floor_plane::where('hall_name',$dataone->hall_name)->first();
                array_push( $restoran ,  array(
                          'id'=>$data->id,
                          'restaurant_name'=>$data->restaurant_name,
                          'address' =>$data->address,
                          'long'=>$data->latitude,
                          'lant'=>$data->latitude, 
                          'logo'=>$data->logo,
                          'categories'=>$data->categories,
                          'img'=>$data->img,
                          'phone'=>$data->phone,
                          'background_img'=>$k->background_img,
                          'restaurnt_id'=>$k->restaurnt_id,
                          'hall_name'=>$k->hall_name,
                          'table_x'=>$k->table_x,
                          'table_y'=>$k->table_y,
                          'count'=>count($stack["$k->hall_name"]),
                          'description'=>$k->description,
                          'data'=>$stack["$k->hall_name"],
                          ));
              
    }      
  }
    return response()->json(['Restaurant' =>$restoran,]);
    }
    
    
    
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reservation(Request $request)
    {
    //   'name' =>$request['name'],
    //          'phone'=>$request['phone'],
    //          'tableId'=>$request['tableId'],
    //          'date'=>$request['date'],
    //          'guests'=> $request['guests'],
      
      
      
      
      
    //   //ok
    //      return response()->json(['success'=>'1',
    //                               'massage'=>'Ваше бронрование в Ресторане Шереп на Пятницу, 28 Мая в 18:45 для 5 гостей подтверждено!',
     //                                'errors'=>'false',
    //      ]);
         
//       //no ok
//         return response()->json(['success'=>'2',
//                                  'massage'=>'Ваше бронирование было отклонено, поскольку столик уже забронирован на это время
// Доступное время: 14:00, 17:00, 20:00',
  //                                   'errors'=>'true',
//          ]);
         
      //error
        return response()->json(['success'=>'0',
                                 'massage'=>'неверные данные',
                                 'errors'=>'true',
         ]);
        
    
    }
    
    
    
    
      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function room($restoranid,$roomname)
    {
        
         $stack = array();

    $data = Floor_plane::where('restaurnt_id',$restoranid)->first();
   
    $room = Floor_plane::where('restaurnt_id',$restoranid)->distinct()->get(['hall_name']);

    $cars = array();

    $k = Floor_plane::where('restaurnt_id',$restoranid)->where('hall_name',$roomname)->get();
     
    foreach($k as $val){
            $j =$val->data_json;
            $js = json_decode($j, true);
                  for($x=1; $x<=$val->table_y; $x++){
                      for($y=1; $y<=$val->table_x; $y++){
                          if($x ==intval($js['x'])){
                              if($y == intval($js['y'])){
                              array_push( $cars,  array('id' => $val->id,'x' => $js['x'],'y' => $js['y'],'img' => $js['img'],'quantity_chair'=>$js['quantity_chair']));
                           //   $cars= (object) array('x' => $js['x'],'y' => $js['y'],'img' => $js['img'],'quantity_chair'=>$js['quantity_chair']);
                          }else{
                              array_push($cars,(object) array( ));
                          }}
                  }
                  }
                 //array_push($stack, $cars);
               $stack[$val->hall_name]=$cars;
     }
    $info = array();
    $Restaurant =Restaurant::where('id',$restoranid)->get();
    $restoran=array();
    $k = Floor_plane::where('restaurnt_id',$restoranid)->where('hall_name',$roomname)->first();
      foreach($Restaurant as $data){
          
                array_push( $restoran ,  array(
                          'id'=>$data->id,
                          'restaurant_name'=>$data->restaurant_name,
                          'address' =>$data->address,
                          'long'=>'213123123',
                          'lant'=>'213123123', 
                          'logo'=>$data->logo,
                          'img'=>$data->img,
                          'phone'=>$data->phone,
                          'background_img'=>$k->background_img,
                          'restaurnt_id'=>$k->restaurnt_id,
                          'hall_name'=>$k->hall_name,
                          'table_x'=>$k->table_x,
                          'table_y'=>$k->table_y,
                          'description'=>$k->description,
                          'data'=>$stack,
                          'room'=>$room,
                          ));
  }
    return response()->json(['Restaurant' =>$restoran,]);
        
        
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
