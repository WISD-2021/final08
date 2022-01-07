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
            <p class="text">搜尋結果($num)</p>
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
                <font color="blue">$num</font>
                件產品
            </p>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="ps5-02.jpg">
                    <div class="caption" align="center">
                        <h3>PlayStation®5 主機</h3>
                        <p>釋放您從未預見的全新遊戲可能</p>
                        <button type="submit" name="ps5" class="product">
                            查看產品
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="xbox-02.png">
                    <div class="caption" align="center">
                        <h3>Xbox Series X 主機</h3>
                        <p>有史以來最快、最強大的XBOX</p>
                        <button type="submit" name="xbox" class="product" >
                            查看產品
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="switch-02.jpg">
                    <div class="caption" align="center">
                        <h3>Nintendo Switch 主機</h3>
                        <p>一台可配合不同場合而改變形態的遊戲機，隨時隨地自由享樂</p>
                        <button type="submit" name="switch" class="product" >
                            查看產品
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="3ds.jpg">
                    <div class="caption" align="center">
                        <h3>Nintendo 3DS 主機</h3>
                        <p>已停產</p>
                        <button type="button" class="product">
                            缺貨中...
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="psv.jpg">
                    <div class="caption" align="center">
                        <h3>PSVita 主機</h3>
                        <p>已停產</p>
                        <button type="button" class="product">
                            缺貨中...
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
