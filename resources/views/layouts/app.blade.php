<!DOCTYPE html>
<html lang="" class="" dir="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jobs in Srilanka</title>
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="shortcut icon" href="{{ asset('/') }}favicon.ico">
    <link href="{{ asset('/') }}js/revolution-slider/css/settings.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/all.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}css/main.css" rel="stylesheet">

    @if (session('localeDir', 'ltr') == 'rtl')
        <link href="{{ asset('/') }}css/rtl-style.css" rel="stylesheet">
    @endif
    <link href="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"
        rel="stylesheet" type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('/') }}admin_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet"
        type="text/css" />
</head>

<body>

    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false"
        data-turbo-eval="false"></script>
    <script src="{{ asset('/') }}js/jquery.min.js"></script>
    <script src="{{ asset('/') }}js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/') }}js/popper.js"></script>
    <script src="{{ asset('/') }}js/owl.carousel.js"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"
        type="text/javascript"></script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js"
        type="text/javascript"></script>

    <script src="{{ asset('/') }}admin_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript">
    </script>
    <script src="{{ asset('/') }}admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('/') }}js/revolution-slider/js/jquery.themepunch.tools.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('/') }}js/revolution-slider/js/jquery.themepunch.revolution.min.js">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dragula/3.7.2/dragula.min.js"></script>


    @stack('scripts')

    <script src="{{ asset('/') }}js/script.js"></script>
    <script type="text/JavaScript">

        $(document).ready(function(){
                    $(document).scrollTo('.has-error', 2000);
                    });

                    function showProcessingForm(btn_id){		
                    $("#"+btn_id).val( 'Processing .....' );
                    $("#"+btn_id).attr('disabled','disabled');		
                    }


        		setInterval("hide_savedAlert()",7000);
                function hide_savedAlert(){
                  $(document).find('.svjobalert').hide();
                }

                $(document).ready(function(){
                    $.ajax({
                        type: 'get',
                        url: "{{ route('check-time') }}",
                        success: function(res) {
                                $('.notification').html(res);  
                        }
                    });
                });
                </script>
</body>
</html>
