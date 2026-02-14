@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<div class="register-content">
    <div class="register-content__inner">
        <div class="register-content__heading">
            <h1 class="register-content__logo">PiGLy</h1>
            <h2 class="register-content__ttl">新規会員登録</h2>
        </div>
        <p>STEP2 体重データの入力</p>
    </div>
    <form class="register__form" action="/register" method="post">
    @csrf
        <label class="register__form-label" for="">現在の体重</label>
        <input class="register__form-input" type="text" name="weight" value="{{old('weight')}}" placeholder="現在の体重を入力">
        <div class="form-error">
            @error('weight')
            {{$message}}
            @enderror
        </div>
        <label class="register__form-label" for="">目標の体重</label>
        <input class="register__form-input" type="text" name="email" value="{{old('target_weight')}}" placeholder="目標の体重を入力">
        <div class="form-error">
            @error('target_weight')
            {{$message}}
            @enderror
        </div>
        <div class="register__form-button">
            <button class="register__form-button--submit">アカウント作成</button>
        </div>
    </form>
</div>
@endsection