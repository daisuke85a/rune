@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            @foreach ($helpItems as $helpItem)
            <form method="POST" action="/help_histories">
                {{csrf_field()}}
                <input type="hidden" class="form-control" id="id" name="id" placeholder="" value="{{$helpItem->id}}">
                <button type="submit"
                    class="btn btn-primary btn-lg btn-block my-4">{{$helpItem->name}}({{$helpItem->rune}}ルーン)</button>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection
