@extends('layouts.master')

@section('title','首頁')

<head>
    <meta charset="UTF-8">
    <!--以IE瀏覽器相容模式來顯示，預設為微軟最新的edge瀏覽器模式來顯示網頁-->
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <!--網頁寬度設定為行動裝置的螢幕寬度且縮放比例為1:1-->
    <meta name="viewport" content="width-device-width, initial-scale-1">
    <title>首頁</title>
    <!--Bootstrap 核心 CSS 檔案-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!--Bootstrap 佈景主題 CSS 檔案-->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <!--jquery 的核心檔案-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!--Bootstrap 核心 js 檔案-->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /*顯示卡圖片樣式*/
        .img01{
            top:620px;
            left:200px;
            position:absolute;
        }
        /*記憶體圖片樣式*/
        .img02{
            top:620px;
            left:600px;
            position:absolute;
        }
        /*CPU圖片樣式*/
        .img03{
            top:620px;
            left:1000px;
            position:absolute;
        }
        /*文字名稱樣式*/
        .text01{
            font-family:Helvetica;
            font-size:18px;
            font-weight:bolder;
            text-align:center;
        }
        /*底部樣式*/
        html, body {
            height:100%;
        }
        .wrap {
            min-height:100%;
            *display:table; /* For IE7 Hack */
            *height:100%; /* For IE7 Hack */
        }
        .main {
            overflow:auto;
            padding-bottom:180px;
        } /* must be same height as the footer */
    </style>
</head>

@section('content')

    <!--div[class="carousel slide" id="myCarousel"]-->
    <div class="carousel slide" id="myCarousel">
        <!--輪播提示-->
        <!--ol[class="carousel-indicators"]>li[data-target="#myCarousel" data-slide-to=""]*3-->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!--輪播內容-->
        <!--
        div[class="carousel-inner"]>
        (div[class="item"]>img[src="pic/photo.jpg"]+div[class="carousel-caption"]>h1)*3
        -->
        <div class="carousel-inner ">
            <div class="item active">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/home/graphics-card.jpg') }}" alt=""  class="img-responsive center-block" >
                </a>
                <div class="carousel-caption">
                    <h1>GRAPHICS CARD</h1>
                </div>
            </div>
            <div class="item">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/home/memory.jpg') }}" alt=""  class="img-responsive center-block">
                </a>
                <div class="carousel-caption">
                    <h1>MEMORY</h1>
                </div>
            </div>
            <div class="item">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/home/CPU.jpg') }}" alt=""  class="img-responsive center-block">
                </a>
                <div class="carousel-caption">
                    <h1>CPU</h1>
                </div>
            </div>
        </div>
        <!--輪播控制-->
        <!--
        (a[class="carousel-control" href="#myCarousel" data-slide=""]>
        span[class="glyphicon glyphicon-chevron-"])*2
        -->
        <a href="#myCarousel" class="carousel-control left" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#myCarousel" class="carousel-control right" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
    <!--主機圖片和名稱-->
    <td class="warp">
        <div class="img01">
            <p class="text01">顯示卡</p>
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/home/graphics-card.jpg') }}" width="300px" height="300px">
            </a>
        </div>
        <div class="img02">
            <p class="text01">記憶體</p>
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/home/memory.jpg') }}" width="300px" height="300px">
            </a>
        </div>
        <div class="img03">
            <p class="text01">CPU</p>
            <a href="{{ url('/') }}">
                <img src="{{ asset('img/home/CPU.jpg') }}" width="300px" height="300px">
            </a>
        </div>
    </td>
    <div class="wrap">
    </div>
@endsection
