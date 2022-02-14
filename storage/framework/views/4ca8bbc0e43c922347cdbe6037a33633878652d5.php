<?php $__env->startSection('title', 'Default'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.reporting'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.reporting'); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            
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

                                              <div class="form-group mx-2 my-4 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for=""><?php echo app('translator')->get('lang.computernumber'); ?></label>
                                                <input type="text" class="form-control" placeholder="">
                                             </div>

                                              <div class="form-group mx-2 my-4 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for=""><?php echo app('translator')->get('lang.Responsibledelegate'); ?></label>
                                                <input type="text" class="form-control" placeholder="">
                                              </div>

                                            <div class="form-group mx-2 my-4 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for=""><?php echo app('translator')->get('lang.Subscriptionstartdate'); ?></label>
                                                <input type="date" class="form-control" >
                                            </div>

                                            <div class="form-group mx-2 my-4 p-0  mb-3" style="width: 400px; height: 40px">
                                                <label for="">تاريخ انتهاء الاشتراك</label>
                                                <input type="date" class="form-control"  >
                                            </div>

                                            <div class="form-group mx-2 my-4 p-0 mb-3" style="width: 400px; height: 40px">
                                                <label for="Paymentdate"><?php echo app('translator')->get('lang.Paymentdate'); ?></label>
                                                <input type="date" class="form-control" id="Paymentdate">
                                            </div>

                                            <div class="form-group mx-2 my-4 p-0 " style="width: 400px; height: 40px">
                                                <label for=""><?php echo app('translator')->get('lang.dateofRegistration'); ?></label>
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
                                                        <th><?php echo app('translator')->get('lang.Products'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.total'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.fees'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.SubscriptionStatus'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.Responsibledelegate'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.computernumber'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.FacilityName'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.userName'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.phone'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.Paymentdate'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.dateofRegistration'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.Subscriptionstartdate'); ?></th>
                                                        <th>تاريخ انتهاء الاشترات</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for($i = 0; $i < 50; $i++): ?>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>خدمة مقيم الباقة الاولى</td>
                                                            <td>1265 SAR</td>
                                                            <td>50 SAR</td>
                                                            <td>نشط</td>
                                                            <td>ahmed ali</td>
                                                            <td>1025545</td>
                                                            <td>شركة واسط السعودية</td>
                                                            <td>حسان احمد حمدان</td>
                                                            <td>05052253215</td>
                                                            <td>02-11-2021</td>
                                                            <td>05-11-2021</td>
                                                            <td>02-11-2021</td>
                                                            <td>02-11-2021</td>
                                                        </tr>
                                                     <?php endfor; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th><?php echo app('translator')->get('lang.Products'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.total'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.fees'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.SubscriptionStatus'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.Responsibledelegate'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.computernumber'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.FacilityName'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.userName'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.phone'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.Paymentdate'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.dateofRegistration'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.Subscriptionstartdate'); ?></th>
                                                        <th>تاريخ انتهاء الاشترات</th>
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
var session_layout = '<?php echo e(session()->get('layout')); ?>';
</script>
<?php $__env->stopSection(); ?>




<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/chart/chartist/chartist.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/knob/knob.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/knob/knob-chart.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/apex-chart/apex-chart.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/chart/apex-chart/stock-prices.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/dashboard/default.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/index.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.bundle.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead/typeahead.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/handlebars.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/typeahead-search/typeahead-custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/report/main.blade.php ENDPATH**/ ?>