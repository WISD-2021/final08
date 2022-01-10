@extends('admin.layouts.master')

@section('title', '新增管理員')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                新增管理員 <small>請輸入管理員資訊</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 管理員管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    @include('admin.layouts.partials.validation')
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <form action="/admin/employees" method="POST" role="form">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>管理員名稱：</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label>信箱：</label>
                    <input name="email" type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>密碼：</label>
                    <input name="password" type="password" class="form-control" required autocomplete="new-password">
                </div>
                <div class="form-group">
                    <label>確認密碼：</label>
                    <input name="password_confirmation" type="password" class="form-control" required autocomplete="new-password" >
                </div>
                <div class="form-group">
                    <label>身分別為員工</label>
                    <input type="" name="type" class="form-control" value="1" readonly="readonly">
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">建立</button>
                </div>

                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection
