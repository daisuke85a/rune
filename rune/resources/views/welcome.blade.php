@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <h2>お小遣いアプリ ルーン</h2>
            <p>ママが子供のお小遣い帳を賢く管理するアプリ</p>
            <h2>特徴</h2>
            <p>お小遣いのレートを決められる</p>
            <p>お手伝いの内容を管理できる</p>
            <p>レート：100円イコール25ルーン。その時々で100円が10ルーンになったりならなかったり・・で世界情勢をそこから肌で感じてもらいたい</p>
            <button type="button" class="btn btn-primary btn-lg btn-block"  onclick="location.href='/home'">はじめる！</button>
        </div>
    </div>
</div>
@endsection
