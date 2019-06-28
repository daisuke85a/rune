@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <h2>所持ルーン</h2>
            <p>300ルーン</p>
            <h2>ルーンを円換算すると</h2>
            <p>900円</p>
            <h2>ルーンのレート</h2>
            <p>3円/ルーン</p>
            <button type="button" class="btn btn-primary btn-lg btn-block"  onclick="location.href='/help/create'">お手伝いした</button>
        </div>
    </div>
</div>
@endsection
