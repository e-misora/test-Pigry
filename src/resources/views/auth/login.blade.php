@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<div class="login-content">
    <div class="login-content__inner">
        <div class="login-content__heading">
            <h1 class="login-content__logo">PiGLy</h1>
            <h2 class="login-content__ttl">ログイン</h2>
        </div>
    </div>
    <form class="login__form" action="/login" method="post">
    @csrf
        <label class="login__form-label" for="">メールアドレス</label>
        <input class="login__form-input" type="email" name="email" value="{{old('email')}}" placeholder="メールアドレスを入力">
        <div class="form-error">
            @error('email')
            {{$message}}
            @enderror
        </div>
        <label class="login__form-label" for="">パスワード</label>
        <input class="login__form-input" type="password" name="password" placeholder="パスワードを入力">
        <div class="form-error">
            @error('password')
            {{$message}}
            @enderror
        </div>
        <div class="login__form-button">
            <button class="login__form-button--submit">ログイン</button>
            <a class="login__form-button--link" href="/register">アカウント作成はこちら</a>
        </div>
    </form>
</div>
@endsection