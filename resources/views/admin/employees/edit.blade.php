@extends('admin.layouts.master')

@section('title', '編輯管理員')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                編輯管理員 <small>編輯管理員資料</small>
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
            <form action="/admin/employees/{{$users->id}}" method="POST" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label>管理員名稱：</label>
                    <input name="name" class="form-control" value="{{$users->name}}">
                </div>
                <div class="form-group">
                    <label>信箱：</label>
                    <input name="invent" class="form-control" value="{{$users->email}}">
                </div>
                <div class="form-group">
                    <label>密碼：</label>
                    <input name="price" class="form-control" value="">
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success" style="background-color: #6f42c1;border-color: #6f42c1">更新</button>
                </div>

            </form>

            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>

        </div>
    </div>
    <!-- /.row -->
@endsection
