@extends('layouts.master')

@section('title','商品頁面')

<head>
    <style>
        /*商品圖片樣式*/
        .img01{
            top:100px;
            left:200px;
            position:absolute;
            border:1px solid black;
        }
        /*字體樣式*/
        .text{
            top:130px;
            left:550px;
            position:absolute;
            font-family:Helvetica,'新細明體',sans-serif;
            font-size:12px;
            line-height:4px;
        }
        /*個別字體樣式1*/
        .text01{
            font-size:18px;
            font-weight:bolder;
        }
        /*按鈕樣式*/
        .buy{
            width:200px;
            height:50px;
            border:1px solid blue;
            background-color:blue;
            color:white;
            font-family:"微軟正黑體";
        }
    </style>
</head>

@section('content')

    <div class="img01">
        <img src="{{ asset("../".$individual_product->photo) }}" width="300px" height="300px">
    </div>
    <div class="text">
        <p class="text01">{{ $individual_product->name }}</p>
        <p>&ensp;</p><br>
        <p>{{ $individual_product->detail }}<p><br>
        <hr>
        <button type="submit" name="buy" class="buy">
            <span class="glyphicon glyphicon-shopping-cart"></span> 購買
        </button>
    </div>


@endsection
