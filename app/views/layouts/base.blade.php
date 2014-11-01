<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Projectmanager9k | @yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="//code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="{{ url('/') }}" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Projectmanager9k
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            @extends('layouts.rightbar')
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            @extends('layouts.sidebar')

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Blank page
                        <small>it all starts here</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li><a href="#">Examples</a></li>
                        <li class="active">Blank page</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">

                    @yield('content')

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        @yield('footer-scripts')
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="{{ asset('js/AdminLTE/app.js') }}" type="text/javascript"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('js/demo.js') }}" type="text/javascript"></script>
    </body>
</html>
