<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('panel/img/favicon.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>تقویم آموزشی</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

@yield('css')

<!-- Bootstrap core CSS     -->
    <link href="{{ asset('panel/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Bootstrap RTL core CSS     -->
    <link href="{{ asset('panel/css/bootstrap-rtl.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('panel/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('panel/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap RTL Version CSS    -->
    <link href="{{ asset('panel/css/light-bootstrap-dashboard-rtl.css') }}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="{{ url('http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href='{{ url('http://fonts.googleapis.com/css?family=Roboto:400,700,300') }}' rel='stylesheet' type='text/css'>
    <link href='{{ url('http://fonts.googleapis.com/earlyaccess/droidarabickufi.css') }}' rel='stylesheet' type='text/css'>
    <link href="{{ asset('panel/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
@yield('links')
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="#e7663f" data-image="{{ asset('panel/img/sidebar-2.jpg') }}">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    تقویم آموزشی
                </a>
            </div>
            @include('panel.partials.sideBar')
        </div>
    </div>
    <div class="main-panel">
        @include('panel.partials.header')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('panel.partials.footer')
    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="{{ asset('panel/js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('panel/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="{{ asset('panel/js/bootstrap-checkbox-radio-switch.js') }}"></script>

<!--  Charts Plugin -->
<script src="{{ asset('panel/js/chartist.min.js') }}"></script>

<!--  Notifications Plugin    -->
<script src="{{ asset('panel/js/bootstrap-notify.js') }}"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="{{ url('https://maps.googleapis.com/maps/api/js?sensor=false') }}"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="{{ asset('panel/js/light-bootstrap-dashboard.js') }}"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="{{ asset('panel/js/demo.js') }}"></script>


@yield('javascript')

<script type="text/javascript">
    $(document).ready(function(){

        demo.initChartist();

        @if (session('flash_message'))
        new Noty({
            type: '{{ session('flash_message_level', 'error') }}',
            layout: 'bottomLeft',
            timeout: 7000,
            progressBar: true,
            closeWith: ['click'],
            text: '{{ session('flash_message') }}'

        }).show();
        @endif

        @if ($errors->any())
        @foreach($errors->all() as $e)
        new Noty({
            type: 'error',
            layout: 'bottomLeft',
            timeout: 7000,
            progressBar: true,
            closeWith: ['click'],
            text: '{{ $e }}',

        }).show();
        @endforeach

        @endif
    });
</script>
