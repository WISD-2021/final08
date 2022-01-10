<nav class="navbar navbar-inverse navbar-fixed-top">   <!--navbar-fixed-top:將導覽列固定在最上面-->
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="{{  route('login.index') }}" class="navbar-brand">
                <img src="{{ asset('img/brand.png') }}" width="30px" alt="">
            </a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">導覽按鈕</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapes">
            <ul class="nav navbar-nav navbar-right">   <!--navbar-right:導覽列置右-->
                <li class="active">
                    <a href="{{ route('login.index') }}">首頁</a>
                </li>
                <li>
                    <form action="{{ route('products.search') }}" role="search" method="GET">
                        @method('GET')
                        @csrf
                        <div class="search">
                            <div class="from-group has-feedback">
                                <input type="search" name="search" class="form-control" placeholder="搜尋產品">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </div>
                    </form>
                </li>
                @if (Auth::guest())
                    <li>
                        <a href="{{ route('login') }}" class="glyphicon glyphicon-log-in">登入</a>
                    </li>
                    <li>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="glyphicon glyphicon-registration-mark">註冊</a>
                        @endif
                    </li>
                @else
                    <li>
                        <a href="{{ route('cart_items.index') }}" class="glyphicon glyphicon-shopping-cart">購物車</a>
                    </li>
                    <li>
                        <a href="{{ route('users.user_information') }}" class="glyphicon glyphicon-user">個人資料</a>
                    </li>
                    <li>
                        <a href="{{ route('login.logout') }}" class="glyphicon glyphicon-log-out">登出</a>
                    </li>
                    <p class="navbar-text">歡迎，使用者{{ Auth::user()->name }}</p>
                @endif
            </ul>
        </div>
    </div>
</nav>
