@extends('layouts.master')

@section('title','搜尋商品')

<head>
    <style>
        /*字體樣式1*/
        .text{
            top:100px;
            left:850px;
            position:absolute;
            font-family:Helvetica,'新細明體',sans-serif;
            font-size:30px;
            line-height:25px;
            font-weight:bolder;
        }
        /*字體樣式2*/
        .text02{
            font-family:Helvetica,'新細明體',sans-serif;
            font-size:20px;
            line-height:25px;
            font-weight:bolder;
        }
        /*按鈕樣式*/
        .product{
            width:200px;
            height:50px;
            border:1px solid black;
            background-color:black;
            color:white;
            font-family:"微軟正黑體";
        }
        /*底部樣式*/
        html, body {
            height:100%;
        }
    </style>
</head>

@section('content')

    <div class="container">
        <div class="row">
            <p class="text">搜尋結果({{ $searchrecords }})</p>
        </div>
        <div class="row">
            <br><br><br><br><br><br><br>
            <form action="/search" role="search" method="GET">
                @method('GET')
                @csrf
                <div class="from-group has-feedback">
                    <input type="search" name="search" class="form-control" placeholder="搜尋產品">
                    <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
            </form>
            <p class="text02">
                共
                <font color="blue">{{ $searchrecords }}</font>
                件產品
            </p>
            <hr>
        </div>
        <div class="row">
            @foreach($searches as $search)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="{{ $search->photo }}">
                    <div class="caption" align="center">
                        <h3>{{ $search->name }} </h3>
                        <p>{{ $search->detail }}</p>
                        <form action="/search" role="search" method="GET">
                            @method('GET')
                            @csrf
                            <button type="submit" name="product" class="product">查看產品</button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
