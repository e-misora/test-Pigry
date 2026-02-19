@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/goal_setting.css')}}">
@endsection

@section('content')
<div class="goal_setting-content">
    <div class="goal_setting-content__logo">
        <h2>目標体重設定</h2>
    </div>
    <form class="goal_setting__form" action="" method="post">
    @csrf
        <div class="goal_setting__form-item">
            <input class="goal_setting__form-input" type="text" name="target_weight" value="{{$latestWeightTarget->target_weight}}"><span>kg</span>
        </div>
        <div class="goal_setting__form-button">
            <a class="goal_setting__form-button--back" href="/weight_logs">戻る</a>
            <button class="goal_setting__form-button--submit" type="submit">更新</button>
        </div>
    </form>
</div>
@endsection