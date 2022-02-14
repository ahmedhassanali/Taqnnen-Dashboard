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
<li class="breadcrumb-item ">اشتراكات</li>
<li class="breadcrumb-item active">اضافة اشتراك جديد</li>
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
                          
                                <div class="container rounded bg-white mt-5 ">
                                    <div class="row">
                                        <div class="col-md-6 border-right ">
                                            <h1>اضافة اشتراك</h1>

                                            <div class="mt-3 my-3">
                                                <label for="">حالة الاشتراك</label>   
                                                <select class="form-select   " >
                                                    <option selected value="2">فى انتنظار استلام الاوراق</option>
                                                    <option value="1">فى انتظار مراجعة الاوراق</option>
                                                    <option value="3">تم ارسال الاوراق لعلم</option>
                                                    <option value="4">فى ارسال الاوراق الاصلية</option>
                                                    <option value="5">نشط</option>
                                                    <option value="6">مرفوض</option>
                                                  </select>
                                            </div>
                                            

                                             

                                              <div class=" form-group d-flex mb-3">
                                                <div class="col-md-6 " >
                                                    <input type="text" id="inputName" class="form-control" placeholder="اسم العميل">
                                                </div>
                                                <button class="btn btn-primary mx-1" >تحميل</button>
                                                <button class="btn btn-primary mx-1 " data-bs-toggle="modal" data-bs-target="#myModal" >اضافة عميل جديد</button>
                                              </div>


                                              <div class="form-group mb-3">
                                                <label class="my-2" for="inputName">المندوب المسؤول</label>
                                                <input type="text" id="inputName" class="form-control disabled" value="احمد محمد على">
                                            </div>

                                            <div class=" my-3">
                                                <label for="">المصدر</label>  
                                                <select class="form-select mb-3" >
                                                    <option selected value="1">فيسبوك</option>
                                                    <option value="2">جوجل</option>
                                                </select>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6"><label class="labels">الخدمة</label>
                                                    <select class="form-select mb-3" >
                                                        <option selected value="1">مقيم</option>
                                                        <option value="2">تم</option>
                                                        <option value="3">شمول</option>
                                                        <option value="4">راية</option>
                                                      </select>
                                                </div>

                                                <div class="col-md-6"><label class="labels">الباقة</label>
                                                    <select class="form-select mb-3" >
                                                        <option selected value="1">الباقة الاولى-شامل</option>
                                                        <option value="2">الباقة الاولى - عمليات</option>
                                                        <option value="3">الباقة الثانية - شامل </option>
                                                        <option value="4">الباقة الثانية - عمليات</option>
                                                        <option value="5">الباقة الثالة - شامل </option>
                                                        <option value="6">الباقة الثالثة - عمليات</option>
                                                      </select>
                                                </div>
                                            </div>

                                            <div class="row ">
                                                <div class="col-md-6"><label class="labels">السعر</label><input type="text" class="form-control disabled"  value="2260 SAR"></div>
                                                <div class="col-md-6"><label class="labels">الضرائب</label><input type="text" class="form-control disabled" value="80 SAR" ></div>
                                            </div>

                                            <div class="row mt-2">
                                                <div class="col-md-6"><label class="labels">مصاريف اضافية</label>
                                                    <select  class=" form-select multiple "   >
                                                        <option value="1">رسوم اوراق خدمة مقيم</option>
                                                        <option value="2">رسوم اوراق خدمة مقيم</option>
                                                        <option value="3">رسوم اوراق خدمة مقيم</option>
                                                        <option value="4">رسوم اوراق خدمة مقيم</option>
                                                      </select>
                                                </div>
                                                <div class="col-md-6"><label class="labels">الاجمالى</label><input type="text" class="form-control disabled" value="2340 SAR" ></div>
                                            </div>

                                            <div class="form-group mb-3">
                                                <label class="my-2" for="inputName">تاريخ التجديد</label>
                                                <input type="date" id="inputName" class="form-control" placeholder="">
                                            </div>

                                            <div class="mt-3 my-3">
                                              <label for="">طريقة السداد</label>   
                                              <select class="form-select mb-3" >
                                                <option selected value="1">تحويل الى تقنين</option>
                                                <option value="2">تعميد لعلم</option>
                                                <option value="2">سداد مباشر</option>
                                              </select>
                                            </div>
                                            
                                            <div class="form-group mb-3">
                                                <label class="my-2" for="inputName">تاريخ السداد</label>
                                                <input type="date" id="inputName" class="form-control">
                                            </div>

                                            <div class="mt-3 my-3">
                                                <label for="">حالة الاوراق</label>  
                                                <select class="form-select mb-3" >
                                                    <option selected value="1">تم الاستلام</option>
                                                    <option value="2">لم يتم الاستلام </option>
                                                </select>
                                            </div>

                                             

                                              
                                              <div>
                                                <div class="d-inline-block">
                                                   <h6 class="text-muted"><i class="icofont icofont-clip"></i> المرفقات</h6>
                                                   <a class="text-muted text-end right-download" href="#"><i class="fa fa-long-arrow-down me-2"></i>تحميل الكل</a>
                                                   <div class="clearfix"></div>
                                                </div>
                                                <div class="attachment">
                                                   <ul class="list-inline">
                                                      <li class="list-inline-item" style="width: 120px"><img class="img-fluid" src="{{asset('assets/images/email/1.jpg')}}" alt=""></li>
                                                      <li class="list-inline-item"style="width: 120px"><img class="img-fluid" src="{{asset('assets/images/email/2.jpg')}}" alt=""></li>
                                                      <li class="list-inline-item"style="width: 120px"><img class="img-fluid" src="{{asset('assets/images/email/3.jpg')}}" alt=""></li>
                                                   </ul>
                                                </div>


                                              </div>
                                              <textarea class="form-control my-3" placeholder="ملاحظة"></textarea>



                                        </div>
                                        <div class="col-md-6 border-right">
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

{{-- pop up add new customer --}}
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">اضافة عميل جديد</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels">الاسم الاول</label><input type="text" class="form-control"  value=""></div>
                        <div class="col-md-6"><label class="labels">الاسم الاخير</label><input type="text" class="form-control" value="" ></div>
                    </div>
                
                    <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">رقم الجوال</label><input type="text" class="form-control"  value=""></div>
                    <div class="col-md-12 mt-3"><label class="labels">البريدالالكترونى</label><input type="text" class="form-control"  value=""></div>
                
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">الدولة</label><input type="text" class="form-control"  value=""></div>
                        <div class="col-md-6"><label class="labels">المدينة</label><input type="text" class="form-control" value="" ></div>
                    </div>

                    <div class="col-md-12 mt-3"><label class="labels">عنوان الشارع</label><input type="text" class="form-control"  value=""></div>
                    <div class="col-md-12 mt-3"><label class="labels">رقم الشقة</label><input type="text" class="form-control"  value=""></div>
                    <div class="col-md-12 mt-3"><label class="labels">رمز البريد</label><input type="text" class="form-control" value=""></div>
                    <div class="col-md-12 mt-3"><label class="labels">رقم الحاسب</label><input type="text" class="form-control"  value=""></div>
                </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">اضافة</button>
            </div>
        </div>
    </div>
</div>

<script>
    
1
2
3
4
5
6
7
8
9
<script type="text/javascript">
 
    $(document).ready(function() {
 
        $('#multi-select-demo').multiselect();
 
    });
 
</script>
</script>
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
