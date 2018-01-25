@extends('layouts.panel')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">محصولات</h4>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-hover table-striped">
                                <tr>
                                    <th>عنوان</th>
                                    <th>توضیحات</th>
                                    <th>دسته بندی</th>
                                    <th>عملیات</th>
                                </tr>
                                <tbody>
                                @foreach($sub_categories as $item)
                                    <tr>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->category->title }}</td>
                                        <td>
                                            <div class="btn-group btn-group-xs">
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                <i class="fa fa-trash-o" style="color: red" ></i>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-footer clearfix">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                {{$sub_categories->links() }}
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <a href="#" class="pull-left btn btn-primary btn-add" style="border-color: #666; color: #666;"> اضافه کردن محصول</a>
            </div>
        </div>
    </div>
@endsection
