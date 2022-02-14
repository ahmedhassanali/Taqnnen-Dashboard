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
<h3>@lang('الاعدادات')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item">الاعدادات</li>
@endsection
@php
$settings = ['عام','العلاقات العامة','التخصيص','الاشعارات','مالى','إضفاء الطابع الشخصي']    
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

                        <h6 id="greeting" class="invisible"></h6>
                        
                        <div class="col-xl-12 xl-100 chart_data_left box-col-12">

                                        <div class="row m-0 p-tb">
                                                @for($i=1;$i<=6;$i++)
                                                <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                                    <div class="card">
                                                        <div class="row">
                                                            <div class="col-md-4" >
                                                                <span>
                                                                    <i class="fi fi-rr-arrows"></i>
                                                                </span>
                                                                <img src="{{asset('assets/images/settings/'.$i.'.png')}}" class="img-fluid rounded-start p-4  float-center" alt="">
                                                            </div>
                                                            <div class="card-body col-md-8  py-5 ps-3">
                                                                <h5 class="card-title">{{$settings[$i-1]}}</h5>
                                                                <p class="card-text">تغيير عنوان الموقع ، والشعار ، واللغة ، و RTL ، والحسابات الاجتماعية ، وأنماط التصميم ، والتحميل المسبق.</p>
                                                                <a href="#" class="btn btn-primary">تغير الاعدادات</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                     </div><!-- /.container-fluid -->
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
