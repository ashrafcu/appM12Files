<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    {{-- theme meta --}}
    <meta name="theme-name" content="quixlab" />
  
    <title>Tiki Online | Administration Panel </title>
    {{-- Favicon icon --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images')}}/favicon.png">
    {{-- Pignose Calender --}}
    <link href="{{asset('assets/plugins')}}/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    {{-- Chartist --}}
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="{{asset('assets/plugins')}}/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    {{-- Custom Stylesheet --}}
    <link href="{{asset('assets/css')}}/style.css" rel="stylesheet">
    {{-- Page Plugins CSS--}}
    <link href="{{asset('assets/plugins')}}/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet">
    {{-- Color Picker Plugins CSS--}}
    <link href="{{asset('assets/plugins')}}/jquery-asColorPicker-master/css/asColorPicker.css" rel="stylesheet">
    {{-- Date Picker Plugins CSS--}}
    <link href="{{asset('assets/plugins')}}/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    {{-- Daterange Picker Plugins CSS--}}
    <link href="{{asset('assets/plugins')}}/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
    <link href="{{asset('assets/plugins')}}/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

</head>

<body>

    {{--PRE-LOADER STARTS--}}
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    {{--PRE-LOADER ENDS--}}

    
    {{--MAIN WRAPPER STARTS--}}
    <div id="main-wrapper">

        {{--TOP NAVIGATION STARTS--}}
        @include('components.top-nav')
        {{--TOP NAVIGATION ENDS--}}

        {{--HEADER STARTS--}}
        @include('components.header')
        {{--HEADER ENDS--}}
        {{--SIDE NAVIGATION STARTS--}}
        @include('components.nav')
        {{--SIDE NAVIGATION ENDS--}}

        {{--CONTENT BODY STARTS--}}
        @yield('content')
        {{--CONTENT BODY ENDS--}}
        
        
        {{--FOOTER STARTS--}}
        @include('components.footer')
        {{--FOOTER ENDS--}}
    </div>
    {{--MAIN WRAPPER ENDS--}}

    {{--SCRIPTS--}}
    <script src="{{asset('assets/plugins')}}/common/common.min.js"></script>
    <script src="{{asset('assets/js')}}/custom.min.js"></script>
    <script src="{{asset('assets/js')}}/settings.js"></script>
    <script src="{{asset('assets/js')}}/gleek.js"></script>
    <script src="{{asset('assets/js')}}/styleSwitcher.js"></script>

    {{-- CHART JS --}}
    <script src="{{asset('assets/plugins')}}/chart.js/Chart.bundle.min.js"></script>
    {{-- CIRCLE PROGRESS --}}
    <script src="{{asset('assets/plugins')}}/circle-progress/circle-progress.min.js"></script>
    {{-- DATA MAP --}}
    <script src="{{asset('assets/plugins')}}/d3v3/index.js"></script>
    <script src="{{asset('assets/plugins')}}/topojson/topojson.min.js"></script>
    <script src="{{asset('assets/plugins')}}/datamaps/datamaps.world.min.js"></script>
    {{-- MORRIS JS --}}
    <script src="{{asset('assets/plugins')}}/raphael/raphael.min.js"></script>
    <script src="{{asset('assets/plugins')}}/morris/morris.min.js"></script>
    {{-- PIGNOSE CALENDER --}}
    <script src="{{asset('assets/plugins')}}/moment/moment.min.js"></script>
    <script src="{{asset('assets/plugins')}}/pg-calendar/js/pignose.calendar.min.js"></script>
    {{-- CHARTIST JS --}}
    <script src="{{asset('assets/plugins')}}/chartist/js/chartist.min.js"></script>
    <script src="{{asset('assets/plugins')}}/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>

    <script src="{{asset('assets/plugins')}}/moment/moment.js"></script>
    <script src="{{asset('assets/plugins')}}/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    {{-- Clock Plugin JavaScript --}}
    <script src="{{asset('assets/plugins')}}/clockpicker/dist/jquery-clockpicker.min.js"></script>
    {{-- Color Picker Plugin JavaScript --}}
    <script src="{{asset('assets/plugins')}}/jquery-asColorPicker-master/libs/jquery-asColor.js"></script>
    <script src="{{asset('assets/plugins')}}/jquery-asColorPicker-master/libs/jquery-asGradient.js"></script>
    <script src="{{asset('assets/plugins')}}/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js"></script>
    {{-- Date Picker Plugin JavaScript --}}
    <script src="{{asset('assets/plugins')}}/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    {{-- Date range Plugin JavaScript --}}
    <script src="{{asset('assets/plugins')}}/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="{{asset('assets/plugins')}}/bootstrap-daterangepicker/daterangepicker.js"></script>

    <script src="{{asset('assets/js')}}/plugins-init/form-pickers-init.js"></script>

    <script src="{{asset('assets/js')}}/dashboard/dashboard-1.js"></script>

</body>

</html>