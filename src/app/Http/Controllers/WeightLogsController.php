<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use App\Http\Requests\WeightLogsRequest;

class WeightLogsController extends Controller
{
    public function index(){
        $weight_logs=WeightLog::Paginate(8);
        $latestWeightTarget=WeightTarget::latest()->select('target_weight')->orderBy('id','desc')->first();
        $latestWeight=WeightLog::latest()->select('weight')->orderBy('id','desc')->first();
        $goalWeight=$latestWeightTarget->target_weight - $latestWeight->weight;
        return view('weight_logs',compact('weight_logs','latestWeightTarget','latestWeight','goalWeight'));
    }

    public function store(Request $request){
        $weight_logs = new WeightLog();

        $weight_logs->user_id = 1;
        $weight_logs->date = $request->date;
        $weight_logs->weight = $requequest->calories;
        $weight_logs->exercise_time = $request->exercise_time;
        $weight_logs->exercise_contest->weight;
        $weight_logs->calories = $rent = $request->exercise_content;
        $weight_logs->save();

        return redirect('/weight_logs');
    }

    public function show(){
        $weight_logs = WeightLog::find($id);
        dd($weight_logs);
        return view('detail',compact($weight_logs));
    }

}
