<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/simple-line-icons/simple-line-icons.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet"
        type="text/css" />

    <link href="{{ asset('/') }}admin_assets/global/css/components.min.css" rel="stylesheet" id="style_components"
        type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />

    <link href="{{ asset('/') }}admin_assets/pages/css/login.min.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="{{ asset('/') }}favicon.ico" />
</head>

<body class=" login">
    <div class="logo">
        <a href="{{ route('admin.login') }}">
            {{-- <img src="{{ asset('/') }}sitesetting_images/thumb/{{ $siteSetting->site_logo }}" alt="" /> </a> --}}
            <img src="{{ asset('/sitesetting_images/thumb/jobs-portal-1584915748-762.png') }}" alt="" /> </a>
    </div>

    @yield('content')
    <div class="copyright"> {{ date('Y') }} © {{ $siteSetting->site_name }}. Admin Panel. </div>
    <script src="{{ asset('/') }}admin_assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/jquery-validation/js/jquery.validate.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/jquery-validation/js/additional-methods.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('/') }}admin_assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/pages/scripts/login.js" type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/pages/scripts/reset_password.js" type="text/javascript"></script>

</body>

</html>
