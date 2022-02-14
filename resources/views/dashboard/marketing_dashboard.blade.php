@extends('layouts.simple.master')
@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/calendar.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>@lang('lang.Dashboard')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">الدعم الفنى</li>

@endsection

@section('content')

    <section class="section">


        <h6 id="greeting" class="invisible"></h6>
        <div class="col-xl-12 xl-100 chart_data_left box-col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row m-0 chart-main">
                        <div class="row m-0 p-tb">
                            <div class="col-xl-8 col-md-8 col-sm-8 col-12 p-0">
                                <div class="inner-top-left">
                                    <ul class="d-flex  list-unstyled">
                                        <li class="m-5 p-3">يومى</li>
                                        <li class="active p-3 m-5">اسبوعى</li>
                                        <li class="m-5 p-3">شهرى</li>
                                        <li class="m-5 p-3">سنوى</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                            <div class="media align-items-center">
                                <div class="hospital-small-chart">
                                    <div class="small-bar">
                                        <div class="small-chart flot-chart-container"></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="right-chart-content">
                                        <h4>1001</h4>
                                        <span>الاشتراكات النشطة </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">

                                    <div class="media align-items-center">
                                        <div class="media-body right-chart-content">
                                            <h4> 95,900 <h6>SAR</h6></h4>
                                            <span>قيمة الاشتراكات النشطة</span>
                                        </div>
                                        <div class="knob-block text-center">
                                            <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#7366ff" data-bgcolor="#eef5fb" value="60">
                                        </div>
                                    </div>

                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                            <div class="media align-items-center">
                                <div class="hospital-small-chart">
                                    <div class="small-bar">
                                        <div class="small-chart1 flot-chart-container"></div>
                                    </div>
                                </div>
                                <div class="media-body">
                                    <div class="right-chart-content">
                                        <h4>1005</h4>
                                        <span>الاشتراكات المنتهية</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">

                                    <div class="media align-items-left">
                                        <div class="media-body right-chart-content">
                                            <h4>45,100 <h6>SAR</h6></h4>
                                            <span>قيمة الاشتراكات المنتهية</span>
                                        </div>
                                        <div class="knob-block text-left">
                                            <input class="knob1" data-width="10" data-height="70" data-thickness=".3" data-angleoffset="0" data-linecap="round" data-fgcolor="#FF0000" data-bgcolor="#eef5fb" value="40">
                                        </div>
                                    </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row " style="height: 520px">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12  ">
                <section class="vh-100 gradient-custom">
                <div class="container  h-100">
                    <div class="row d-flex h-100">
                    <div class="col col-xl-12">

                        <div class="card">
                        <div class="card-body ">

                            <form class="d-flex justify-content-center align-items-center mb-4">
                            <div class="form-outline flex-fill mt-4">
                                <input type="text" id="form2" class="form-control" />
                                <label class="form-label" for="form2">مهمة جديده</label>
                            </div>
                            <button type="submit" class="btn btn-info ms-2 o">اضافة</button>
                            </form>

                            <!-- Tabs navs -->
                            <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                                aria-controls="ex1-tabs-1" aria-selected="true">الكل</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                                aria-controls="ex1-tabs-2" aria-selected="false">النشط</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
                                aria-controls="ex1-tabs-3" aria-selected="false">تم الانتهاء</a>
                            </li>
                            </ul>
                            <!-- Tabs navs -->

                            <!-- Tabs content -->
                            <div class="tab-content" id="ex1-content">
                            <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                <ul class="list-group mb-0">
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                                    <s>Cras justo odio</s>
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                                    <s>Dapibus ac facilisis in</s>
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-0 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                    Vestibulum at eros
                                </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                <ul class="list-group mb-0">
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                    Morbi leo risus
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                    Porta ac consectetur ac
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-0 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." />
                                    Vestibulum at eros
                                </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                <ul class="list-group mb-0">
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                                    <s>Cras justo odio</s>
                                </li>
                                <li class="list-group-item d-flex align-items-center border-0 mb-2 rounded" style="background-color: #f4f6f7;">
                                    <input class="form-check-input me-2" type="checkbox" value="" aria-label="..." checked />
                                    <s>Dapibus ac facilisis in</s>
                                </li>
                                </ul>
                            </div>
                            </div>
                            <!-- Tabs content -->

                        </div>
                        </div>

                    </div>
                    </div>
                </div>
                </section>
                  
            </div>

            <div class="col-sm-12 col-xl-4 box-col-6" >
                <div class="card" style="height: 485px">
                    <div class="card-header">
                        <h5>Pie Chart <span class="digits">4</span></h5>
                    </div>
                    <div class="card-body p-0 chart-block">
                        <div class="chart-overflow" id="pie-chart2"></div>
                    </div>
                </div>
            </div>  
        </div>

        <div class="row " style="height: 520px">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12  ">
                <section class="vh-100 gradient-custom">
                <div class="container  h-100">
                    <div class="row d-flex h-100">
                    <div class="col col-xl-12">

                        <div class="card">
                        <div class="card-body ">

                          

                            <!-- Tabs navs -->
                            <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                                    aria-controls="ex1-tabs-1" aria-selected="true">مهامى</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-2" data-mdb-toggle="tab" href="#ex1-tabs-2" role="tab"
                                    aria-controls="ex1-tabs-2" aria-selected="false">مذكراتي</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="ex1-tab-3" data-mdb-toggle="tab" href="#ex1-tabs-3" role="tab"
                                    aria-controls="ex1-tabs-3" aria-selected="false">التنبهات</a>
                                </li>
                            </ul>
                            <!-- Tabs navs -->

                            <!-- Tabs content -->
                            <div class="tab-content" id="ex1-content">
                                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>الموضوع</th> 
                                            <th>الحالة</th>
                                            <th>الاولوية</th>
                                           
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < 6; $i++)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>اضافة عملاء جدد</td>
                                                <td>هام</td>
                                                <td>نشط</td>
                                            </tr>
                                         @endfor
                                        </tbody>
                                      </table>
                                </div>
                                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                    
                                </div>
                                <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                    
                                </div>
                            </div>
                            <!-- Tabs content -->

                        </div>
                        </div>

                    </div>
                    </div>
                </div>
                </section>
                  
            </div>

            <div class="col-sm-12 col-xl-4 box-col-6">
                <div class="card" style="height: 485px">
                    <div class="card-header">
                        <h5>Pie Chart <span class="digits">1</span></h5>
                    </div>
                    <div class="card-body p-0 chart-block">
                        <div class="chart-overflow" id="pie-chart1"></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row " style="height: 520px">
            <div class="col-lg-8 col-md-12 col-12 col-sm-12  ">
                <section class="vh-100 gradient-custom">
                <div class="container  h-100">
                    <div class="row d-flex h-100">
                    <div class="col col-xl-12">

                        <div class="card">
                        <div class="card-body ">

                            <form class="d-flex justify-content-center align-items-center mb-4">
                            <div class="form-outline flex-fill mt-4">
                                <input type="text" id="form2" class="form-control" />
                                <label class="form-label" for="form2">اضافة هدف جديد</label>
                            </div>
                            <button type="submit" class="btn btn-info ms-2 o">اضافة</button>
                            </form>

                            
                            <!-- Tabs navs -->
                            <ul class="nav nav-tabs mb-4 pb-2" id="ex1" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="ex1-tab-1" data-mdb-toggle="tab" href="#ex1-tabs-1" role="tab"
                                    aria-controls="ex1-tabs-1" aria-selected="true">الاهداف</a>
                                </li>
                                
                            </ul>
                            <!-- Tabs navs -->

                            <!-- Tabs content -->
                            <div class="tab-content" id="ex1-content">
                                <div class="tab-pane fade show active" id="ex1-tabs-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                                    <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>الموضوع</th> 
                                            <th>الحالة</th>
                                            <th>الاولوية</th>
                                           
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @for ($i = 0; $i < 4; $i++)
                                            <tr>
                                                <td>{{$i+1}}</td>
                                                <td>اضافة عملاء جدد</td>
                                                <td>هام</td>
                                                <td>نشط</td>
                                            </tr>
                                         @endfor
                                        </tbody>
                                      </table>
                                </div>
                                <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                                    
                                </div>
                                <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                                    
                                </div>
                            </div>
                            <!-- Tabs content -->
                           
                       
                            <!-- Tabs content -->

                        </div>
                        </div>

                    </div>
                    </div>
                </div>
                </section>
                  
            </div>

            <div class="col-sm-12 col-xl-4 box-col-6">
                <div class="card" style="height: 485px">
                    <div class="card-header">
                        <h5>Pie Chart <span class="digits">2</span></h5>
                    </div>
                    <div class="card-body p-0 chart-block">
                        <div class="chart-overflow" id="pie-chart3"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row " style="height: 820px">
            <div class="col-lg-12 col-md-12 col-12 col-sm-12  ">
                <section class="vh-100 gradient-custom">
                <div class="container  ">
                    <div class="row d-flex ">
                    <div class="col col-xl-12">

                        <div class="card box-shadow-title">
                            <div class="card-header">
                                <h5>التقويم</h5>
                            </div>
                            <div class="d-flex event-calendar">
                                <div id="lnb">
                                    <div class="lnb-new-schedule text-center">
                                        <button class="btn btn-primary" id="btn-new-schedule" type="button" data-bs-toggle="modal">New schedule</button>
                                    </div>
                                    <div class="lnb-calendars" id="lnb-calendars">
                                        <div>
                                            <div class="lnb-calendars-item">
                                                <label>
                                                <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all" checked=""><span></span><strong>View all</strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="lnb-calendars-d1" id="calendarList"></div>
                                    </div>
                                </div>
                                <div id="right">
                                    <div id="menu">
                                        <div class="dropdown d-inline">
                                            <button class="btn btn-default btn-sm dropdown-toggle" id="dropdownMenu-calendarType" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="calendar-icon ic_view_month" id="calendarTypeIcon" style="margin-right: 4px;"></i><span id="calendarTypeName">Dropdown</span><i class="calendar-icon tui-full-calendar-dropdown-arrow"></i></button>
                                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily"><i class="calendar-icon ic_view_day"></i>Daily</a></li>
                                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly"><i class="calendar-icon ic_view_week"></i>Weekly</a></li>
                                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly"><i class="calendar-icon ic_view_month"></i>Month</a></li>
                                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2"><i class="calendar-icon ic_view_week"></i>2 weeks</a></li>
                                                <li role="presentation"><a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3"><i class="calendar-icon ic_view_week"></i>3 weeks</a></li>
                                                <li class="dropdown-divider" role="presentation"></li>
                                                <li role="presentation"><a role="menuitem" data-action="toggle-workweek"></a>
                                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-workweek" checked=""><span class="checkbox-title"></span>Show weekends
                                                </li>
                                                <li role="presentation"><a role="menuitem" data-action="toggle-start-day-1"></a>
                                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-start-day-1"><span class="checkbox-title"></span>Start Week on Monday
                                                </li>
                                                <li role="presentation"><a role="menuitem" data-action="toggle-narrow-weekend"></a>
                                                    <input class="tui-full-calendar-checkbox-square" type="checkbox" value="toggle-narrow-weekend"><span class="checkbox-title"></span>Narrower than weekdays
                                                </li>
                                            </ul>
                                        </div>
                                        <span id="menu-navi">
                                        <button class="btn btn-default btn-sm move-today" type="button" data-action="move-today">Today</button>
                                        <button class="btn btn-default btn-sm move-day" type="button" data-action="move-prev"><i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i></button>
                                        <button class="btn btn-default btn-sm move-day" type="button" data-action="move-next"><i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i></button></span><span class="render-range" id="renderRange"></span>
                                    </div>
                                    <div id="calendar"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
                </section>
                  
            </div>

           
        </div>



    </section>

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
<script src="{{asset('assets/js/chart/google/google-chart-loader.js')}}"></script>
<script src="{{asset('assets/js/chart/google/google-chart.js')}}"></script>
<script src="{{asset('assets/js/calendar/tui-code-snippet.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/tui-time-picker.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/tui-date-picker.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/chance.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/tui-calendar.js')}}"></script>
<script src="{{asset('assets/js/calendar/calendars.js')}}"></script>
<script src="{{asset('assets/js/calendar/schedules.js')}}"></script>
<script src="{{asset('assets/js/calendar/app.js')}}"></script>
@endsection

