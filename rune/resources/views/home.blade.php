@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <h2>所持ルーン</h2>
            <p>{{$sumRune}}ルーン</p>
            <h2>ルーンを円換算すると</h2>
            <p>{{$yen}}円</p>
            <h2>ルーンのレート</h2>
            <p>{{$runeRate->rate}} 円/ルーン</p>
            <button type="button" class="btn btn-primary btn-lg btn-block"  onclick="location.href='/help_histories/create'">お手伝いした</button>
        </div>
    </div>
</div>
@endsection
