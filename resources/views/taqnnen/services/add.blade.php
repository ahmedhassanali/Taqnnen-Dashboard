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
<h3>اضافة خدمة</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">@lang('lang.Services')</li>
<li class="breadcrumb-item active">اضافة خدمة</li>

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
                                <h3 class="card-title">الخدمات</h3>
                            </div> --}}
                            @php
                                $models = ['مسؤل','مشرف','مشاهد','مصمم'];
                                $map=['شامل','عمليات'];
                            @endphp

                            <div class="card-body">
                                <div class="form-group mb-3">
                                <input type="text" id="inputName" class="form-control mb-3" placeholder="اسم الخدمة">
                                </div>
                                
                                <div class="form-group">
                                    <ul class="nav nav-pills mb-3 mx-0 px-0 " id="pills-tabb" role="tablist">
                                        <li class="nav-item mx-1" role="presentation">
                                            <button class="nav-link mx-0 py-0 active" id="pills-aa--tab" data-bs-toggle="pill" data-bs-target="#pills-aa-" type="button" role="tab" aria-controls="pills-home" aria-selected="true">الباقة الاولى</button>
                                        </li>
                                        <li class="nav-item mx-1 " role="presentation">
                                            <button class="nav-link py-0 " id="pills-bb--tab" data-bs-toggle="pill" data-bs-target="#pills-bb-" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">الباقة الثانية</button>
                                        </li>
                                        <li class="nav-item mx-1" role="presentation">
                                            <button class="nav-link py-0" id="pills-cc--tab" data-bs-toggle="pill" data-bs-target="#pills-cc-" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">الباقة الثالثة</button>
                                        </li>
                                        <li class="nav-item mx-1" role="presentation">
                                            <button class="nav-link py-0" id="pills-dd--tab" data-bs-toggle="pill" data-bs-target="#pills-dd-" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">الباقة الرابعة</button>
                                        </li>
                                    </ul>
                                    <div class='d-flex justify-content-between' >
                                        <div class="tab-content " id="pills-tabbContent">
                                            <div class="tab-pane fade show active " id="pills-aa-" role="tabpanel" aria-labelledby="pills-aa--tab">
                                                @foreach ($map as $index=>$m)
                                                    <input type="checkbox"  class="form-check-input" id="{{$m}}">
                                                    <label class="form-check-label"  for="{{$m}}">{{$m}}</label>
                                                @endforeach
                                            </div>
                                            <div class="tab-pane fade " id="pills-bb-" role="tabpanel" aria-labelledby="pills-bb--tab">
                                                @foreach ($map as $index=>$m)
                                                    <input type="checkbox"   class="form-check-input " id="{{$m}}">
                                                    <label class="form-check-label"  for="{{$m}}">{{$m}}</label>
                                                @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="pills-cc-" role="tabpanel" aria-labelledby="pills-cc--tab">
                                                @foreach ($map as $index=>$m)
                                                    <input type="checkbox"   class="form-check-input" id="{{$m}}">
                                                    <label class="form-check-label"  for="{{$m}}">{{$m}}</label>
                                                    @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="pills-dd-" role="tabpanel" aria-labelledby="pills-dd--tab">
                                                @foreach ($map as $index=>$m)
                                                    <input type="checkbox"   class="form-check-input" id="{{$m}}">
                                                    <label class="form-check-label"  for="{{$m}}">{{$m}}</label>
                                                    @endforeach
                                            </div>
                                          </div>
                                </div>

                                <select class="form-select mb-3" >
                                    <option selected>الاشتراك</option>
                                    <option value="1">مشرف عام</option>
                                    <option value="2">مشرف</option>
                                    <option value="3">محرر</option>
                                  </select>

                                  <div class="form-group mb-3">
                                    <input type="text" id="inputName" class="form-control" placeholder="مدة الاشتراك">
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" id="inputName" class="form-control" placeholder="سعر الاشتراك">
                                </div>

                                <div class="form-group mb-3">
                                    <textarea id="inputDescription" class="form-control" rows="4" placeholder="وصف الخدمة"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-12 my-3">
                                      <input type="submit" value="اضافة خدمة جديدة" class="btn btn-primary float-right">
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
