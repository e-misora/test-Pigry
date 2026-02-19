@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/detail.css')}}">
@endsection

@section('content')
<div class="update-content">
    <div class="update-content__logo">
        <h2>Weight Log</h2>
    </div>
    <form class="update__form" action="" method="post">
    @csrf
        <div class="update__form-group">
            <label>日付</label>
            <input class="update__form-input--date" type="date" name="date" value="{{old('date')}}">
        </div>
        <div class="form-error">
            @error('date')
            {{$message}}
            @enderror
        </div>
        <div class="update__form-group">
            <label class="update__form-label">体重</label>
            <input class="update__form-input--weight" type="text" name="weight" value="{{old('weight')}}"><span>kg</span>
        </div>
        <div class="form-error">
            @error('weight')
            {{$message}}
            @enderror
        </div>
        <div class="update__form-group">
            <label class="update__form-label">摂取カロリー</label>
            <input class="update__form-input--calories" type="text" name="calories" value="{{old('calories')}}"><span>cal</span>
        </div>
        <div class="form-error">
            @error('calories')
            {{$message}}
            @enderror
        </div>
        <div class="update__form-group">
            <label class="update__form-label">運動時間</label>
            <input class="update__form-input--exercise_time" type="text" name="exercise_time" value="{{old('exercise_time')}}">
        </div>
        <div class="form-error">
            @error('exercise_time')
            {{$message}}
            @enderror
        </div>
        <div class="update__form-group">
            <label class="update__form-label">運動内容</label>
            <textarea class="update__form-textarea" name="exercise_content" rows="4"  value="{{old('exercise_content')}}"></textarea>
        </div>
        <div class="form-error">
            @error('exercise_content')
            {{$message}}
            @enderror
        </div>
        <div class="update__form-button">
            <a class="update__form-button--back" href="/weight_logs">戻る</a>
            <button class="update__form-button--submit" type="submit">更新</button>
        </div>
    </form>
</div>
@endsection