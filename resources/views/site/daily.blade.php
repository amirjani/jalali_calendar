@extends('layouts.index')

@section('content')
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">
                <small><a class="example-plugin-link" href="https://select2.github.io" target="_blank">Set Daily Schedule</a></small>
            </h3>
        </div>
        <div class="panel-body container-fluid">
            <div class="row row-lg">
                <form method="post" action="{{URL::to('/set/daily')}}">
                    {{Form::token()}}
                    <div class="form-group col-xs-12 col-md-6">
                <label class="form-control-label" for="inputBasicFirstName">Day Of Week:</label>
                    <select class="form-control" name="day_of_week" id="day" data-plugin="select2">
                        <option value="0">Saturday</option>
                        <option value="1">Sunday</option>
                        <option value="2">Monday</option>
                        <option value="3">Tuesday</option>
                        <option value="4">Wednesday</option>
                        <option value="5">thursday</option>
                        <option value="6">friday</option>
                    </select>
                </div>
                <div class="form-group col-xs-12 col-md-6">
                    <label class="form-control-label" for="inputBasicFirstName">Day Of Week:</label>
                    <input type="text" class="form-control" name="time" id="timepicker1" name="inputFirstName" placeholder="00:00" autocomplete="off">
                </div>
                    <div class="form-group col-xs-12 col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">title:</label>
                        <input type="text" name="describe" class="form-control" id="describe" name="title" autocomplete="off">
                    </div>
                <div class="form-group" class="form-group col-xs-12 col-md-6">
                    <button style="float: right" type="submit" class="btn btn-primary" id="SaveDailySchedule">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('footer-manual')
    <script>
        $('#timepicker1').timepicker();
    </script>
@endsection