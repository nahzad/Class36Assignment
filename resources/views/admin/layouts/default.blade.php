<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/minified/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/minified/core.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/minified/components.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/css/minified/colors.min.css') }}" rel="stylesheet" type="text/css">

    <!-- /global stylesheets -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">


</head>

<body>

    <!-- Main navbar -->
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ url('/') }}"><img
                    src="{{ asset('admin/assets/images/logo_light.png') }}" alt=""></a>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            <ul class="nav navbar-nav">
                <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ asset('admin/assets/images/placeholder.jpg') }}" alt="">
                        <span>Victoria</span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                        <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                        <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i
                                    class="icon-comment-discussion"></i> Messages</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
                        <li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img
                                        src="{{ asset('admin/assets/images/placeholder.jpg') }}"
                                        class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">Victoria Baker</span>
                                    <div class="text-size-mini text-muted">
                                        <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                    </div>
                                </div>

                                <div class="media-right media-middle">
                                    <ul class="icons-list">
                                        <li>
                                            <a href="#"><i class="icon-cog3"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->
                                <!-- <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li> -->
                                <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}"><i
                                            class="icon-home4"></i> <span>Dashboard</span></a></li>
                                <li class="{{ request()->is('users') ? 'active' : '' }}"><a
                                        href="{{ url('users') }}"><i class="icon-users4"></i> <span>Users</span></a>
                                </li>
                                <li class="{{ request()->is('users/create') ? 'active' : '' }}"><a
                                        href="{{ url('users/create') }}"><i class="icon-user-plus"></i> <span>Create
                                            User</span></a></li>
                                <li class="{{ request()->is('blogs*') ? 'active' : '' }}"><a href="{{ route('blogs.index') }}"><i
                                            class="icon-typewriter"></i> <span>Blogs</span></a></li>
                                <li class="{{ request()->routeIs('blogCategory.*') ? 'active' : '' }}"><a
                                        href="{{ route('blogCategory.index') }}"><i class="icon-stack-down"></i>
                                        <span>Blog Category</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->

            <!-- Main Content -->

            @yield('content')


            <!-- End of Main Content -->


            <!-- Footer -->
            <div class="footer text-muted">
                &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a
                    href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </div>
            <!-- /footer -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

    </div>
    <!-- /page content -->

    </div>
    <!-- /page container -->


    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Core JS files -->
    <script type="text/javascript" src="{{ asset('admin/assets/js/plugins/loaders/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/core/libraries/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/core/libraries/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/plugins/loaders/blockui.min.js') }}"></script>
    <!-- /core JS files -->



    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('admin/assets/js/plugins/tables/datatables/datatables.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/pages/datatables_basic.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/plugins/forms/styling/uniform.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/core/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/pages/form_inputs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/assets/js/pages/dashboard.js') }}"></script>
    {!! Toastr::message() !!}
    <!-- /theme JS files -->




</body>

</html>
