@extends('layouts.panel')
@section('content')
                <div class="card">
                    <div class="header">
                        <h4 class="title">اعلانات</h4>
                        <p class="category">ساخته شده توسط دوست ما <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. لطفا <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">داکیومنتیشن کامل</a> را چک کنید.</p>

                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-6">
                                <h5>استایل اعلانات</h5>
                                <div class="alert alert-info">
                                    <span>این یک اعلان ساده است.</span>
                                </div>
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span>این یک اعلان با دکمه بستن است.</span>
                                </div>
                                <div class="alert alert-info alert-with-icon" data-notify="container">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span data-notify="icon" class="pe-7s-bell"></span>
                                    <span data-notify="message">این یک اعلان با دکمه بستن و آیکون است.</span>
                                </div>
                                <div class="alert alert-info alert-with-icon" data-notify="container">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span data-notify="icon" class="pe-7s-bell"></span>
                                    <span data-notify="message">این یک اعلان با دکمه بستن و آیکون و چند خط است. لورم ایپسوم...</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h5>انواع اعلانات</h5>
                                <div class="alert alert-info">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> اطلاعات - </b> این یک اعلان دارای کلاس ".alert-info" است.</span>
                                </div>
                                <div class="alert alert-success">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> انجام شده - </b> این یک اعلان دارای کلاس ".alert-success" است.</span>
                                </div>
                                <div class="alert alert-warning">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> توجه - </b> این یک اعلان دارای کلاس ".alert-warning" است.</span>
                                </div>
                                <div class="alert alert-danger">
                                    <button type="button" aria-hidden="true" class="close">×</button>
                                    <span><b> خطرناک - </b> این یک اعلان دارای کلاس ".alert-danger" است.</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="places-buttons">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3 text-center">
                                    <h5>مکان های اعلانات
                                        <p class="category">کلیک کنید تا اعلانات را ببینید.</p>
                                    </h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-3">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('top','left')">بالا چپ</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('top','center')">بالا وسط</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('top','right')">بالا راست</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-md-offset-3">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','left')">پایین چپ</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','center')">پایین وسط</button>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-default btn-block" onclick="demo.showNotification('bottom','right')">پایین راست</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    @stop
