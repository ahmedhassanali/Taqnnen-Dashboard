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
<h3><?php echo app('translator')->get('lang.ViewOpportunities'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Opportunities'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.ViewOpportunities'); ?></li>
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
                <section >
                    <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <form class="theme-form">

                                            <label for="">الخدمة</label>
                                            <select class="form-select mb-3" >
                                                <option selected value="1">مقيم</option>
                                                <option value="1">تم</option>
                                                <option value="2">شموس</option>
                                                <option value="3">راية</option>
                                                <option value="4">مسارات</option>
                                            </select>
                                            
                                        
                                            <div class="row">
                                                <div class=" col-md-6">
                                                    <label for=""> التاريخ   من</label>
                                                    <input type="date" class="form-control" name="" id="">
                                                </div>
    
                                                <div class=" col-md-6">
                                                    <label for="">الى</label>
                                                    <input type="date" class="form-control" name="" id="">
                                                </div>
                                             </div>
    
                                             <input type="submit" value="بحث" class="btn btn-primary float-right mt-3">

                                         
                                      </form>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display " id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم الفرصة</th>
                                                        <th>ناشر الفرصة</th>
                                                        <th>التاريخ</th>
                                                        <th>منتهز الفرصة</th>
                                                        <th>حالة الفرصة</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for($i = 0; $i < 25; $i++): ?>
                                                        <tr>
                                                            <td><?php echo e($i+1); ?></td>
                                                            <td>عميل خدمة مقيم</td>
                                                            <td>حسان احمد</td>
                                                            <td>2022/02/09</td>
                                                            <td>الربيع</td>
                                                            <td > <span class="badge bg-primary " style="font-size: 17px">منشورة</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><?php echo e($i+2); ?></td>
                                                            <td>عميل خدمة مقيم</td>
                                                            <td>محمد على</td>
                                                            <td> 2022/02/22 </td>
                                                            <td>الاحسان</td>
                                                            <td> <span class="badge bg-success "style="font-size: 17px" >تم انتهاز الفرصة</span></td>
                                                        </tr>
                                                     <?php endfor; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>اسم الفرصة</th>
                                                        <th>ناشر الفرصة</th>
                                                        <th>التاريخ</th>
                                                        <th>منتهز الفرصة</th>
                                                        <th>حالة الفرصة</th>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/Opportunities/view.blade.php ENDPATH**/ ?>