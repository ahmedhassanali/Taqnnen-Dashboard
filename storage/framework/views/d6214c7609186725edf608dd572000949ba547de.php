<?php $__env->startSection('title', 'Default'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>اضافة عميل جديد</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.Customers'); ?></li>
<li class="breadcrumb-item active">اضافة عميل جديد</li>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">                
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                                <div class="card-body">
                                    
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
                                    <div class="row">
                                        <div class="col-12 my-3">
                                        <input type="submit" value="اضافة مشرف جديد" class="btn btn-primary float-right">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/customers/add.blade.php ENDPATH**/ ?>