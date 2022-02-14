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
{{-- <h3>@lang('تقرير المعدل')</h3> --}}
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item">متابعت العميل</li>
{{-- <li class="breadcrumb-item active">تقرير المعدل</li> --}}
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">متابعت العميل</h6>
                                    <div id="content">
                                        <ul class="timeline ">
                                            <li class="event" data-date="12:30 - 1:00pm ">
                                                <h3 class="mx-3" >تم التواصل مع العميل ولم يتم الرد</h3>
                                                <p class="mx-3" >عن طريق : احمد محمود</p>
                                                <p class="mx-3" >التاريخ :5/12/2021</p>
                                            </li>
                                            <li class="event" data-date="2:30 - 4:00pm">
                                                <h3 class="mx-3" >تم التواصل مع العميل ولم يتم الرد</h3>
                                                <p class="mx-3" >عن طريق : احمد محمود</p>
                                                <p class="mx-3" >التاريخ :5/12/2021</p>
                                            </li>
                                            <li class="event" data-date="5:00 - 8:00pm">
                                                <h3 class="mx-3" >تم التواصل مع العميل ولم يتم الرد</h3>
                                                <p class="mx-3" >عن طريق : احمد محمود</p>
                                                <p class="mx-3" >التاريخ :5/12/2021</p>
                                            </li>
                                            <li class="event" data-date="8:30 - 9:30pm">
                                                <h3 class="mx-3" >تم التواصل مع العميل ولم يتم الرد</h3>
                                                <p class="mx-3" >عن طريق : احمد محمود</p>
                                                <p class="mx-3" >التاريخ :5/12/2021</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             
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
