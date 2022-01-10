@extends('layouts.master')

@section('title','個人資料')
<head>
    <style>
        /*個別字體樣式1*/
        .text01{
            font-weight:bolder;
            font-size:24px;
        }
        /*表格樣式*/
        .td{
            font-weight:bolder;
            font-size:16px;
            text-align:center;
        }
    </style>
</head>

@section('content')
<div class="container">
    <br><br><br><br><br>
    <p class="text01">您的個人資料</p><br>
    <hr>
    <div class="col-lg-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover td">
                <thead>
                <tr>
                    <th width="200" style="text-align: center">姓名</th>
                    <th width="300" style="text-align: center">信箱</th>
                    <th width="300" style="text-align: center">密碼</th>
                    <th width="200" style="text-align: center">管理</th>
                </tr>
                </thead>
                <tbody>
                        <tr style="text-align: center">
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td style="text-align: center">
                                <a class="btn btn-sm btn-primary" href="{{ route('users.user_information_edit', $user->id) }}">編輯</a>
                            </td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="wrap">
</div>

<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

@endsection
