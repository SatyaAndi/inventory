<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="AI Admin Dashboards" />
    <meta name="keywords" content="User Profile, Admin, Dashboard, Bootstrap4, Sass, CSS3, HTML5, Responsive Dashboard, Responsive Admin Template, Admin Template, Best Admin Template, Bootstrap Template, Themeforest" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="canonical" href="https://www.bootstrap.gallery/">
    <meta property="og:url" content="https://www.bootstrap.gallery">
    <meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
    <meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
    <meta property="og:type" content="Website">
    <meta property="og:site_name" content="Bootstrap Gallery">
    <link rel="shortcut icon" href="{{asset('Olive - Bootstrap Admin Dashboard')}}/img/favicon.svg" />
    <title>Premium Admin Dashboards - User Profile</title>

    <!-- Common CSS -->
    <link rel="stylesheet" href="{{asset('Olive - Bootstrap Admin Dashboard')}}/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('Olive - Bootstrap Admin Dashboard')}}/fonts/icomoon/icomoon.css" />
    <link rel="stylesheet" href="{{asset('Olive - Bootstrap Admin Dashboard')}}/css/main.min.css" />

    <!-- Chartist CSS -->
    <link href="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/chartist/css/chartist.min.css" rel="stylesheet" />
    <link href="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/chartist/css/chartist-custom.css" rel="stylesheet" />

</head>

<body>

    <!-- BEGIN .app-wrap -->
    <div class="app-wrap">
        <!-- BEGIN .app-heading -->
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
                            <li>
                                <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                    <i class="icon-notifications_none"></i>
                                    <span class="count-label">7</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
                                    <ul class="imp-notify">
                                        <li>
                                            <div class="icon">W</div>
                                            <div class="details">
                                                <p><span>Wilson</span> The best Dashboard design I have seen ever.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon">J</div>
                                            <div class="details">
                                                <p><span>John Smith</span> Jhonny sent you a message. Read now!</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon secondary">R</div>
                                            <div class="details">
                                                <p><span>Justin Mezzell</span> Stella, Added you as a Friend. Accept it!</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" id="todos" data-toggle="dropdown" aria-haspopup="true">
                                    <i class="icon-person_outline"></i>
                                    <span class="count-label red">5</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="todos">
                                    <ul class="stats-widget">
                                        <li>
                                            <h4>$37895</h4>
                                            <p>Revenue <span>+2%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                                    <span class="sr-only">87% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>4,897</h4>
                                            <p>Downloads <span>+39%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                    <span class="sr-only">65% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>2,219</h4>
                                            <p>Uploads <span class="text-secondary">-7%</span></p>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="42" aria-valuemin="0" aria-valuemax="100" style="width: 42%">
                                                    <span class="sr-only">42% Complete (success)</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                    <img class="avatar" src="{{asset('Olive - Bootstrap Admin Dashboard')}}/img/user.png" alt="Admin Dashboards" />
                                    <span class="user-name">Irina Shayk Lewes</span>
                                    <i class="icon-chevron-small-down"></i>
                                </a>
                                <div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
                                    <ul class="user-settings-list">
                                        <li>
                                            <a href="profile.html">
                                                <div class="icon">
                                                    <i class="icon-account_circle"></i>
                                                </div>
                                                <p>Profile</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profile.html">
                                                <div class="icon red">
                                                    <i class="icon-cog3"></i>
                                                </div>
                                                <p>Settings</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="filters.html">
                                                <div class="icon yellow">
                                                    <i class="icon-schedule"></i>
                                                </div>
                                                <p>Activity</p>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="logout-btn">
                                        <a href="login.html" class="btn btn-primary">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <!-- END: .app-heading -->
        <!-- BEGIN .app-container -->
        <div class="app-container">
            <!-- BEGIN .app-side -->
            <aside class="app-side" id="app-side">
                <!-- BEGIN .side-content -->
                <div class="side-content ">
                    <!-- BEGIN .user-profile -->
                    <div class="user-profile">
                        <a href="index.html" class="logo">
                            <img src="{{asset('Olive - Bootstrap Admin Dashboard')}}/img/logo.svg" alt="Google Dashboards" />
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
                    <!-- END .user-profile -->
                    <!-- BEGIN .side-nav -->
                    <nav class="side-nav">
                        <!-- BEGIN: side-nav-content -->
                        <ul class="unifyMenu" id="unifyMenu">
                            <li>
                                <a href="#" class="has-arrow" aria-expanded="false">
                                    <span class="has-icon">
                                        <i class="icon-laptop_windows"></i>
                                    </span>
                                    <span class="nav-title">Dashboards</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href='index.html'>Dashboard</a>
                                    </li>
                                    <li>
                                        <a href='dashboard2.html'>CRM</a>
                                    </li>
                                    <li>
                                        <a href='dashboard3.html'>Analytics</a>
                                    </li>
                                    <li>
                                        <a href='dashboard4.html'>Ecommerce</a>
                                    </li>
                                    <li>
                                        <a href='quick-dashboard.html'>Quick Dashboard</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="widgets.html">
                                    <span class="has-icon">
                                        <i class="icon-flash-outline"></i>
                                    </span>
                                    <span class="nav-title">Graph Widgets</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables.html">
                                    <span class="has-icon">
                                        <i class="icon-border_outer"></i>
                                    </span>
                                    <span class="nav-title">Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="datatables.html">
                                    <span class="has-icon">
                                        <i class="icon-border_all"></i>
                                    </span>
                                    <span class="nav-title">Data Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="has-arrow" aria-expanded="false">
                                    <span class="has-icon">
                                        <i class="icon-lock_outline"></i>
                                    </span>
                                    <span class="nav-title">Authentication</span>
                                </a>
                                <ul aria-expanded="false">
                                    <li>
                                        <a href='login.html'>Login</a>
                                    </li>
                                    <li>
                                        <a href='signup.html'>Signup</a>
                                    </li>
                                    <li>
                                        <a href='forgot-pwd.html'>Forgot Password</a>
                                    </li>
                                    <li>
                                        <a href="locked-screen.html">Locked Screen</a>
                                    </li>
                                    <li>
                                        <a href='error404.html'>Error 404</a>
                                    </li>
                                    <li>
                                        <a href='error505.html'>Error 505</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END: side-nav-content -->
                    </nav>
                    <!-- END: .side-nav -->
                </div>
                <!-- END: .side-content -->
            </aside>
            <!-- END: .app-side -->

            <!-- BEGIN .app-main -->
            <div class="app-main">
                <!-- BEGIN .main-heading -->
                <header class="main-heading">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="page-icon">
                                    <i class="icon-tabs-outline"></i>
                                </div>
                                <div class="page-title">
                                    <h5>User Profile</h5>
                                    <h6 class="sub-heading">Welcome to Olive Admin Template</h6>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="right-actions">
                                    <a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="Download Reports">
                                        <i class="icon-download4"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <!-- END: .main-heading -->
                <!-- BEGIN .main-content -->
                <!-- END: .main-content -->
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Tambah Penerimaan Barang</div>

                            <div class="card-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <form method="POST" action="{{ route('penerimaan.store') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="tanggal_penyimpanan">Tanggal Penyimpanan</label>
                                        <input type="date" class="form-control" id="tanggal_penyimpanan" name="tanggal_penyimpanan" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="kuantity">Kuantity</label>
                                        <input type="number" class="form-control" id="kuantity" name="kuantity" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="kode_barang">Kode Barang</label>
                                        <select class="form-control" id="kode_barang" name="kode_barang" required>
                                            <option value="">Pilih Kode Barang</option>
                                            @foreach ($barangs as $barang)
                                            <option value="{{ $barang->kode_barang }}">{{ $barang->kode_barang }} - {{ $barang->nama_barang }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Tambah Penerimaan Barang</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- END: .app-main -->
        </div>
        <!-- END: .app-container -->
        <!-- BEGIN .main-footer -->
        <footer class="main-footer fixed-btm">
            © Bootstrap Gallery 2023
        </footer>
        <!-- END: .main-footer -->
    </div>
    <!-- END: .app-wrap -->

    <!-- jQuery first, then Tether, then other JS. -->
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/js/jquery.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/js/tether.min.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/unifyMenu/unifyMenu.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/onoffcanvas/onoffcanvas.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/js/moment.js"></script>

    <!-- Chartist JS -->
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/chartist/js/chartist.min.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/chartist/js/chartist-tooltip.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/chartist/js/custom/custom-area-chart3.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/chartist/js/custom/custom-bar-horizontal.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/chartist/js/custom/custom-line-chart4.js"></script>

    <!-- JVector Maps -->
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/jvectormap/gdp-data.js"></script>
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/jvectormap/africa-mill.js"></script>

    <!-- Custom JVector Maps -->
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/vendor/jvectormap/custom/map-africa1.js"></script>

    <!-- Common JS -->
    <script src="{{asset('Olive - Bootstrap Admin Dashboard')}}/js/common.js"></script>
</body>

</html>
