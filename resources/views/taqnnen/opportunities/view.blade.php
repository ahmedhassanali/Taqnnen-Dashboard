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
<h3>@lang('lang.ViewOpportunities')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item">@lang('lang.Opportunities')</li>
<li class="breadcrumb-item active">@lang('lang.ViewOpportunities')</li>
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
                <section >
                    <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <form class="theme-form">

                                            <label for="">الخدمة</label>
                                            <select class="form-select mb-3" >
                                                <option selected value="1">مقيم</option>
                                                <option value="1">تم</option>
                                                <option value="2">شموس</option>
                                                <option value="3">راية</option>
                                                <option value="4">مسارات</option>
                                            </select>
                                            
                                        
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <label for=""> التاريخ   من</label>
                                                    <input type="date" class="form-control" name="" id="">
                                                </div>
    
                                                <div class=" col-md-6">
                                                    <label for="">الى</label>
                                                    <input type="date" class="form-control" name="" id="">
                                                </div>
                                             </div>
    
                                             <input type="submit" value="بحث" class="btn btn-primary float-right mt-3">

                                         
                                      </form>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display " id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم الفرصة</th>
                                                        <th>ناشر الفرصة</th>
                                                        <th>التاريخ</th>
                                                        <th>منتهز الفرصة</th>
                                                        <th>حالة الفرصة</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($i = 0; $i < 25; $i++)
                                                        <tr>
                                                            <td>{{$i+1}}</td>
                                                            <td>عميل خدمة مقيم</td>
                                                            <td>حسان احمد</td>
                                                            <td>2022/02/09</td>
                                                            <td>الربيع</td>
                                                            <td > <span class="badge bg-primary " style="font-size: 17px">منشورة</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td>{{$i+2}}</td>
                                                            <td>عميل خدمة مقيم</td>
                                                            <td>محمد على</td>
                                                            <td> 2022/02/22 </td>
                                                            <td>الاحسان</td>
                                                            <td> <span class="badge bg-success "style="font-size: 17px" >تم انتهاز الفرصة</span></td>
                                                        </tr>
                                                     @endfor
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم الفرصة</th>
                                                        <th>ناشر الفرصة</th>
                                                        <th>التاريخ</th>
                                                        <th>منتهز الفرصة</th>
                                                        <th>حالة الفرصة</th>
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
