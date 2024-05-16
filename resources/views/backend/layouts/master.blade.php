<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}/{{asset('/')}}/assets/images/favicon.png">
    <title>Construction</title>
    @include('backend.layouts.include.header-script')
</head>

<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>

<div id="main-wrapper">

    @include('backend.layouts.include.header')

    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <!-- User Profile-->
                    <li>
                        <!-- User Profile-->
                        <div class="user-profile dropdown m-t-20">
                            <div class="user-pic">
                                <img src="{{auth()->user()->getFirstMediaUrl("*") ?? asset('images/logo-icon.png')}}" alt="users" style="max-height: 52px"
                                     class="rounded-circle img-fluid"/>
                            </div>
                            <div class="user-content hide-menu m-t-10">
                                <h5 class="m-b-10 user-name font-medium">{{auth()->user()->full_name}}</h5>

                                <a href="javascript:void(0)" title="Logout" class="btn btn-circle btn-sm">
                                    <i class="ti-power-off"></i>
                                </a>
                            </div>
                        </div>
                        <!-- End User Profile-->
                    </li>
                    @if(user_type() == 1)
                    @include('backend.layouts.include.menu.superadmin')
                    @elseif(user_type() == 2)
                    @include('backend.layouts.include.menu.bidder-menu')
                    @elseif(user_type() == 3)
                        @include('backend.layouts.include.menu.owner-menu')
                    @endif
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">

        @yield('content')

    </div>
</div>
<div class="chat-windows"></div>
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
@include('backend.layouts.include.footer-script')
@yield('js')
</body>

</html>
