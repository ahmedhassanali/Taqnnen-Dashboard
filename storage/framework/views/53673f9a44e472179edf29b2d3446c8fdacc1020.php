

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
<h3>ادارة علاقات عامة</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active">ادارة علاقات عامة</li>
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
                                            <select class="form-select mx-2 mb-3 " style="width: 400px; height: 40px">
                                                <option selected>الخدمة</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                              <select class="form-select mx-2 mb-3" style="width: 400px; height: 40px">
                                                <option selected>نوع الاشترات</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>
                                              
                                              

                                            <select class="form-select mx-2" style="width: 400px; height: 40px">
                                                <option selected><?php echo app('translator')->get('lang.computernumber'); ?></option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                              </select>

                                            <div class="form-group mx-2 p-0 mb-3" style="width: 400px; height: 40px">

                                                <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('lang.Subscriptionstartdate'); ?>">
                                            </div>

                                            <div class="form-group mx-2 p-0 " style="width: 400px; height: 40px">
                                                
                                                <input type="text" class="form-control" placeholder="<?php echo app('translator')->get('lang.dateofRegistration'); ?>">
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
                                                        <th><?php echo app('translator')->get('lang.Name'); ?></th>
                                                        <th>الشركة</th>
                                                        <th><?php echo app('translator')->get('lang.email'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.phone'); ?></th>
                                                        <th>الحالة</th>
                                                        <th>المصدر</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for($i = 0; $i < 50; $i++): ?>
                                                        <tr>
                                                            <td><?php echo e($i); ?></td>
 
                                                            <td>حسان احمد حمدان</td>
                                                            <td>شركة واسط السعودية</td>
                                                            <td>hassanah@gmail.com</td>
                                                            <td>05052253215</td>
                                                            <td>نشط</td>
                                                            <td>جوجل</td>

                                                            
                                                        </tr>
                                                     <?php endfor; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th><?php echo app('translator')->get('lang.name'); ?></th>
                                                        <th>الشركة</th>
                                                        <th><?php echo app('translator')->get('lang.email'); ?></th>
                                                        <th><?php echo app('translator')->get('lang.phone'); ?></th>
                                                        <th>الحالة</th>
                                                        <th>المصدر</th>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/network/network.blade.php ENDPATH**/ ?>