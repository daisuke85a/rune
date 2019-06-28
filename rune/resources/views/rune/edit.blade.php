@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">換算モード</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option>マニュアル</option>
                        <option>オート(円ドル連動)</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">マニュアルレート指定</label>
                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary">反映</button>
            </form>
        </div>
    </div>
</div>
@endsection
