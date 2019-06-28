@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8">
                        <h2>お手伝いリスト</h2>
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
                    <tr>
                        <th>06/28</th>
                        <td>お皿洗い</td>
                        <td>20</td>
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" data-placement="top"><i
                                    class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <th>06/27</th>
                        <td>お風呂掃除</td>
                        <td>40</td>
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" data-placement="top"><i
                                    class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <tr>
                        <th>06/26</th>
                        <td>おつかい</td>
                        <td>60</td>
                        <td>
                            <a class="edit" title="Edit" data-toggle="tooltip" data-placement="top"><i
                                    class="material-icons">&#xE254;</i></a>
                            <a class="delete" title="Delete" data-toggle="tooltip"><i
                                    class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
