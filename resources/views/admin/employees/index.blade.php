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
                        <th width="30" style="text-align: center">#</th>
                        <th width="200" style="text-align: center">商品名稱</th>
                        <th width="200" style="text-align: center">數量</th>
                        <th width="200" style="text-align: center">價格</th>
                        <th width="600" style="text-align: center">內容</th>
                        <th width="200" style="text-align: center">商品圖片</th>
                        <th width="200" style="text-align: center">管理</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td style="text-align: center">
                                {{$product ->id}}</td>
                            <td>{{$product ->name}}</td>
                            <td style="text-align: center">
                                {{$product->invent}}</td>
                            <td style="text-align: center">
                                {{$product->price}}</td>
                            <td style="text-align: center">
                                {{$product->detail}}</td>
                            <td style="text-align: center">
                                {{$product->photo}}</td>
                            <td style="text-align: center">
                                <a class="btn btn-sm btn-primary" href="{{ route('admin.posts.edit', $product->id) }}">編輯</a>
                                /
                                <form action="{{ route('admin.posts.destroy', $product->id) }}" method="POST" style="display: inline">
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
