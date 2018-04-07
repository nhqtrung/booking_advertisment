<!DOCTYPE HTML>
<html>

<head>
    <title>Booking Advertisment Li1TV</title>
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript">
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

    function hideURLbar() { window.scrollTo(0, 1); }
    </script>

    <!-- Bootstrap Core CSS -->
    <link href="admin_asset/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="admin_asset/css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="admin_asset/css/morris.css" type="text/css" />
    <!-- Graph CSS -->
    <link href="admin_asset/css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="admin_asset/js/jquery-2.1.4.min.js"></script>
    <!-- //jQuery -->
    <link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- lined-icons -->
    <link rel="stylesheet" href="admin_asset/css/icon-font.min.css" type='text/css' />
    <!-- //lined-icons -->
    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="admin_asset/css/table-style.css" />
    <link rel="stylesheet" type="text/css" href="admin_asset/css/basictable.css" />
    <script type="text/javascript" src="admin_asset/js/jquery.basictable.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('#table').basictable();
        });
    </script>
    <!-- //tables -->
</head>

<body>
    <div class="page-container">
        <!--/content-inner-->
        <div class="left-content">
            <div class="mother-grid-inner">
                <!--header start here-->

				@include('Admin.Include.header-main')

                @include('Admin.Include.breadcrumb')

				@yield('admin-content')

				@include('Admin.Include.footer-main')
				
            </div>
        </div>

		@include('Admin.Include.sidebar-menu')

        <div class="clearfix"></div>
    </div>
    
    @include('Admin.Include.script')

</body>
</html>