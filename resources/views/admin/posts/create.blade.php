@extends('admin.layouts.master')

@section('title', '新增管理員')

@section('content')

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                新增商品 <small>請輸入商品內容</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 商品管理
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    @include('admin.layouts.partials.validation')
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <form action="/admin/posts" method="POST" role="form">
                @method('POST')
                @csrf
                <div class="form-group">
                    <label for="title">標題：</label>
                    <input id="title" name="title" class="form-control" value="{{ old('title') }}" placeholder="請輸入商品名稱">
                </div>

                <div class="form-group">
                    <label for="content">內容：</label>
                    <textarea id="content" name="content" class="form-control" rows="10">{{ old('content') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="is_feature">精選？</label>
                    <select id="is_feature" name="is_feature" class="form-control">
                        <option value="0">否</option>
                        <option value="1">是</option>
                    </select>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success">新增</button>
                </div>

                <p>&nbsp</p>
                <p>&nbsp</p>
                <p>&nbsp</p>

            </form>
        </div>
    </div>
    <!-- /.row -->
@endsection
