@extends('layouts.panel')

@section('content')
    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">ویرایش پروفایل</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>شرکت (غیر فعال)</label>
                                                <input type="text" class="form-control" disabled placeholder="Company" value="کد شرکت">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>نام کاربری</label>
                                                <input type="text" class="form-control" placeholder="یوزرنیم" value="michael23">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">آدرس ایمیل</label>
                                                <input type="email" class="form-control" placeholder="ایمیل">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>نام</label>
                                                <input type="text" class="form-control" placeholder="نام" value="مایک">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>نام خانوادگی</label>
                                                <input type="text" class="form-control" placeholder="نام خانوادگی" value="اندرو">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>آدرس</label>
                                                <input type="text" class="form-control" placeholder="آدرس خانه" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>شهر</label>
                                                <input type="text" class="form-control" placeholder="شهر" value="اصفهان">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>کشور</label>
                                                <input type="text" class="form-control" placeholder="کشور" value="ایران">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>کد پستی</label>
                                                <input type="number" class="form-control" placeholder="کد پستی">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>درباره من</label>
                                                <textarea rows="5" class="form-control" placeholder="اینجا میتواند توضیحات شما باشد." value="Mike">لامبورگینی رحمت، جوجه شما او تا تشنه، من در آن دو صندلی لامبورگینی است.</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-info btn-fill pull-left">آپدیت پروفایل</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="{{ asset('panel/img/faces/face-3.jpg') }}" alt="..."/>

                                      <h4 class="title">مایک اندرو<br />
                                         <small>michael24</small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> " لامبورگینی رحمت<BR>  جوجه خود را او  تا تشنه <BR>من در آن لامبورگینی دو صندلی هستم "
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

@stop