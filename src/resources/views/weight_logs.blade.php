@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/weight_logs.css')}}">
@endsection

@section('content')
<div class="weight_logs-content">
    <div class="weight_logs-content__top">
        <div class="weight_logs-content__top--inner">
            <ul>目標体重
                <li class="weight_logs-content__data">{{$latestWeightTarget->target_weight}}<span>kg</span>
                </li>
            </ul>
        </div>
        <div class="weight_logs-content__top--inner">
            <ul>目標まで
                <li class="weight_logs-content__data">
                {{$goalWeight}}<span>kg</span>
                </li>
            </ul>
        </div>
        <div class="weight_logs-content__top--inner">
            <ul>最新体重
            <li class="weight_logs-content__data">
                {{$latestWeight->weight}}<span>kg</span>
            </li>
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
        <form action="/weight_logs/{weight_log_id}">
            <table class="weight_logs-table">
                <thead class="weight_logs-table__header">
                <tr>
                    <th class="weight_logs-table__header--date">日付</th>
                    <th class="weight_logs-table__header--weight">体重</th>
                    <th class="weight_logs-table__header--calories">食事摂取カロリー</th>
                    <th class="weight_logs-table__header--exercise-time">運動時間</th>
                </tr>
                </thead>
                <tbody>
                @foreach($weight_logs as $weight_log)
                <tr class="weight_logs-table__data">
                    <td class="weight_logs-table__data--date">{{$weight_log['date']}}</td>
                    <input type="hidden" name="date" value="{{$weight_log['date']}}">
                    <td class="weight_logs-table__data--weight">{{$weight_log['weight']}}<span>kg</span></td>
                    <input type="hidden" name="weight" value="{{$weight_log['weight']}}">
                    <td class="weight_logs-table__data--calories">{{$weight_log['calories']}}<span>cal</span></td>
                    <input type="hidden" name="calories" value="{{$weight_log['calories']}}">
                    <td class="weight_logs-table__data--exercise-time">{{$weight_log['exercise_time']}}</td>
                    <input type="hidden" name="exercise-time" value="{{$weight_log['exercise-time']}}">
                    <td class="weight_logs-table__form-detail">
                        <a href="/weight_logs/{:weightLogId}">
                            <img class="form-update--img" src="{{asset('images/kkrn_icon_enpitsu_4.png')}}">
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="weight_logs-table__pagination">
                {{$weight_logs->links('vendor.pagination.semantic-ui')}}
            </div>
        </form>
    </div>
</div>

@endsection