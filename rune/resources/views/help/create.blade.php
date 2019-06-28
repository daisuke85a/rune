@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <button type="button" class="btn btn-primary btn-lg btn-block my-4" onclick="location.href='/home'">お皿洗い(20ルーン)</button>
            <button type="button" class="btn btn-primary btn-lg btn-block my-4" onclick="location.href='/home'">お風呂掃除(40ルーン)</button>
            <button type="button" class="btn btn-primary btn-lg btn-block my-4" onclick="location.href='/home'">おつかい(60ルーン)</button>
        </div>
    </div>
</div>
@endsection
