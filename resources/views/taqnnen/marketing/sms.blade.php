@extends('layouts.simple.master')
@section('title', 'Email Compose')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3> ارسال رسالة SMS </h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">التسويق</li>
<li class="breadcrumb-item active"> ارسال رسالة SMS</li>

@endsection

@section('content')
<div class="container-fluid">
    <div class="email-wrap">
       <div class="row">
          <div class="col-xl-6 col-md-12 box-col-12">
             <div class="email-right-aside">
                <div class="card email-body radius-left">
                   <div class="ps-0">
                      <div class="tab-content">
                         <div class="tab-pane fade active show" id="pills-darkhome" role="tabpanel" aria-labelledby="pills-darkhome-tab">
                            <div class="email-compose">
                               
                               <div class="email-wrapper">
                                  <form class="theme-form">
                                      <label for="">عملاء خدمة</label>
                                      <select class="form-select mb-3" >
                                         <option selected value="1">مقيم</option>
                                         <option value="1">تم</option>
                                         <option value="2">شموس</option>
                                         <option value="3">راية</option>
                                         <option value="4">مسارات</option>
                                       </select>

                                       <label for="">حالة الاشتراك</label>
                                       <select class="form-select mb-3" >
                                         <option selected value="1">نشط</option>
                                         <option value="2">منتهي</option>
                                       </select>                            
                                
                                       <div class="row">
                                            <div class=" col-md-6">
                                            <label for=""> تاريخ الانتهاء  من</label>
                                            <input type="date" class="form-control" name="" id="">
                                           </div>
                                           <div class=" col-md-6">
                                            <label for="">الى</label>
                                            <input type="date" class="form-control" name="" id="">
                                           </div>
                                       </div>


                                        <div class="row">
                                            <div class=" col-md-6">
                                            <label for=""> تاريخ الاشتراك  من</label>
                                            <input type="date" class="form-control" name="" id="">
                                            </div>
                                            <div class=" col-md-6">
                                            <label for="">الى</label>
                                            <input type="date" class="form-control" name="" id="">
                                            </div>
                                        </div>



                                    <div class="row mb-3">
                                        <div class=" col-md-6">
                                        <label for=""> تاريخ التجديد القادم  من</label>
                                        <input type="date" class="form-control" name="" id="">
                                        </div>
                                        <div class=" col-md-6">
                                        <label for="">الى</label>
                                        <input type="date" class="form-control" name="" id="">
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-block btn-mail text-center mb-3 mt-0 w-100"  type="button"><i class="fa fa-plus me-2"></i>اضافة</button>

                                    </form>
                                  <table class="table table-striped">
                                     <thead>
                                       <tr>
                                         <th>#</th>
                                         <th>  <input type="checkbox" name="" id="">تحديد </th> 
                                         <th>@lang('lang.Name')</th>
                                         <th>@lang('lang.phone')</th>
                                         <th>@lang('lang.address')</th>
                                         <th>اجراء</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                         @for ($i = 0; $i < 15; $i++)
                                         <tr>
                                             <td>{{$i+1}}</td>
                                             <td><input type="checkbox" name="" id=""> </td>
                                             <td>حمدان على عيد</td>
                                             <td>0505595956</td>
                                             <td>السعودية</td>
                                             <td class="d-flex ">
                                                 <a href="#" class="btn btn-danger mx-2  p-2">
                                                     <i class="bi bi-trash"></i>
                                                     @lang('lang.delete')
                                                </a>
                                             </td>
                                         </tr>
                                      @endfor
                                     </tbody>
                                   </table>
                               </div>   
                            </div>
                         </div>
                         
                         <div class="tab-pane fade" id="pills-darkprofile" role="tabpanel" aria-labelledby="pills-darkprofile-tab">
                            <div class="email-content">
                               <div class="email-top">
                                  <div class="row">
                                     <div class="col-md-6 xl-100 col-sm-12">
                                        <div class="media">
                                           <img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="">
                                           <div class="media-body">
                                              <h6>Lorm lpsa  <small><span>(20</span> January) <span>6:00</span> AM</small></h6>
                                              <p>Mattis luctus. Donec nisi diam text.</p>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6 xl-100 col-sm-12">
                                        <div class="float-end d-flex">
                                           <p class="user-emailid">Lormlpsa<span>23</span>@company.com</p>
                                           <i class="fa fa-star-o f-18 mt-1"></i>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="email-wrapper">
                                  <p>Hello</p>
                                  <p>Dear Sir Good Morning,</p>
                                  <h5>Elementum varius nisi vel tempus. Donec eleifend egestas viverra.</h5>
                                  <p class="m-b-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non diam facilisis, commodo libero et, commodo sapien. Pellentesque sollicitudin massa sagittis dolor facilisis, sit amet vulputate nunc molestie. Pellentesque maximus nibh id luctus porta. Ut consectetur dui nec nulla mattis luctus. Donec nisi diam, congue vitae felis at, ullamcorper bibendum tortor. Vestibulum pellentesque felis felis. Etiam ac tortor felis. Ut elit arcu, rhoncus in laoreet vel, gravida sed tortor.</p>
                                  <p>In elementum varius nisi vel tempus. Donec eleifend egestas viverra. Donec dapibus sollicitudin blandit. Donec scelerisque purus sit amet feugiat efficitur. Quisque feugiat semper sapien vel hendrerit. Mauris lacus felis, consequat nec pellentesque viverra, venenatis a lorem. Sed urna lectus.Quisque feugiat semper sapien vel hendrerit</p>
                                  <hr>
                                  <div class="d-inline-block">
                                     <h6 class="text-muted"><i class="icofont icofont-clip"></i> ATTACHMENTS</h6>
                                     <a class="text-muted text-end right-download" href="#"><i class="fa fa-long-arrow-down me-2"></i>Download All</a>
                                     <div class="clearfix"></div>
                                  </div>
                                  <div class="attachment">
                                     <ul class="list-inline">
                                        <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/1.jpg')}}" alt=""></li>
                                        <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/2.jpg')}}" alt=""></li>
                                        <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/3.jpg')}}" alt=""></li>
                                     </ul>
                                  </div>
                                  <hr>
                                  <div class="action-wrapper">
                                     <ul class="actions">
                                        <li><a class="text-muted" href="#"><i class="fa fa-reply me-2"></i>Reply</a></li>
                                        <li><a class="text-muted" href="#"><i class="fa fa-reply-all me-2"></i>Reply All</a></li>
                                        <li><a class="text-muted" href="#"><i class="fa fa-share me-2"></i></a>Forward</li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="col-xl-6 col-md-12 box-col-12">
             <div class="email-right-aside">
                <div class="card email-body radius-left">
                   <div class="ps-0">
                      <div class="tab-content">
                         <div class="tab-pane fade active show" id="pills-darkhome" role="tabpanel" aria-labelledby="pills-darkhome-tab">
                            <div class="email-compose">
                               <div class="email-top compose-border">
                                  <div class="row">
                                     <div class="col-sm-8 xl-50">
                                        <h4 class="mb-0">رسالة جديدة</h4>
                                     </div>
                                     <div class="col-sm-4 btn-middle xl-50">
                                        <button class="btn btn-primary btn-block btn-mail text-center mb-0 mt-0 w-100" type="button"><i class="fa fa-paper-plane me-2"></i>ارسال</button>
                                     </div>
                                  </div>
                               </div>
                               <div class="email-wrapper">
                                  <form class="theme-form">
                                     <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">الى</label>
                                        <input class="form-control" id="exampleInputEmail1" type="email">
                                     </div>
                                     <div class="mb-3">
                                        <label for="exampleInputPassword1">الموضوع</label>
                                        <input class="form-control" id="exampleInputPassword1" type="text">
                                     </div>
                                     <div>
                                        <label class="text-muted">الرسالة</label>
                                        <textarea id="text-box" name="text-box" cols="10" rows="2">                                                            </textarea>
                                     </div>
                                  </form>
                               </div>
                            </div>
                         </div>
                         <div class="tab-pane fade" id="pills-darkprofile" role="tabpanel" aria-labelledby="pills-darkprofile-tab">
                            <div class="email-content">
                               <div class="email-top">
                                  <div class="row">
                                     <div class="col-md-6 xl-100 col-sm-12">
                                        <div class="media">
                                           <img class="me-3 rounded-circle" src="{{asset('assets/images/user/user.png')}}" alt="">
                                           <div class="media-body">
                                              <h6>Lorm lpsa  <small><span>(20</span> January) <span>6:00</span> AM</small></h6>
                                              <p>Mattis luctus. Donec nisi diam text.</p>
                                           </div>
                                        </div>
                                     </div>
                                     <div class="col-md-6 xl-100 col-sm-12">
                                        <div class="float-end d-flex">
                                           <p class="user-emailid">Lormlpsa<span>23</span>@company.com</p>
                                           <i class="fa fa-star-o f-18 mt-1"></i>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="email-wrapper">
                                  <p>Hello</p>
                                  <p>Dear Sir Good Morning,</p>
                                  <h5>Elementum varius nisi vel tempus. Donec eleifend egestas viverra.</h5>
                                  <p class="m-b-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non diam facilisis, commodo libero et, commodo sapien. Pellentesque sollicitudin massa sagittis dolor facilisis, sit amet vulputate nunc molestie. Pellentesque maximus nibh id luctus porta. Ut consectetur dui nec nulla mattis luctus. Donec nisi diam, congue vitae felis at, ullamcorper bibendum tortor. Vestibulum pellentesque felis felis. Etiam ac tortor felis. Ut elit arcu, rhoncus in laoreet vel, gravida sed tortor.</p>
                                  <p>In elementum varius nisi vel tempus. Donec eleifend egestas viverra. Donec dapibus sollicitudin blandit. Donec scelerisque purus sit amet feugiat efficitur. Quisque feugiat semper sapien vel hendrerit. Mauris lacus felis, consequat nec pellentesque viverra, venenatis a lorem. Sed urna lectus.Quisque feugiat semper sapien vel hendrerit</p>
                                  <hr>
                                  <div class="d-inline-block">
                                     <h6 class="text-muted"><i class="icofont icofont-clip"></i> ATTACHMENTS</h6>
                                     <a class="text-muted text-end right-download" href="#"><i class="fa fa-long-arrow-down me-2"></i>Download All</a>
                                     <div class="clearfix"></div>
                                  </div>
                                  <div class="attachment">
                                     <ul class="list-inline">
                                        <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/1.jpg')}}" alt=""></li>
                                        <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/2.jpg')}}" alt=""></li>
                                        <li class="list-inline-item"><img class="img-fluid" src="{{asset('assets/images/email/3.jpg')}}" alt=""></li>
                                     </ul>
                                  </div>
                                  <hr>
                                  <div class="action-wrapper">
                                     <ul class="actions">
                                        <li><a class="text-muted" href="#"><i class="fa fa-reply me-2"></i>Reply</a></li>
                                        <li><a class="text-muted" href="#"><i class="fa fa-reply-all me-2"></i>Reply All</a></li>
                                        <li><a class="text-muted" href="#"><i class="fa fa-share me-2"></i></a>Forward</li>
                                     </ul>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection

@section('script')
<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
<script src="{{asset('assets/js/email-app.js')}}"></script>
@endsection