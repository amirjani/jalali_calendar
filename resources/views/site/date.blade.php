@extends('layouts.index')

@section('header')
    <link rel='stylesheet prefetch' href='{{ url('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css') }}'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link href="/datepickerfarsi/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/datepickerfarsi/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="/datepickerfarsi/jquery.Bootstrap-PersianDateTimePicker.css" />

    <script src="/datepickerfarsi/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="/datepickerfarsi/bootstrap.min.js" type="text/javascript"></script>
    <script src="/datepickerfarsi//jalaali.js" type="text/javascript"></script>
    <script src="/datepickerfarsi//jquery.Bootstrap-PersianDateTimePicker.js" type="text/javascript"></script>
    <style type="text/css">
        body, table {
            font-family: 'Segoe UI', Tahoma;
            font-size: 14px;
        }
    </style>
@endsection


@section('content')
    <div class="panel">
        <div class="panel-heading" id="token" token="">
            <h3 class="panel-title">
                <small><a class="example-plugin-link" href="https://select2.github.io" target="_blank">Set Daily Schedule</a></small>
            </h3>
        </div>


        <div class="panel-body container-fluid">
            <form method="post" action="{{ URL::to('/set/date') }}">
                {{Form::token()}}
                <div class="row row-lg">
                    <div class="input-group form-group col-xs-12 col-md-6 container" style="max-width: 400px;">
                        <div class="input-group-addon" data-mddatetimepicker="false" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </div>
                        <input type="text" name="date" class="form-control" id="fromDate1" placeholder="تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="right" id="date"/>
                    </div>

                        <div class="input-group form-group col-xs-12 col-md-6 container" style="max-width: 400px;">
                            <label class="form-control-label" for="inputBasicFirstName">Time:</label>
                            <div class='input-group'>
                                <input type='text' name="time" class="form-control" id="timepicker1" />
                            </div>
                        </div>

                    <div class="form-group input-group container col-xs-12 col-md-6" style="max-width: 400px;">
                        <label class="form-control-label" for="inputBasicFirstName">title:</label>
                        <input type="text" name="describe" class="form-control" id="describe" name="title" autocomplete="off">
                    </div>
                    <div class="form-group input-group container col-xs-12 col-md-6" style="max-width: 400px;">
                        <button style="float: left" type="submit" style="" class="btn btn-primary" id="SaveDateSchedule">ذخیره</button>
                    </div>

                </div>
            </form>
            <div class="form-group">
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js'></script>
    <script src='/datepicker/js/index.js'></script>

@endsection

@section('footer-manual')
    <script>
        $('#timepicker1').timepicker();

    </script>
@endsection