<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- BOOTSTRAP CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark-style.css') }}" rel="stylesheet" />

    <!-- SIDE-MENU CSS -->
    <link href="{{ asset('assets/css/sidemenu.css') }}" rel="stylesheet">

    <!--C3 CHARTS CSS -->
    <link href="{{ asset('assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- SIDEBAR CSS -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('assets/colors/color1.css') }}" />

    <!-- TIME PICKER CSS -->
    <link href="../../assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet" />

    <!-- DATE PICKER CSS -->
    <link href="../../assets/plugins/date-picker/spectrum.css" rel="stylesheet" />

    <!-- SELECT2 CSS -->
    <link href="../../assets/plugins/select2/select2.min.css" rel="stylesheet" />

</head>

<body class="app sidebar-mini">
    <!-- PAGE -->
    <div class="page">
        <div class="page-main">


            @yield('content')

        </div>

    </div>

    <!-- JQUERY JS -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JS -->
    <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- SPARKLINE JS-->
    <script src="{{ asset('assets/js/jquery.sparkline.min.js') }}"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

    <!-- RATING STARJS -->
    <script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

    <!-- CHARTJS CHART JS-->
    <script src="{{ asset('assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

    <!-- PIETY CHART JS-->
    <script src="{{ asset('assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- ECHART JS-->
    <script src="{{ asset('assets/plugins/echarts/echarts.js') }}"></script>

    <!-- SIDE-MENU JS-->
    <script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

    <!-- SIDEBAR JS -->
    <script src="{{ asset('assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll.js') }}"></script>
    <script src="{{ asset('assets/plugins/p-scroll/pscroll-1.js') }}"></script>


    <!-- APEXCHART JS -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>

    <!-- INDEX JS -->
    <script src="{{ asset('assets/js/index1.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Color Change JS -->
    <script src="{{ asset('assets/js/color-change.js') }}"></script>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- C3 CHART JS -->
    <script src="{{ asset('assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/charts-c3/c3-chart.js') }}"></script>

    <!-- INPUT MASK JS-->
    <script src="{{ asset('assets/plugins/input-mask/jquery.mask.min.js') }}"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- BOOTSTRAP-DATERANGEPICKER JS -->
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- TIMEPICKER JS -->
    <script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

    <!-- DATEPICKER JS -->
    <script src="{{ asset('assets/plugins/date-picker/spectrum.js') }}"></script>
    <script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

    <!-- MULTI SELECT JS-->
    <script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
    <script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>


    <!-- FORMELEMENTS JS -->
    <script src="{{ asset('assets/js/form-elements.js') }}"></script>

    <!-- CUSTOM JS -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <!-- Color Change JS -->
    <script src="{{ asset('assets/js/color-change.js') }}"></script>

</body>


</html>
