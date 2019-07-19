<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <title>pannel</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href=" {{ asset(env('ASSET_URL') . 'theme/css/date.css') }}"/>
    <!-- CSS Files -->
    <link href="http://ruknalfalahllc.com/library/material-dashboard.min.css" rel="stylesheet"/>
    <link href=" {{ asset(env('ASSET_URL') . 'theme/css/datatables.css') }}" rel="stylesheet"/>
    <link href="{{ asset(env('ASSET_URL') . 'theme/css/choosen.css') }}" rel="stylesheet"/>
    @yield('style')
    <link href="http://ruknalfalahllc.com/library/style.css" rel="stylesheet"/>
    <link href="http://ruknalfalahllc.com/library/responsive.css" rel="stylesheet"/>
</head>
<body>

<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="img/sidebar-1.jpg">
        <div class="logo">
            <a href="dashboard.html" class="simple-text logo-normal">
                Quiz Patente
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="@yield('dashboard_nav')">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="material-icons">dashboard</i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="@yield('create_school_nav')">
                    <a class="nav-link" href="{{ route('school_account.create') }}">
                        <i class="material-icons">person</i>
                        <p>Create school</p>
                    </a>
                </li>
                <li class="@yield('school_accounts_nav')">
                    <a class="nav-link" href="{{ route('school_account.index') }}">
                        <i class="material-icons">content_paste</i>
                        <p>School Accounts</p>
                    </a>
                </li>
                <li class="@yield('features_nav')">
                    <a class="nav-link" href="{{route('feature.index')}}">
                        <i class="material-icons">notifications</i>
                        <p>Features</p>
                    </a>
                </li>
                <li class="@yield('packages_nav')">
                    <a class="nav-link" href="{{route('package.index')}}">
                        <i class="material-icons">bubble_chart</i>
                        <p>packages</p>
                    </a>
                </li>
                <li class="@yield('licenses_nav')">
                    <a class="nav-link" href="{{route('license.create')}}">
                        <i class="material-icons">language</i>
                        <p>licenses</p>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand">Quiz Patente</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    Stats
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">5</span>
                                <p class="d-lg-none d-md-block">
                                    Some Actions
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                <a class="dropdown-item" href="#">Another Notification</a>
                                <a class="dropdown-item" href="#">Another One</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <p class="d-lg-none d-md-block">
                                    Account
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Log out</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
       @yield('content')

    </div>
</div>

<script src="http://ruknalfalahllc.com/library/jquery.js"></script>
<script src="{{ asset(env('ASSET_URL') . 'theme/js/popper.js') }}"></script>
<script src="{{ asset(env('ASSET_URL') . 'theme/js/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="http://ruknalfalahllc.com/library/material-dashboard.min.js"></script>
<script src="http://ruknalfalahllc.com/library/chartist.min.js"></script>
<script src="{{ asset(env('ASSET_URL') . 'theme/js/chosen.js') }}"></script>
<script src="{{ asset(env('ASSET_URL') . 'theme/js/jquery.geocomplete.js') }}"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6Nx3vdwR3PI7ROpGTKYn4Y4dRT9mFV1U"></script>
<script src="http://ruknalfalahllc.com/library/datatables.js"></script>
<script src="http://ruknalfalahllc.com/library/material-design.js"></script>
<script src="http://ruknalfalahllc.com/library/date2.js"></script>
<script src='http://ruknalfalahllc.com/library/custom.js'></script>
@yield('script')
</body>
</html>