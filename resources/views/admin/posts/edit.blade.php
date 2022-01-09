@extends('admin.layouts.master')

@section('title', '編輯商品')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                編輯商品 <small>編輯商品內容</small>
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
            <form action="/admin/products/{{$products->id}}" method="POST" role="form">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}

                <div class="form-group">
                    <label>商品名稱：</label>
                    <input name="name" class="form-control" placeholder="請輸入商品名稱" value="{{$products->name}}">
                </div>
                <div class="form-group">
                    <label>商品數量：</label>
                    <input name="invent" class="form-control" placeholder="請輸入商品數量" value="{{$products->invent}}">
                </div>
                <div class="form-group">
                    <label>商品價格：</label>
                    <input name="price" class="form-control" placeholder="請輸入商品價格" value="{{$products->price}}">
                </div>
                <div class="form-group">
                    <label>商品內容：</label>
                    <input name="detail" class="form-control" placeholder="請輸入商品內容" value="{{$products->detail}}">
                </div>
                <div class="form-group">
                    <label>圖片：</label>
                    <input name="photo" class="form-control" value="{{$products->photo}}">
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
