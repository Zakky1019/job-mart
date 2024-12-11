<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title> Admin Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
     
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />

        <link href="{{ asset('/') }}admin_assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />


        <link href="{{ asset('/') }}admin_assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/layouts/layout/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('/') }}admin_assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('jquery.filer/css/jquery.filer.css')}}" type="text/css" rel="stylesheet" />
        <link href="{{asset('jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css')}}" type="text/css" rel="stylesheet" />


        <link type="text/css" rel="stylesheet" media="all" href="{{ asset('/') }}admin_assets/custom.css" />
        <link rel="shortcut icon" href="{{ asset('/') }}favicon.ico" />
        @stack('css')
        <script>

        var APP_URL = "{!!url('/')!!}"
 </script>
    </head>

 

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-header navbar navbar-fixed-top"> 
          <div class="page-header-inner "> 

                <div class="page-logo"> <a href="{{ route('admin.home') }}"> <img src="{{ asset('/') }}sitesetting_images/thumb/{{ $siteSetting->site_logo }}" alt="logo" style="max-width:170px; max-height:40px;" /> <!-- class="logo-default" --></a>
                    <div class="menu-toggler sidebar-toggler"> </div>
                </div>

                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>  

                @include('admin.shared.top_menu') 
            </div>
        </div>

        <div class="clearfix"> </div>
        <div class="page-container"> 

            <div class="page-sidebar-wrapper"> @include('admin.shared.sidebar') </div>

            @yield('content') 

        </div>

        <div class="page-footer">
            <div class="page-footer-inner"> {{ date('Y')}} © {{ $siteSetting->site_name }}. Admin Panel. </div>
            <div class="scroll-to-top"> <i class="icon-arrow-up"></i> </div>
        </div>

        
      

        <script src="{{ asset('/') }}admin_assets/global/plugins/jquery.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/pages/scripts/ui-modals.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/js.cookie.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script> 

       

        <script src="{{ asset('/') }}admin_assets/global/scripts/app.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/layouts/layout/scripts/demo.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script> 

        <script src="{{ asset('/') }}admin_assets/global/scripts/datatable.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/clockface/js/clockface.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script> 
        <script src="{{asset('jquery.filer/js/jquery.filer.min.js')}}"></script>


        <script src="{{ asset('/') }}admin_assets/global/scripts/app.min.js" type="text/javascript"></script> 
        <script src="{{ asset('/') }}admin_assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <script src="{{ asset('/') }}admin_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

     <script>


$('#flash-overlay-modal').modal();
        </script> 

        @stack('scripts') 

        <script type="text/JavaScript">

            $(document).ready(function(){

            $(document).scrollTo('.msg_cls_for_focus', 2000);

            });

            function showProcessingForm(btn_id){		

            $("#"+btn_id).val( 'Processing .....' );

            $("#"+btn_id).attr('disabled','disabled');

            }

        </script>

    </body>

</html>

