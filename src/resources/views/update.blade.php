@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/update.css')}}">
@endsection

@section('content')
<div class="update-content">
    <div class="update-content__logo">
        <h2>Weight Log</h2>
    </div>
    <form class="update__form" action="" method="post">
    @csrf
        <div class="goal_setting__form-item">
            <input class="goal_setting__form-input" type="text"><span>kg</span>
        </div>
        <div class="goal_setting__form-button">
            <a class="goal_setting__form-button--back" href="/weight_logs">戻る</a>
            <button class="goal_setting__form-button--submit" type="submit">更新</button>
        </div>
    </form>
</div>
@endsection