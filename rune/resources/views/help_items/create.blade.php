@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <form method="POST" action="/help_items">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">名前</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="">
                </div>
                <div class="form-group">
                    <label for="rune">ルーン</label>
                    <input type="number" class="form-control" id="rune" name="rune" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">登録</button>
            </form>

        </div>
    </div>
</div>
@endsection
