@extends('layouts.index')

@section('header')
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
@endsection


@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">
                <small><a class="example-plugin-link" href="https://select2.github.io" target="_blank">Set Daily Schedule</a></small>
            </h3>
        </div>
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <div class="form-group col-xs-12 col-md-6">
                    <div class="form-group col-xs-12 col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">Time:</label>
                        <div class='input-group date' id='datetimepicker1'>
                            <input type='text' class="form-control" />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-md-6">
                    <label class="form-control-label" for="inputBasicFirstName">Time:</label>
                    <input type="text" class="form-control" id="timepicker1" name="inputFirstName" placeholder="00:00" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <button type="button" style="" class="btn btn-primary" id="SaveDailySchedule">Save</button>
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