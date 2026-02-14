<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightTarget;

class WeightTargetController extends Controller
{
    public function edit(){
        $weight_targets=WeightTarget::all();
        return view('goal_setting',compact('weight_targets'));
    }
}
