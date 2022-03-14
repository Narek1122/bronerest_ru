<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateFloorPlanController extends Controller
{
    public function create_floor_plan(){
        return view('create-floor-plan.index');
    }
}
