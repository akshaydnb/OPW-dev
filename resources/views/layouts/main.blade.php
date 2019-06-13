<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Optical Wholesaler" />
        <meta name="keywords" content="Optical Wholesaler,Optical, Wholesaler" />
        <meta name="author" content="DNB MAnagement Applications" />
        <link rel="shortcut icon" href="{{  asset("img/favicon.ico") }}">
        <title>{{ config('app.name') }} | {{ $title or 'Back Office' }}</title>
        <!-- Bootstrap CSS -->
        @yield('custom-css')
        <link href="{{  asset("css/bootstrap.min.css") }}" rel="stylesheet" media="screen" />
        <!-- Main CSS -->
        <link href="{{  asset("css/main.css") }}" rel="stylesheet" id="themeSwitcher" />
        <!-- Icomoon Icons CSS -->
        <link href="{{  asset("fonts/icomoon/icomoon.css") }}" rel="stylesheet" />
        <link href="{{  asset("css/datatables/dataTables.bs.min.css") }}" rel="stylesheet" />
        <link href="{{  asset("css/datatables/autoFill.bs.min.css") }}" rel="stylesheet" />
        <link href="{{  asset("css/datatables/fixedHeader.bs.css") }}" rel="stylesheet" />
        <!-- Datepicker -->
        <link rel="stylesheet" href="{{  asset("css/datepicker.css") }}" />
        <link rel="stylesheet" href="{{  asset("css/jquery.ui.autocomplete.css") }}" />
        <!-- C3 CSS -->
        <link href="{{  asset("css/c3/c3.css") }}" rel="stylesheet" />
        <link href="{{  asset("fonts/font-awesome.css") }}" rel="stylesheet" />

        <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
                <script src="{{  asset("js/html5shiv.js") }}"></script>
                <script src="{{  asset("js/respond.min.js") }}"></script>
        <![endif]-->
        
        <style>
            .page-breadcrumb > li{
                display: inline-block;
            }
        </style>
    </head> 
    <body>

        <!-- Loading wrapper starts -->
        <div id="loading-wrapper">
            <div id="loader">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
                <div class="line4"></div>
                <div class="line5"></div>
                <div class="line6"></div>
            </div>
        </div>
        <!-- Loading wrapper ends -->

        <!-- Header starts -->
        <header class="clearfix">
            <!-- Logo starts -->
            <div class="logo">
                <img src="{{  asset("img/logo.png") }}" alt="Logo" />
            </div>
            <!-- Logo ends -->

            <!-- Header actions starts -->
            <div class="pull-right">
                <ul id="header-actions" class="clearfix">
                    <li class="list-box user-admin dropdown">
                        <div class="admin-details">
                            <div class="name">Anisha</div>
                            <div class="designation">System Admin</div>
                        </div>
                        <a id="drop4" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-account_circle"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-content">
                                <a href="#"><i class="icon-warning2"></i>Update Password<br><span>Your password will expire in 7 days.</span></a>
                                <a href="profile.html">Edit Profile</a>
                                <a href="forgot-pwd.html">Change Password</a>
                                <a href="profile.html">Settings</a>
                                <a href="login.html">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Header actions ends -->
        </header>
        <!-- Header ends -->

        <!-- Container fluid starts -->
        <div class="container-fluid">
            <!-- Dashboard wrapper starts -->
            <div class="dashboard-wrapper-full">

                <!-- Navbar starts -->
                @include('layouts.include.menu')
                <!-- Navbar ends -->

                <!-- Top bar starts -->
                <div class="top-bar clearfix">
                    <!-- Container fluid starts -->
                    <div class="container-fluid">
                        <!-- Row starts -->
                        <div class="row gutter">
                            <div class="col-md-8 col-sm-6 col-xs-12">
                                <h3 class="page-title sm-pull-left">{{ $title }}</h3>
<!--                                <ul class="page-breadcrumb">
                                    <li>
                                        <i class="fa fa-home"></i>
                                        <a href="{{url('/')}}">Dashboard</a>
                                    </li>
                                    @for($i = 1; $i <= count(Request::segments()); $i++) 
                                        <li>
                                            <i class="fa fa-angle-right"></i>
                                            @if($i < count(Request::segments()) & $i > 0)
                                                @if($i > 1)
                                                    <?php // $link .= "/" . Request::segment($i); ?>
                                                @else
                                                    <?php // $link = "javascript:void(0);"; ?>
                                                @endif
                                                <a href="<?php //echo $link ?>">{{Request::segment($i)}}</a>
                                                @if($i == 1)
                                                    <?php //$link = url('/'); $link .= "/" . Request::segment($i); ?>
                                                @endif
                                            @else 
                                                <i class="fa fa-angle-right"></i>
                                                {{Request::segment($i)}}
                                            @endif
                                        </li>
                                    @endfor
                                </ul>-->
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-12 sm-hide">
                                @yield('counter')
                            </div>
                            @if($add)
                            <div class="col-md-1 col-sm-2 col-xs-12">
                                <h3 class="pull-right sm-margin">
                                    <a class="btn btn-info text-white" style="vertical-align: middle;" href="{{ url()->current() }}/create"><span class="fa fa-plus fa-fw"></span> {{ $addTitle or 'Add New' }}</a>
                                </h3>
                            </div>
                            @endif
                        </div>
                        <!-- Row ends -->
                    </div>
                    <!-- Container fluid ends -->
                </div>
                <!-- Top bar ends -->
                
                <!-- Main container starts -->
                <div class="main-container">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <i class="icon-check_circle"></i><strong>Hooray!</strong> {{$message}}
                        </div>
                    @endif
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <i class="icon-cross2"></i>
                            <strong>Whoops!</strong> There were some problems with your input.
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li class="padding-5"><span class="fa fa-angle-double-right fa-sm"></span> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')
                </div>
                <!-- Main container ends -->

                <!-- Footer starts -->
                <footer class="footer">
                    Copyright {{ env('APP_NAME') }} <span>{{ date('Y') }}</span>.
                </footer>
                <!-- Footer ends -->

            </div>
            <!-- Dashboard wrapper ends -->

        </div>
        <!-- Container fluid ends -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="{{  asset("js/jquery.js") }}"></script>

        <!-- jQuery UI -->
        <script src="{{  asset("js/jquery-ui.min.js") }}"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{  asset("js/bootstrap.min.js") }}"></script>

        <!-- jquery ScrollUp JS -->
        <script src="{{  asset("js/scrollup.min.js") }}"></script>

        <!-- Theme Switcher -->
        <script src="{{  asset("js/themeSwitcher.js") }}"></script>
        <script src="{{  asset("js/datatables/dataTables.min.js") }}"></script>
        <script src="{{  asset("js/datatables/dataTables.bootstrap.min.js") }}"></script>
        <script src="{{  asset("js/datatables/dataTables.tableTools.js") }}"></script>
        <script src="{{  asset("js/datatables/autoFill.min.js") }}"></script>
        <script src="{{  asset("js/datatables/autoFill.bootstrap.min.js") }}"></script>
        <script src="{{  asset("js/datatables/fixedHeader.min.js") }}"></script>
        <script src="{{  asset("js/datatables/custom-datatables.js") }}"></script>
        
        <!--<script src="{{ asset("js/flot/custom/multi-bar-chart.js") }}"></script>-->
        
        <!-- D3 JS -->
        <script src="{{ asset("js/d3.min.js") }}"></script>
        
        <!-- C3 Graphs -->
        <script src="{{ asset("js/c3/c3.min.js") }}"></script>
        <script src="{{ asset("js/c3/custom-bar-one.js") }}"></script>
        
        <!-- Common JS -->
        <script src="{{  asset("js/common.js") }}"></script>
        
        <!-- Shortcut JS -->
        <script src="{{  asset("js/shortcut.js") }}"></script>
        
        <!-- Bootstrap Validation -->
        <script src="{{ asset("js/validations/validator.js") }}"></script>

        <script type="text/javascript">

            //Datepicker
            $(function () {
                $("#datepicker").datepicker({
                    dateFormat: 'dd/mm/yy'
                });
            });            
        </script>
        @yield('script')
    </body>
</html>