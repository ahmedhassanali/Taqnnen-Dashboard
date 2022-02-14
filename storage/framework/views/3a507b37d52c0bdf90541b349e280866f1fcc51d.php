<?php $__env->startSection('title', 'Invoice'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>الفاتورة</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">الاشتراكات</li>
<li class="breadcrumb-item active">الفاتورة</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-body">
               <div class="invoice">
                  <div>
                     <div>
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="media">
                                 <div class="media-left"><img class="media-object img-60" src="<?php echo e(asset('assets/images/other-images/logo.png')); ?>" alt=""></div>
                                 <div class="media-body m-l-20 text-right">
                                    <h4 class="media-heading">الشركة الوطنية </h4>
                                    <p>hello@elwatnia.in<br><span>286503</span></p>
                                 </div>
                              </div>
                              <!-- End Info-->
                           </div>
                           <div class="col-sm-6">
                              <div class="text-md-end text-xs-center">
                                 <h3>عرض سعر <span class="counter">1069</span>#</h3>
                                 <p>التاريخ: May<span> 27, 2015</span><br></p>
                              </div>
                              <!-- End Title-->
                           </div>
                        </div>
                     </div>
                     <hr>
                     
                     <div>
                        <div class="table-responsive invoice-table" id="table">
                           <table class="table table-bordered table-striped">
                              <tbody>
                                 <tr>
                                    <td class="item">
                                       <h6 class="p-2 mb-0">الوصف</h6>
                                    </td>
                                    <td class="Hours">
                                       <h6 class="p-2 mb-0">عدد المقمين</h6>
                                    </td>
                                    <td class="Rate">
                                       <h6 class="p-2 mb-0">السعر</h6>
                                    </td>
                                    <td class="subtotal">
                                       <h6 class="p-2 mb-0">الضريبة</h6>
                                    </td>
                                    <td class="subtotal">
                                        <h6 class="p-2 mb-0">المجموع</h6>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lorem Ipsum</label>
                                       <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">5</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">SAR 755</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">SAR 375.00</p>
                                    </td>
                                    <td>
                                        <p class="itemtext">SAR 2375.00</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lorem Ipsum</label>
                                       <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">3</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">SAR 755</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">SAR 225.00</p>
                                    </td>
                                    <td>
                                        <p class="itemtext">SAR 2375.00</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lorem Ipsum</label>
                                       <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">10</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">SAR 755</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">SAR 750.00</p>
                                    </td>
                                    <td>
                                        <p class="itemtext">SAR 2375.00</p>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td>
                                       <label>Lorem Ipsum</label>
                                       <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">10</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">SAR 755</p>
                                    </td>
                                    <td>
                                       <p class="itemtext">SAR 750.00</p>
                                    </td>
                                    <td>
                                        <p class="itemtext">SAR 2375.00</p>
                                    </td>
                                 </tr>
                              
                                 <tr>
                                    <td></td>
                                    <td></td>
                                    <td class="Rate">
                                       <h6 class="mb-0 p-2">الاجمالى</h6>
                                    </td>
                                    <td class="payment">
                                       <h6 class="mb-0 p-2">SAR 3,644.25</h6>
                                    </td>
                                    <td class="payment">
                                        <h6 class="mb-0 p-2">SAR 31,644.25</h6>
                                     </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <!-- End Table-->
                        <div class="row mb-0 pb-0">
                           <div class="col-md-8">
                              <div>
                                 <p class="legal"><strong>شكرا لحسن تعاونكم معنا</p>
                              </div>
                           </div>  
                           <div class="col-sm-12 text-center mt-0 ">
                            <button class="btn btn btn-primary me-2" type="button" onclick="myFunction()">طباعة</button>
                            <button class="btn btn-secondary" type="button">الغاء</button>
                         </div>
                        </div>
                     </div>
                     <!-- End InvoiceBot-->
                  </div>
                 
                  <!-- End Invoice-->
                  <!-- End Invoice Holder-->
                  <!-- Container-fluid Ends-->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/print.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/subscription/invoice.blade.php ENDPATH**/ ?>