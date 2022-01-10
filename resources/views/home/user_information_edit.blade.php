@extends('layouts.master')

@section('title','個人資料')
<head>
    <style>
        /*個別字體樣式1*/
        .text01{
            font-weight:bolder;
            font-size:24px;
        }
    </style>
</head>

@section('content')

    <div class="container"><br><br><br>
        <p class="text01">修改個人資料</p><br>
        <hr>
        <div class="col-lg-12">
                <form action="{{route('users.user_information_update',$user->id)}}" method="POST" role="form">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label>會員：</label>
                        <input name="name" type="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label>信箱：</label>
                        <input name="email" type="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label>密碼：</label>
                        <input name="password"  class="form-control" value="{{$user->password}}">
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">更新</button>
                    </div>

                </form>
        </div>
    </div>

    <div class="wrap">
    </div>

    <br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br><br>

@endsection
