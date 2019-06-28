@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>お手伝い履歴</h2>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>日にち</th>
                        <th>お手伝い</th>
                        <th>ルーン</th>
                        <th>アクション</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($helpHistories as $helpHistory)
                    <tr>
                        <td>{{$helpHistory->created_at}}</td>
                        <td>{{$helpHistory->name}}</td>
                        <td>{{$helpHistory->rune}}</td>
                        <td class="d-flex">
                            <form method="GET" action="/help_items/{{$helpHistory->id}}/edit">
                                {{-- <input type="hidden" name="id" value="{{$helpItem->id}}"> --}}
                                <button class="edit btn" type="submit" title="Edit" data-toggle="tooltip"
                                    data-placement="top"><i class="material-icons">&#xE254;</i></button>
                            </form>

                            <form method="POST" action="/help_items/{{$helpHistory->id}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                {{-- <input type="hidden" name="id" value="{{$helpItem->id}}"> --}}
                                <button class="delete btn" type="submit" title="Delete" data-toggle="tooltip"
                                    data-placement="top"><i class="material-icons">&#xE872;</i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
