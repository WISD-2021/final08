@extends('layouts.master')

@section('title','購物車')

<head>
    <style>
        /*字體樣式*/
        .text{
            top:90px;
            left:90px;
            position:absolute;
            font-family:Helvetica,'新細明體',sans-serif;
            font-size:12px;
            line-height:25px;
        }
        /*個別字體樣式1*/
        .text01{
            font-weight:bolder;
            font-size:24px;
        }
        /*個別字體樣式2*/
        .text02{
            font-size:16px;
            line-height:4px;
        }
        /*表格樣式*/
        .td{
            font-weight:bolder;
            font-size:16px;
            text-align:center;
        }
        /*刪除按鈕樣式*/
        .delete{
            border:none;
            background-color:white;
        }
        /*個別字體樣式3*/
        .text03{
            font-weight:bolder;
            font-size:18px;
            line-height:5px;
        }
        /*個別字體樣式4*/
        .text04{
            font-weight:bolder;
            font-size:14px;
            line-height:5px;
        }
        /*購買按鈕樣式*/
        .buy{
            width:200px;
            height:50px;
            border:1px solid black;
            background-color:black;
            color:white;
            font-family:"微軟正黑體";
        }
        /*尚未購買商品時的樣式*/
        .nobuy{
            top:150px;
            left:400px;
            position:absolute;
            font-weight:bolder;
            font-size:30px;
            text-align:center;
        }
        /*修改數量框樣式*/
        .qty{
            width:50px;
        }
        /*修改數量按鈕樣式*/
        .modify{
            width:40px;
            font-size:6px;
            border:1px solid black;
            background-color:black;
            color:white;
            font-family:"微軟正黑體";
        }
    </style>
</head>

@section('content')

    @if(count($items) > 0)
    <div class="container">
        <div class="text">
            <a href="javascript:history.back()" class="glyphicon glyphicon-chevron-left">繼續購物</a><br>
            <p class="text01">您的購物車</p><br>
            <p class="text02">$userid，歡迎來到購物車系統!</p><br>
            <div class="container table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <th class="text-center">商品資訊</th>
                    <th class="text-center">單價</th>
                    <th class="text-center">數量</th>
                    <th class="text-center">小計</th>
                    <th class="text-center">刪除</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="td">
                            <font>$product</font>
                            <input type="text" name="ps5" class="qty">
                            <input type="submit" name="ps5-modify" class="modify" value="修改">
                        </td>
                        <td class="td">
                            <font>$product</font>
                            <input type="text" name="xbox" class="qty">
                            <input type="submit" name="xbox-modify" class="modify" value="修改">
                        </td>
                        <td class="td">
                            <font>$product</font>
                            <input type="text" name="switch" class="qty">
                            <input type="submit" name="switch-modify" class="modify" value="修改">
                        </td>
                        <td class="td">$product</td>
                        <td class="td">$total</td>
                        <td class="text-center">
                            <button type="submit" name="$id" class="delete">
                                <span class="glyphicon glyphicon-remove"></span>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <hr>
            <p class="text03">訂單摘要</p><br>
            <hr>
            <p class="text04">商品總計</p>
            <p>$$sum</p><br>
            <button type="submit" name="buy01" class="buy">
                <span class="glyphicon glyphicon-shopping-cart"></span> 購買
            </button>
        </div>
    </div>
    @else
    <div class="container">
        <div class="text">
            <a href="javascript:history.back()" class="glyphicon glyphicon-chevron-left">繼續購物</a><br>
        </div>
        <div class="nobuy">
            <img src="{{ asset('img/cart_item_icon.png') }}">
            <p>您的購物車目前沒有任何商品，快來挑選一些商品吧！</p><br>
            <button type="submit" name="buy02" class="buy">回到首頁</button>
        </div>
    </div>
    @endif
@endsection
