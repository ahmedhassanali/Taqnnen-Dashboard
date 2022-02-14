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
<h3>الاشتراكات</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">الاشتراكات</li>
<li class="breadcrumb-item active">عرض الاشتراكات</li>
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
                                    {{-- <div class="card-header">
                                        <h5>@lang('lang.Opportunities')</h5>
                                    </div> --}}
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم العميل</th>
                                                        <th>تاريخ الانتهاء</th>
                                                        <th>حالة الاشتراك</th>
                                                        <th>نوع الاشتراك</th>
                                                        <th>الاجمالى</th>
                                                        <th>العمولة</th>
                                                        <th>عمولة المندوب</th>
                                                        <th>اجراء</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($i = 0; $i < 50; $i++)
                                                        <tr>
                                                            <td>1</td>
                                                            <td>حسان احمد حمدان</td>
                                                            <td>02-11-2021</td>
                                                            <td><span class="badge bg-success " style="font-size: 17px">نشط</span></td>

                                                            <td>جديد</td>
                                                            <td>1265 SAR</td>
                                                            <td>500 SAR</td>
                                                            <td>100 SAR</td>
                                                            <td><a class="btn btn-primary" href="{{route('invoice')}}">طباعة</a>
                                                        </tr>
                                                     @endfor
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم العميل</th>
                                                        <th>تاريخ التجديد</th>
                                                        <th>حالة الاشتراك</th>
                                                        <th>نوع الاشتراك</th>
                                                        <th>الاجمالى</th>
                                                        <th>العمولة</th>
                                                        <th>عمولة المندوب</th>
                                                        <th>اجراء</th>
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
