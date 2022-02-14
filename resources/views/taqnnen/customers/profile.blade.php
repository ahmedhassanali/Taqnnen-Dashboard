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
{{-- <h3>اضافة عميل جديد</h3> --}}
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">@lang('lang.Customers')</li>
{{-- <li class="breadcrumb-item active">اضافة عميل جديد</li> --}}
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
                          
                                <div class="container rounded bg-white mt-5 mb-5">
                                    <div class="row">
                                        <div class="col-md-3 border-right">
                                            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">حمدان على عيد</span><span class="text-black-50">Hamohamed@gmail.com</span><span>
                                                <a class="btn btn-primary"  href="{{route('customer-notes')}}">متابعت العميل</a>
                                            </span></div>
                                        </div>
                                        <div class="col-md-5 border-right">
                                            <div class="p-3 py-5">
                                                {{-- <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h4 class="text-right">Profile Settings</h4>
                                                </div> --}}
                                                <div class="row mt-2">
                                                    <div class="col-md-6"><label class="labels">الاسم الاول</label><input type="text" class="form-control"  value="حمدان"></div>
                                                    <div class="col-md-6"><label class="labels">الاسم الاخير</label><input type="text" class="form-control" value="على عيد" ></div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-12"><label class="labels">رقم الجوال</label><input type="text" class="form-control"  value="0505595956"></div>
                                                    <div class="col-md-12 mt-3"><label class="labels">البريدالالكترونى</label><input type="text" class="form-control"  value="Hamohamed@gmail.com"></div>
                                                    <div class="row mt-3">
                                                        <div class="col-md-6"><label class="labels">الدولة</label><input type="text" class="form-control"  value="السعودية"></div>
                                                        <div class="col-md-6"><label class="labels">المدينة</label><input type="text" class="form-control" value="الرياض" ></div>
                                                    </div>
                                                    <div class="col-md-12 mt-3"><label class="labels">عنوان الشارع</label><input type="text" class="form-control"  value="شارع عمر ابن الخطاب"></div>
                                                    <div class="col-md-12 mt-3"><label class="labels">رقم الشقة</label><input type="text" class="form-control"  value="8"></div>
                                                    <div class="col-md-12 mt-3"><label class="labels">رمز البريد</label><input type="text" class="form-control" value="17174"></div>
                                                    <div class="col-md-12 mt-3"><label class="labels">رقم الحاسب</label><input type="text" class="form-control"  value="2331"></div>
                                                    
                                                </div>
                                                
                                                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">حفظ</button></div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="p-3 py-5">
                                                <div class="d-flex justify-content-between align-items-center experience"><span>الاشتراكات</span></div><br>
                                                {{-- <div class="col-md-12"><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                                                <div class="col-md-12"><input type="text" class="form-control" placeholder="additional details" value=""></div> --}}
                                         <div class=" col-md-12">
                                            {{-- <div class="row"> --}}
                                                <div class="card  " style="width: 18rem;">
                                                    <img src="{{asset('assets/images/opportunities/muqemm.jpg')}}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                      <h5 class="card-title">خدمة مقيم</h5>
                                                      <p class="card-text">
                                                        <h6>تاريخ الاشتراك:12/2/2021</h6>
                                                        <h6>تاريخ الانتهاء:12/2/2022</h6>
                                                      </p>
                                                    </div>
                                                </div>
                                                <div class="card " style="width: 18rem;">
                                                    <img src="{{asset('assets/images/opportunities/tamm.jpg')}}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                          <h5 class="card-title">خدمة تم</h5>
                                                          <p class="card-text">
                                                            <h6>تاريخ الاشتراك:12/2/2021</h6>
                                                            <h6>تاريخ الانتهاء:12/2/2022</h6>
                                                          </p>
                                                    </div>
                                                </div>          
                                                <div class="card " style="width: 18rem;">
                                                    <img src="{{asset('assets/images/opportunities/shmos.jpg')}}" class="card-img-top" alt="...">
                                                    <div class="card-body">
                                                        <h5 class="card-title">خدمة شموس</h5>
                                                        <p class="card-text">
                                                            <h6>تاريخ الاشتراك:12/2/2021</h6>
                                                            <h6>تاريخ الانتهاء:12/2/2022</h6>
                                                        </p>      
                                                    </div>
                                                </div>
                                            {{-- </div> --}}
                                          </div>
                                        </div>
                                    </div>
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
