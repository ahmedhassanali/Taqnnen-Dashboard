@extends('layouts.simple.master')

@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>@lang('lang.AddOpportunities')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item">@lang('lang.Opportunities')</li>
<li class="breadcrumb-item active">@lang('lang.AddOpportunities')</li>
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
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                            {{-- <div class="card-header">
                                <h3 class="card-title">@lang('lang.AddOpportunities')</h3>


                            </div> --}}
                            <div class="card-body">

                                <div class="form-group mb-3">
                                     <input type="text" id="inputClientCompany" class="form-control" placeholder="اسم العميل">
                                </div>


                                <div class="form-group mb-3">
                                    <input type="text" id="inputClientCompany" class="form-control" placeholder="رقم الهاتف">
                                </div>



                                <select class="form-select mb-3" >
                                    <option selected>الخدمة المطلوبة</option>
                                    <option value="1">مقيم</option>
                                    <option value="2">تمم</option>
                                    <option value="3">شموس</option>
                                  </select>

                                  <select class="form-select mb-3"  >
                                    <option selected>رقم الحاسب</option>
                                    <option value="1">1235</option>
                                    <option value="2">1853</option>
                                    <option value="3">3215</option>
                                  </select>
                                

                                <div class="form-group mb-3">
                                    <textarea id="inputDescription" class="form-control" rows="4" placeholder="@lang('lang.Opportunitiescontent')"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-12 my-3">
                                      <input type="submit" value="@lang('lang.CreateNewOpportunities')" class="btn btn-primary float-right">
                                    </div>
                                  </div>
                            </div>

                            </div>
                        </div>

                    </div>

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
@endsection
