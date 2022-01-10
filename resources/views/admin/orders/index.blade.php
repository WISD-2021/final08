@extends('admin.layouts.master')

@section('title','訂單管理')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                訂單管理 <small>所有訂單</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-edit"></i> 訂單管理
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
                        <th width="150" style="text-align: center">訂單編號</th>
                        <th width="200" style="text-align: center">使用者編號</th>
                        <th width="300" style="text-align: center">產品編號</th>
                        <th width="300" style="text-align: center">狀態</th>
                        <th width="200" style="text-align: center">管理</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                            <tr>
                                <td style="text-align: center">
                                    {{$order ->id}}</td>
                                <td style="text-align: center">
                                    {{$order ->user_id}}</td>
                                <td style="text-align: center">
                                    {{$order->product_id}}</td>
                                <td style="text-align: center">
                                    {{$order ->status}}</td>
                                <td style="text-align: center">
                                    <a class="btn btn-sm btn-primary" href="{{ route('admin.orders.index', $order ->id) }}">處理訂單</a>
                                    /
                                    <form action="{{ route('admin.orders.destroy', $order->id) }}" method="POST" style="display: inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-sm btn-danger" type="submit">刪除訂單</button>
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
