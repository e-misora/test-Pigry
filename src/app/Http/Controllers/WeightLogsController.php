<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightLog;
use App\Models\WeightTarget;
use App\Http\Requests\WeightLogsRequest5rt;

class WeightLogsController extends Controller
{
    public function index(){
        $weight_logs=WeightLog::Paginate(8);
        $weight_targets=WeightTarget::all();
        return view('weight_logs',compact('weight_logs','weight_targets'));
    }

    public function store(WeightLogsRequest $request){
        $weight_log = new WeightLog();

        $weight_log->date=$request->input('date');
        $weight_log->weight=$request->input('weight');
        $weight_log->calories=$request->input('calories');
        $weight_log->exercise_time=$request->input('exercise_time');
        $weight_log->exercise_content=$request->input('exercise_content');

        $weight_log->save();
        return redirect('/weight_logs');
    }

    public function show(){
        return view('update',compact('weight_targets'));
    }

    public function create(){
        return view('register_step2');
    }
}
