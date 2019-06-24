@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2>お手伝いリスト</h2>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-info add-new">
                                        <i class="fa fa-plus"></i>追加
                                    </button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>お手伝い</th>
                                    <th>ルーン</th>
                                    <th>アクション</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>お皿洗い</td>
                                    <td>20</td>
                                    <td>
                                        <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                class="material-icons">&#xE254;</i></a>
                                        <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                class="material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>お風呂掃除</td>
                                    <td>40</td>
                                    <td>
                                        <a class="edit" title="Edit" data-toggle="tooltip"><i
                                                class="material-icons">&#xE254;</i></a>
                                        <a class="delete" title="Delete" data-toggle="tooltip"><i
                                                class="material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>おつかい</td>
                                    <td>60</td>
                                    <td>
                                        <a class="edit" title="Edit" data-toggle="tooltip"><i
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
        </div>
    </div>
</div>
@endsection
