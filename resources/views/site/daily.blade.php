@extends('layouts.panel')


@section('css')
    <link rel='stylesheet prefetch' href='{{ url('http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css') }}'>
    <link rel='stylesheet prefetch' href='{{ url('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css') }}'>
    <link rel='stylesheet prefetch' href='{{ url('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css') }}'>
    <link href="{{ asset('/datepickerfarsi/bootstrap.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/datepickerfarsi/bootstrap-theme.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/datepickerfarsi/jquery.Bootstrap-PersianDateTimePicker.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/persian.datepicker.css') }}"/>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/persian.date.js') }}"></script>
    <script src="{{ asset('js/persian.datepicker.js') }}"></script>
    <script src="{{ asset('/datepickerfarsi/jquery-3.1.0.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/datepickerfarsi/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/datepickerfarsi//jalaali.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/datepickerfarsi//jquery.Bootstrap-PersianDateTimePicker.js') }}" type="text/javascript"></script>
@endsection


@section('content')
    <div class="panel">
        <div class="panel-heading" style="background: indianred">
            <h5 style="padding-right: 50px"> برنامه ی روز ها </h5>
        </div>
        <div class="panel-body container-fluid" style="padding-top: 50px">
            <div class="row row-lg">
                <form method="post" action="{{URL::to('/set/daily')}}">
                    {{Form::token()}}
                    <div class="form-group col-xs-12 col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">روز های کلاس :</label>
                        <select class="form-control" name="day_of_week" id="day" data-plugin="select2">
                            <option value=6>شنبه</option>
                            <option value="0">یک شنبه</option>
                            <option value="1">دو شنبه</option>
                            <option value="2">سه شنبه</option>
                            <option value="3">چهار شنبه</option>
                            <option value="4">پنج شنبه</option>
                            <option value="5">جمعه</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-12 col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">نوع هفته :</label>
                        <select class="form-control" name="week_kind" id="day" data-plugin="select2">
                            <option value="0">فرد</option>
                            <option value="1">زوج</option>
                            <option value="2">هر هفته</option>
                        </select>
                    </div>
                    <div class="form-group col-xs-12 col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">زمان شروع:</label>
                        <input type="text" class="form-control" name="time" autocomplete="off" placeholder=" به صورت hh:mm وارد کنید">
                    </div>
                    <div class="form-group col-xs-12 col-md-6">
                        <label class="form-control-label" for="inputBasicFirstName">نام :</label>
                        <input type="text" class="form-control" id="describe" name="title" autocomplete="off" placeholder="نام کلاس را وارد کنید">
                    </div>

                    {{--<div class="input-group form-group col-xs-12 col-md-6 container" style="max-width: 400px;">--}}
                        {{--<div class="input-group-addon" data-mddatetimepicker="false" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left">--}}
                            {{--<span class="pe-7s-date" style="color: gray"></span>--}}
                        {{--</div>--}}
                        {{--<input type="text" name="start_day" class="form-control" id="fromDate1" placeholder="از تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-format="yyyy/mm/dd"/>--}}
                    {{--</div>--}}
                    {{--<div class="input-group form-group col-xs-12 col-md-6 container" style="max-width: 400px;">--}}
                        {{--<div class="input-group-addon" data-mddatetimepicker="false" data-trigger="click" data-targetselector="#fromDate1" data-groupid="group1" data-fromdate="true" data-enabletimepicker="false" data-placement="left">--}}
                            {{--<span class="pe-7s-date" style="color: gray"></span>--}}
                        {{--</div>--}}
                        {{--<input type="text" name="end_day" class="form-control" id="fromDate2" placeholder="تا تاریخ" data-mddatetimepicker="true" data-trigger="click" data-targetselector="#fromDate1" data-format="yyyy/mm/dd"/>--}}
                    {{--</div>--}}

                    <div class="form-group col-xs-12 col-md-6">
                        <button style="margin-top:20px ; float: right" type="submit" class="btn btn-primary" id="SaveDailySchedule">ذخیره</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src='{{ asset('http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js') }}'></script>
    <script src='{{ asset('http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js') }}'></script>
    <script src='{{ asset('/datepicker/js/index.js') }}'></script>
    {{--<script type="text/javascript">--}}
        {{--$('#textBoxInputId').MdPersianDateTimePicker({--}}
            {{--Placement: 'right',--}}
            {{--Trigger: 'click',--}}
            {{--EnableTimePicker: false,--}}
            {{--TargetSelector: '#fromDate1',--}}
            {{--GroupId: '',--}}
            {{--ToDate: false,--}}
            {{--FromDate: false,--}}
            {{--DisableBeforeToday: false,--}}
            {{--Disabled: false,--}}
            {{--Format: 'yy/mm/dd',--}}
            {{--IsGregorian: true,--}}
            {{--EnglishNumber: false,--}}
        {{--});--}}
    {{--// </script>--}}
@endsection