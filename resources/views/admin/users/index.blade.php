@extends('admin.layouts.master')

@section('title','管理員管理')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                人員管理 <small>所有使用者</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 人員管理
                </li>
            </ol>
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
                        <th width="100" style="text-align: center">管理</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td style="text-align: center">
                                {{$user ->id}}</td>
                            <td>{{$user ->name}}</td>
                            <td style="text-align: center">
                                {{$user->email}}</td>
                            <td>{{$user ->password}}</td>
                            <td style="text-align: center">
                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display: inline">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">刪除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection
