@extends('admin.layouts.master')

@section('title','管理員管理')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                管理者管理 <small>所有管理者</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 管理者管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row" style="margin-bottom: 20px; text-align: right">
        <div class="col-lg-12">
            <a href="{{ route('admin.employees.create') }}" class="btn btn-success">新增管理者</a>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th width="150" style="text-align: center">使用者編號</th>
                        <th width="200" style="text-align: center">姓名</th>
                        <th width="300" style="text-align: center">信箱</th>
                        <th width="300" style="text-align: center">密碼</th>
                        <th width="200" style="text-align: center">管理</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            @if($user->type == "1")
                            <tr>
                                <td style="text-align: center">
                                    {{$user ->id}}</td>
                                <td>{{$user  ->name}}</td>
                                <td style="text-align: center">
                                    {{$user ->email}}</td>
                                <td>{{$user ->password}}</td>
                            <td style="text-align: center">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.employees.edit', $user ->id) }}">編輯</a>
                                /
                                <form action="{{ route('admin.employees.destroy', $user ->id) }}" method="POST" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">刪除</button>
                                </form>
                            </td>
                        </tr>
                            @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
