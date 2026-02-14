@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register_step1.css')}}">
@endsection

@section('content')
<div class="register-content">
    <div class="register-content__inner">
        <div class="register-content__heading">
            <h1 class="register-content__logo">PiGLy</h1>
            <h2 class="register-content__ttl">新規会員登録</h2>
        </div>
        <p>STEP1 アカウント情報の登録</p>
    </div>
    <form class="register__form" action="/register" method="post">
    @csrf
        <label class="register__form-label" for="">お名前</label>
        <input class="register__form-input" type="text" name="name" value="{{old('name')}}" placeholder="名前を入力">
        <div class="form-error">
            @error('name')
            {{$message}}
            @enderror
        </div>
        <label class="register__form-label" for="">メールアドレス</label>
        <input class="register__form-input" type="email" name="email" value="{{old('email')}}" placeholder="メールアドレスを入力">
        <div class="form-error">
            @error('email')
            {{$message}}
            @enderror
        </div>
        <label class="register__form-label" for="">パスワード</label>
        <input class="register__form-input" type="password" name="password"  placeholder="パスワードを入力">
        <div class="form-error">
            @error('password')
            {{$message}}
            @enderror
        </div>
        <div class="register__form-button">
            <button class="register__form-button--submit">次に進む</button>
            <a class="register__form-button--link" href="/login">ログインはこちら</a>
        </div>
    </form>
</div>
@endsection