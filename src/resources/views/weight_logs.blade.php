@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/weight_logs.css')}}">
@endsection

@section('content')
<div class="weight_logs-content">
    <div class="weight_logs-content__top">
        <div class="weight_logs-content__top--inner">
            <p>目標体重</p>
            <p class=></p><span>kg</span>
        </div>
        <div class="weight_logs-content__top--inner">
            <p>目標まで</p>
            <p class=></p><span>kg</span>
        </div>
        <div class="weight_logs-content__top--inner">
            <p>最新体重</p>
            <p class=></p><span>kg</span>
        </div>
    </div>
    <div class="weight_logs__form">
        <form class="weight_logs__search-form" action="" method="post">
        @csrf
            <div class="search-form--items">
                <input class="search-form--items-date" type="date"><span>〜</span>
                <input class="search-form--items-date" type="date">
                <button class="search-form--items-submit" type="submit">検索</button>
            </div>
            <div>
                @livewire('modal')
            </div>
        </form>
        <form action="">
            <table class="weight_logs-table">
                <tr class="weight_logs-table__header">
                    <th class="weight_logs-table__header--date">日付</th>
                    <th class="weight_logs-table__header--weight">体重</th>
                    <th class="weight_logs-table__header--calories">食事摂取カロリー</th>
                    <th class="weight_logs-table__header--exercise-time">運動時間</th>
                </tr>
                @foreach($weight_logs as $weight_log)
                <tr class="weight_logs-table__data">
                    <td class="weight_logs-table__data--date">{{$weight_log['date']}}</td>
                    <td class="weight_logs-table__data--weight">{{$weight_log['weight']}}</td>
                    <td class="weight_logs-table__data--calories">{{$weight_log['calories']}}</td>
                    <td class="weight_logs-table__data--exercise-time">{{$weight_log['exercise-time']}}</td>
                </tr>
                @endforeach
            </table>
        </form>
    </div>
</div>

@endsection