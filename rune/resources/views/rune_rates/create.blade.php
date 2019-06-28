@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <form method="POST" action="/rune_rates">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="mode">換算モード</label>
                    <select class="form-control" id="mode" name="mode">
                        <option value="manual">マニュアル</option>
                        <option value="auto">オート(円ドル連動)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="rate">ルーンレート(1ルーンあたりの円)</label>
                    <input type="number" class="form-control" id="rate" name="rate" placeholder="" value="">
                </div>
                <button type="submit" class="btn btn-primary">登録</button>
            </form>
        </div>
    </div>
</div>
@endsection
