@extends('layouts.simple.master')

@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>اضافة الادوار</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">الادوار</li>
<li class="breadcrumb-item active">اضافة الادوار</li>
@endsection
@php
    $classes = ['مشرفين','خدمات','اشتراكات','فرص'];
    $permissions = ['اضافة','حذف','تعديل'];
@endphp
@section('content')
{{-- <header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header> --}}

    <div class="container-fluid">
        <div class="row">
            {{-- <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header> --}}
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                <div class="container-fluid">

                 </div><!-- /.container-fluid -->
                </section>
                <section>
                    <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                     <div class="card-header">
                                        <div class="form-group">
                                            <label class="my-2" for="inputName">اسم الدور</label>
                                            <input type="text" id="inputName" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th></th>
                                                        <th>الصلاحيات</th>                                             
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($classes as $item)
                                                    <tr>
                                                        <td>1</td>
                                                        <td>{{$item}}</td>
                                                        <td>
                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox">اضافة {{$item}}</label>
                                                            </div>
                                                            
                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox"> تعديل {{$item}} </label>
                                                            </div>
                                                            
                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox">حذف {{$item}}</label>
                                                            </div>

                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox">حذف {{$item}} الخاصين بالمشرف</label>
                                                            </div>

                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox"> تعديل {{$item}} الخاصين بالمشرف </label>
                                                            </div>
                                                            
                                                        </td>       
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th></th>
                                                        <th>الصلاحيات</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="row">
                                                <div class="col-12 my-3">
                                                  <input type="submit" value="اضافة دور جديد" class="btn btn-primary float-left">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div><!-- /.row -->
                        </div><!-- /.container-fluid -->

                      </section>

                </section>
            </div>

        </div>
    </div>
<script type="text/javascript">
var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection




@section('script')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('assets/js/notify/index.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
