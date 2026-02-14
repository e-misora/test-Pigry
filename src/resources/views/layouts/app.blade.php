<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pigry</title>
    <link rel="stylesheet" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @livewireStyles
    @yield('css')
</head>
<body>
    <div class="pigry-content">
        <header class="header">
            <div class="header__logo">
                <h1>PiGLy</h1>
            </div>
            <nav class="header__nav">
                <a class="header__nav-setting" href="/wight_logs/goal_setting">
                    <img src="{{asset('images/setting.png')}}" alt="">
                    目標体重設定
                </a>
                <form class="header__nav-logout" action="/logout" method="post">
                @csrf
                    <button class="header__nav-logout--submit" type="submit">
                        <img src="{{asset('images/logout.png')}}" alt="">
                        ログアウト
                    </button>
                </form>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
    </div>
    @livewireScripts
</body>
</html>