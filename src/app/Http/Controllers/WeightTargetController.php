<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightTarget;

class WeightTargetController extends Controller
{
    public function edit(){
        $latestWeightTarget=WeightTarget::latest()->select('target_weight')->orderBy('id','desc')->first();
        return view('goal_setting',compact('latestWeightTarget'));
    }
}
