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
        /*個別字體樣式2*/
        .text02{
            color:red;
        }
        /*個別字體樣式3*/
        .text03{
            color:red;
            font-weight:bolder;
        }
        /*個別字體樣式4*/
        .text04{
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

    @foreach($individual_product as $product)
    <div class="img01">
        <img src=" asset('img/products/GTX-1650.jpg')" width="300px" height="300px">
    </div>
    <div class="text">
        <p class="text01">PlayStation®5 主機</p>
        <p>&ensp;</p><br>
        <p class="text02">•2020/12/18 中午 12:00 起開放限量預購，本次預購將不開放 ATM 付款
            、行動支付、貨到付款，只開放【線上刷卡】，敬請見諒。<p><br>
        <p class="text03">•每一帳號限購一台，若超過一台將直接刪除訂單，恕不另行通知。<p><br>
        <p class="text04">•預計到貨日：2021/3/8<p><br>
        <p>•利用客製化 CPU、GPU 和具備整合式 I/O 之 SSD 的強大效能，
            改寫 PlayStation® 主機的功能極限。<p><br>
        <p>•Tempest 3D 音效技術能透過耳機或電視喇叭，為支援遊戲的環境注入全新生命。<p><br>
        <p>•PS5™ 的 DualSense™ 無線控制器提供身歷其境的觸覺回饋<p><br>
        <p>•遊戲機產品保固採線上登記。請詳閱產品外盒說明或參考 <a href="https://www.playstation.com/zh-hant-tw/support/">PlayStation®亞洲</a> 台灣頁<p><br>
        <p>•建議搭配 <a href="https://store.sony.com.tw/product/KM-55X9000H">Sony BRAVIA X9000H</a>系列 以帶來最佳遊戲體驗！<p><br>
        <p>售價:$16,000元</p><br>
        <hr>
        <button type="submit" name="buy" class="buy">
            <span class="glyphicon glyphicon-shopping-cart"></span> 購買
        </button>
    </div>
    @endforeach

@endsection
