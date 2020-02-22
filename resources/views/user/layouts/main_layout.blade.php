
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>@yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('library/CoolAdmin-master/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="{{ asset('library/CoolAdmin-master/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="{{ asset('library/CoolAdmin-master/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('library/CoolAdmin-master/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="{{ asset('library/CoolAdmin-master/css/theme.css') }}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{ asset('css/user/top.css') }}">
    @yield('css')
</head>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <h1>MSP</h1>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{ route('user.top') }}">
                                <i class="fas fa-tachometer-alt" ></i>Dashboard</a>
                        </li>
                        <li id="search" class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>アイテム検索</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li id="a8">
                                    <a href="{{ route('user.a8') }}">A8</a>
                                </li>
                                <li id="rakuten">
                                    <a href="{{ route('user.rakuten') }}">楽天</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-heart"></i>アイテム管理</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ route('user.item_list') }}">アイテム一覧</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.item_register') }}">アイテム追加</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('user.sales_aggregate') }}">
                                <i class="fas fa-book" ></i>セールス集計</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-rub"></i>ポイント</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="{{ route('user.points_aggregate') }}">集計</a>
                                </li>
                                <li>
                                    <a href="{{ route('user.points_monthly_aggregation',['date' => 1]) }}">月別集計</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->
        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <div class="row">
                    <div class="col-md-4 offset-md-8">
                        <h1>MSP</h1>
                    </div>
                </div>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li id="dashboard">
                            <a href="{{ route('user.top') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="has-sub" id="search">
                            <a class="js-arrow" href="#">
                                <i class="fas  fa-search"></i>アイテム検索</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li id="a8">
                                    <a href="{{ route('user.a8') }}">A8</a>
                                </li>
                                <li id="rakuten">
                                    <a href="{{ route('user.rakuten') }}">楽天</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub" id="item">
                            <a class="js-arrow" href="#">
                                <i class="fas  fa-heart"></i>アイテム管理</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li id="list">
                                    <a href="{{ route('user.item_list') }}">アイテム一覧</a>
                                </li>
                                <li id="register">
                                    <a href="{{ route('user.item_register') }}">アイテム追加</a>
                                </li>
                            </ul>
                        </li>
                        <li id="sales">
                            <a href="{{ route('user.sales_aggregate') }}">
                                <i class="fas fa-book"></i>セールス集計</a>
                        </li>
                        <li id="points">
                            <a href="{{ route('user.points_aggregate') }}">
                                <i class="fas fa-rub"></i>ポイント</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="検索" />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('library/CoolAdmin-master/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('library/CoolAdmin-master/images/icon/avatar-01.jpg') }}" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="{{ route('user.acount_edit') }}">
                                                        <i class="zmdi zmdi-settings"></i>アカウント編集</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="{{ route('user.logout') }}">
                                                    <i class="zmdi zmdi-power"></i>ログアウト</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                @yield('contents')
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>
    </div>
    @yield('js')
</body>
</html>
<!-- end document-->
