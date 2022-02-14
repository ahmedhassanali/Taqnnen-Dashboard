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
<h3>@lang('lang.Customers')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">@lang('lang.Customers')</li>
<li class="breadcrumb-item active">عرض العملاء</li>
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
                <section>
                    <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">

                                        <div class="row">
                                            <div class="form-group mx-2 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for="">الخدمة</label>
                                                <select class="form-select  mb-3 ">
                                                    <option selected  value="1">مقيم</option>
                                                    <option value="2">تم</option>
                                                    <option value="3">شموس</option>
                                                </select>
                                            </div>

                                            <div class="form-group mx-2 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for="">نوع الاشتراك</label>
                                                <select class="form-select mb-3" >
                                                    <option selected value="1">جديد</option>
                                                    <option value="2">منتهى</option>
                                                    <option value="3">نشط</option>
                                                    <option value="3">قارب على الانتهاء</option>
                                                </select>
                                              </div>

                                              <div class="form-group mx-2 my-0 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for="">@lang('lang.computernumber')</label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>

                                              <div class="form-group mx-2 my-4 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for="">@lang('lang.Responsibledelegate')</label>
                                                <input type="text" class="form-control" placeholder="">
                                              </div>

                                            <div class="form-group mx-2 my-4 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for="">@lang('lang.Subscriptionstartdate')</label>
                                                <input type="date" class="form-control" >
                                            </div>

                                            <div class="form-group mx-2 my-4 p-0  mb-3" style="width: 400px; height: 40px">
                                                <label for="">تاريخ انتهاء الاشتراك</label>
                                                <input type="date" class="form-control"  >
                                            </div>

                                            <div class="form-group mx-2 my-4 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for="Paymentdate">@lang('lang.Paymentdate')</label>
                                                <input type="date" class="form-control" id="Paymentdate">
                                            </div>

                                            <div class="form-group mx-2 my-4 p-0 " style="width: 400px; height: 40px">
                                                <label for="">@lang('lang.dateofRegistration')</label>
                                                <input type="date" class="form-control" >
                                            </div>

                                        </div>

                                        <div class="form-group mt-4" style="width: 400px; height: 40px">
                                            <input type="submit" class="btn btn-primary" value="تعديل">
                                            <button  class="btn btn-primary"> اعادة تعين</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>@lang('lang.Name')</th>
                                                        <th>@lang('lang.computernumber')</th>
                                                        <th>@lang('lang.userName')</th>
                                                        <th>تاريخ التسجيل</th>
                                                        <th>اخر الظهور</th>
                                                        <th>@lang('lang.email')</th>
                                                        <th>@lang('lang.phone')</th>
                                                        <th>الخدمات</th>
                                                        <th>مجموع المصروفات</th>
                                                        <th>البلد</th>
                                                        <th>رقم البريد</th>
                                                        <th>@lang('lang.action')</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($i = 0; $i < 50; $i++)
                                                        <tr>
                                                            <td>{{$i}}</td>
                                                            <td> <a href="{{ route('customer-profile') }}">حمدان على عيد</a></td>
                                                            <td>153</td>
                                                            <td>Hamohamed</td>
                                                            <td>02-11-2021</td>
                                                            <td>02-1-2022</td>
                                                            <td>Hamohamed@gmail.com</td>
                                                            <td>0505595956</td>
                                                            <td>3</td>
                                                            <td>11265 SAR</td>
                                                            <td>السعودية</td>
                                                            <td>022565</td>
                                                            <td class="d-flex ">
                                                                <a href="{{ route('marketingwatsapp') }}" class="btn btn-img  p-1">
                                                                    <img style="width:30px" src="{{asset('assets/images/social/whatsapp.png')}}" alt="">
                                                                    </a>
                                                                <a href="{{ route('marketingsms') }}" class="btn btn-img  p-1">
                                                                    <img style="width: 26px" src="{{asset('assets/images/social/telephone.png')}}" alt="">
                                                                    </a>
                                                                <a href="{{ route('marketingsms') }}" class="btn btn-img  p-1">
                                                                    <img class='' style="width:26px" src="{{asset('assets/images/social/comment.png')}}" alt="">
                                                                    </a>
                                                                <a class="btn btn-img p-1" type="button" data-bs-toggle="modal" data-bs-target="#myModal">
                                                                    <img class='' style="width:26px" src="{{asset('assets/images/social/plus.png')}}" alt="">
                                                                </a>                                                           
                                                           </td>
                                                        </tr>
                                                     @endfor
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>@lang('lang.Name')</th>
                                                        <th>@lang('lang.userName')</th>
                                                        <th>تاريخ التسجيل</th>
                                                        <th>اخر الظهور</th>
                                                        <th>@lang('lang.email')</th>
                                                        <th>@lang('lang.phone')</th>
                                                        <th>مجموع المصروفات</th>
                                                        <th>البلد</th>
                                                        <th>المدينة</th>
                                                        <th>المنطقة</th>
                                                        <th>رقم البريد</th>
                                                        <th>@lang('lang.action')</th>
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
<script type="text/javascript">
var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">ملاحظة</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label required">اكتب ملاحظتك هنا</label>
                        <textarea class="form-control"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">حفظ</button>
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>



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
