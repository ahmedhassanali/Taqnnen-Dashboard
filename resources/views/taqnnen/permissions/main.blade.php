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
<h3>@lang('lang.permissions')</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">@lang('lang.Dashboard')</li>
<li class="breadcrumb-item active">@lang('lang.permissions')</li>
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
                    <div class="col-md-12">
                        <div class="card">
                          {{-- <div class="card-header">
                                
                          </div> --}}
                      <div class="card-body">
                        <div class="d-flex">
                            <div class=" col-md-5 me-5">
                                <form action="#" method="get" class="mb-3">
                                        <div class=" d-flex">
                                            <input type="text" name="search" class="form-control" placeholder="@lang('lang.search')">
                                            <button type="submit" class="btn btn-primary ms-3"><i class="fa fa-search"></i> @lang('lang.search')</button>
                                    </div>
                                </form><!-- end of form -->
                            </div>
                            <div class=" col-md-5">
                                <form action="#" method="get" class="mb-3">
                                        <div class=" d-flex">
                                            <input type="text" name="search" class="form-control" placeholder="@lang('lang.add')">
                                            <button type="submit" class="btn btn-primary  ms-3"><i class="fa fa-plus"></i> @lang('lang.add')</button>
                                        </div>
                                </form><!-- end of form -->
                            </div>
                         </div>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th style="width: 10px">#</th>
                                  <th>@lang('lang.role')</th>
                                  <th>@lang('lang.permissions')</th>
                                </tr>
                              </thead>
                              <tbody>
                                  @php
                                    $models = ['مسؤل','مشرف','مشاهد','مصمم'];
                                    $map=['read','create','delete','update'];
                                  @endphp
                                @foreach ($models as  $index=>$item)
                                <tr>
                                    <td>{{$index+1}}</td>
                                    <td>  {{$item}} </td>
                                    <td>
                                        <ul class="nav nav-pills mb-3 mx-0 px-0 " id="pills-tabb" role="tablist">
                                            <li class="nav-item mx-1" role="presentation">
                                                <button class="nav-link mx-0 py-0 active" id="pills-aa-{{$item}}-tab" data-bs-toggle="pill" data-bs-target="#pills-aa-{{$item}}" type="button" role="tab" aria-controls="pills-home" aria-selected="true">@lang('lang.Services')</button>
                                            </li>
                                            <li class="nav-item mx-1 " role="presentation">
                                                <button class="nav-link py-0 " id="pills-bb-{{$item}}-tab" data-bs-toggle="pill" data-bs-target="#pills-bb-{{$item}}" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">@lang('lang.users')</button>
                                            </li>
                                            <li class="nav-item mx-1" role="presentation">
                                                <button class="nav-link py-0" id="pills-cc-{{$item}}-tab" data-bs-toggle="pill" data-bs-target="#pills-cc-{{$item}}" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">@lang('lang.Opportunities')</button>
                                            </li>
                                            <li class="nav-item mx-1" role="presentation">
                                                <button class="nav-link py-0" id="pills-dd-{{$item}}-tab" data-bs-toggle="pill" data-bs-target="#pills-dd-{{$item}}" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">@lang('lang.reporting')</button>
                                            </li>
                                        </ul>
                                        <div class='d-flex justify-content-between' >
                                        <div class="tab-content " id="pills-tabbContent">
                                            <div class="tab-pane fade show active " id="pills-aa-{{$item}}" role="tabpanel" aria-labelledby="pills-aa-{{$item}}-tab">
                                                @foreach ($map as $index=>$m)
                                                    <input type="checkbox"  class="form-check-input" id="{{$m}}">
                                                    <label class="form-check-label"  for="{{$m}}">@lang('lang.'.$m)</label>
                                                @endforeach
                                            </div>
                                            <div class="tab-pane fade " id="pills-bb-{{$item}}" role="tabpanel" aria-labelledby="pills-bb-{{$item}}-tab">
                                                @foreach ($map as $index=>$m)
                                                    <input type="checkbox"   class="form-check-input " id="{{$m}}">
                                                    <label class="form-check-label"  for="{{$m}}">@lang('lang.'.$m)</label>
                                                @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="pills-cc-{{$item}}" role="tabpanel" aria-labelledby="pills-cc-{{$item}}-tab">
                                                @foreach ($map as $index=>$m)
                                                    <input type="checkbox"   class="form-check-input" id="{{$m}}">
                                                    <label class="form-check-label"  for="{{$m}}">@lang('lang.'.$m)</label>
                                                    @endforeach
                                            </div>
                                            <div class="tab-pane fade" id="pills-dd-{{$item}}" role="tabpanel" aria-labelledby="pills-dd-{{$item}}-tab">
                                                @foreach ($map as $index=>$m)
                                                    <input type="checkbox"   class="form-check-input" id="{{$m}}">
                                                    <label class="form-check-label"  for="{{$m}}">@lang('lang.'.$m)</label>
                                                    @endforeach
                                            </div>
                                          </div>
                                          <div class="mx-0 mt-0 ">
                                            <a class="btn btn-primary btn-sm"href="#"><i class="fa fa-pencil-alt"></i>@lang('lang.edit')</a>
                                            <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash mx-1"></i>@lang('lang.delete')</a>
                                           </div>
                                    </div>
                                    </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
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
