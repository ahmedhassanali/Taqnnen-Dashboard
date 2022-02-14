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
<h3>عرض الادوار</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">الادوار</li>
<li class="breadcrumb-item active">عرض الادوار</li>
@endsection

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
                                         <a class="btn btn-primary" href="{{route('addrole')}}">اضافة</a>
                                    </div> 
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الدور</th>
                                                        <th>الاجراء</th>                                             
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td> مسؤل عام</td>
                                                            <td class="d-flex ">
                                                                <a href="#" class="btn btn-primary  p-1">
                                                                    <i class="bi bi-edit"></i>
                                                                    @lang('lang.edit')</a>
                                                                <a href="#" class="btn btn-danger mx-2 p-1">
                                                                    <i class="bi bi-trash"></i>
                                                                    @lang('lang.delete')
                                                                   </a>
                                                            </td>       
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>مسؤل</td>
                                                            <td class="d-flex ">
                                                                <a href="#" class="btn btn-primary  p-1">
                                                                    <i class="bi bi-edit"></i>
                                                                    @lang('lang.edit')</a>
                                                                <a href="#" class="btn btn-danger mx-2 p-1">
                                                                    <i class="bi bi-trash"></i>
                                                                    @lang('lang.delete')
                                                                   </a>
                                                            </td>       
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>مشرف</td>
                                                            <td class="d-flex ">
                                                                <a href="#" class="btn btn-primary  p-1">
                                                                    <i class="bi bi-edit"></i>
                                                                    @lang('lang.edit')</a>
                                                                <a href="#" class="btn btn-danger mx-2 p-1">
                                                                    <i class="bi bi-trash"></i>
                                                                    @lang('lang.delete')
                                                                   </a>
                                                            </td>       
                                                        </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الدور</th>
                                                        <th>الاجراء</th>
                                                    
                                                    </tr>
                                                </tfoot>
                                            </table>
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
