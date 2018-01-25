@extends('layouts.panel')

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
                            <option value="0">شنبه</option>
                            <option value="1">یک شنبه</option>
                            <option value="2">دو شنبه</option>
                            <option value="3">سه شنبه</option>
                            <option value="4">چهار شنبه</option>
                            <option value="5">پنج شنبه</option>
                            <option value="6">جمعه</option>
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
                    <div class="form-group col-xs-12 col-md-6">
                        <button style="margin-top:20px ; float: right" type="submit" class="btn btn-primary" id="SaveDailySchedule">ذخیره</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection