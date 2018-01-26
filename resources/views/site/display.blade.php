@extends('layouts.panel')
{{--<!doctype html>--}}

{{--<html lang="fa">--}}

@section('links')
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css') }}"/>
@stop

{{--<head>--}}
    {{--<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>--}}
    {{--<link rel="stylesheet" type="text/css" href="{{ url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') }}">--}}
    {{--<link rel="stylesheet" href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css') }}"/>--}}
{{--</head>--}}

{{--<div class="container">--}}
    {{--<div class="panel panel-info" style="border-color: gray">--}}
        {{--<div class="panel-heading">--}}
            {{--<h2 class="text-center" dir="rtl" style="color: black ;padding: 0 10px 10px 10px"> تقویم برنامه های شخصی </h2>--}}
        {{--</div>--}}
        {{--<div class="panel-body" style="background: #ececec">--}}

            {{--{!! $calendar->calendar() !!}--}}

            {{--{!! $calendar->script() !!}--}}

        {{--</div>--}}

    {{--</div>--}}

{{--</div>--}}

@section('content')
    {{--<div class="container">--}}
        <div class="panel panel-info" style="border-color: gray">

            <div class="panel-heading" style="background: indianred">
                <h2 class="text-center" dir="rtl" style="color: black ;padding: 0 10px 10px 10px"> تقویم برنامه های شخصی </h2>
            </div>

            <div class="panel-body">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
            </div>

        </div>
    {{--</div>--}}
@stop

@section('javascript')
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js') }}"></script>
    <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js') }}"></script>
{{--///Applications/XAMPP/xamppfiles/htdocs/calendar-schedule/bower_components/fullcalendar/dist/locale-all.js--}}
    <script src='{{ asset('fullcalendar/dist/fullcalendar.js') }}'></script>
    <script src='{{ asset('fullcalendar/dist/locale-all.js') }}'></script>
    <script>

        $(document).ready(function() {

            $('#calendar').fullCalendar({
                locale: 'fa' ,
                isJalaali : true ,
                isRTL : true ,
                lang : "fa" ,
            });

        });

    </script>
@stop
{{--<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js') }}"></script>--}}
{{--<script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js') }}"></script>--}}

{{--</html>--}}