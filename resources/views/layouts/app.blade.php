<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="AI Admin Dashboards" />
    <meta name="keywords" content="User Profile, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{ asset('Olive - Bootstrap Admin Dashboard') }}/img/favicon.svg" />
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{ asset('Olive - Bootstrap Admin Dashboard') }}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('Olive - Bootstrap Admin Dashboard') }}/fonts/icomoon/icomoon.css" />
    <link rel="stylesheet" href="{{ asset('Olive - Bootstrap Admin Dashboard') }}/css/main.min.css" />

    <!-- Chartist CSS -->
    <link href="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/chartist/css/chartist.min.css" rel="stylesheet" />
    <link href="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/chartist/css/chartist-custom.css" rel="stylesheet" />
</head>
<body>
    <div class="app-wrap">
        <header class="app-header">
            <div class="container-fluid">
                <div class="row gutters">
                    <div class="col-sm-7 col-8">
                        <a class="mini-nav-btn" href="#" id="app-side-mini-toggler">
                            <i class="icon-arrow_back"></i>
                        </a>
                        <a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler" aria-expanded="true">
                            <i class="icon-chevron-thin-left"></i>
                        </a>
                        <div class="custom-search hidden-sm hidden-xs">
                            <i class="icon-magnifying-glass"></i>
                            <input type="text" class="search-query" placeholder="Search ...">
                        </div>
                    </div>
                    <div class="col-sm-5 col-4">
                        <ul class="header-actions">
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf


                                <li>
                                    
                                        <div class="logout-btn">
                                            <a href="login.html" class="btn btn-primary">Logout</a>
                                        </div>

                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="app-container">
            <aside class="app-side" id="app-side">
                <div class="side-content">
                    <div class="user-profile">
                        <a href="index.html" class="logo">
                            <img src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/img/logo.svg" alt="Google Dashboards" />
                        </a>
                        <h6 class="location-name">San Francisco</h6>
                        <ul class="profile-actions">
                            <li>
                                <a href="#">
                                    <i class="icon-social-skype"></i>
                                    <span class="count-label yellow"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="count-label green"></span>
                                    <i class="icon-drafts"></i>
                                </a>
                            </li>
                            <li>
                                <a href="login.html">
                                    <i class="icon-export"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <nav class="side-nav">
                        <ul class="unifyMenu" id="unifyMenu">
                            <li>
                                <a href="{{ route('barang.index') }}">
                                    <span class="has-icon">
                                        <i class="icon-flash-outline"></i>
                                    </span>
                                    <span class="nav-title">Barang</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('orderbarang.index') }}">
                                    <span class="has-icon">
                                        <i class="icon-border_outer"></i>
                                    </span>
                                    <span class="nav-title">Order Barang</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('orderdetail.index') }}">
                                    <span class="has-icon">
                                        <i class="icon-border_all"></i>
                                    </span>
                                    <span class="nav-title">Order detail</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('supplier.index') }}">
                                    <span class="has-icon">
                                        <i class="icon-border_all"></i>
                                    </span>
                                    <span class="nav-title">Supplier</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('penerimaan.index') }}">
                                    <span class="has-icon">
                                        <i class="icon-border_all"></i>
                                    </span>
                                    <span class="nav-title">Penerimaan Barang</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('pengeluaran.index') }}">
                                    <span class="has-icon">
                                        <i class="icon-border_all"></i>
                                    </span>
                                    <span class="nav-title">pengeluaran</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>

            <div class="app-main" id="main">
                <div class="container-fluid">
                    <div class="row gutters">
                        <div class="col-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <footer class="main-footer">© Olive Admin by Bootstrap Gallery</footer>

    </div>

    <!-- Common Scripts -->
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/js/jquery.min.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/js/moment.js"></script>

    <!-- Vendors -->
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/slimscroll/slimscroll.min.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/slimscroll/custom-scrollbar.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/chartist/js/chartist.min.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/chartist/js/chartist-tooltip.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/chartist/js/custom/custom-line-chart.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/chartist/js/custom/custom-line-chart1.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/chartist/js/custom/custom-area-chart.js"></script>
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/vendor/chartist/js/custom/custom-area-chart1.js"></script>

    <!-- Main Script -->
    <script src="{{ asset('Olive - Bootstrap Admin Dashboard') }}/js/main.min.js"></script>
</body>
</html>
