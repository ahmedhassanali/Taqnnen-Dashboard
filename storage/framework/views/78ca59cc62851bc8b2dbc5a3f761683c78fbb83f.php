

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
<h3><?php echo app('translator')->get('الاعدادات'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item">الاعدادات</li>
<?php $__env->stopSection(); ?>
<?php
$settings = ['عام','العلاقات العامة','التخصيص','الاشعارات','مالى','إضفاء الطابع الشخصي']    
?>
<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                <div class="container-fluid">

                        <h6 id="greeting" class="invisible"></h6>
                        
                        <div class="col-xl-12 xl-100 chart_data_left box-col-12">

                                        <div class="row m-0 p-tb">
                                                <?php for($i=1;$i<=6;$i++): ?>
                                                <div class="col-xl-6 box-col-6 col-lg-12 col-md-6">
                                                    <div class="card">
                                                        <div class="row">
                                                            <div class="col-md-4" >
                                                                <span>
                                                                    <i class="fi fi-rr-arrows"></i>
                                                                </span>
                                                                <img src="<?php echo e(asset('assets/images/settings/'.$i.'.png')); ?>" class="img-fluid rounded-start p-4  float-center" alt="">
                                                            </div>
                                                            <div class="card-body col-md-8  py-5 ps-3">
                                                                <h5 class="card-title"><?php echo e($settings[$i-1]); ?></h5>
                                                                <p class="card-text">تغيير عنوان الموقع ، والشعار ، واللغة ، و RTL ، والحسابات الاجتماعية ، وأنماط التصميم ، والتحميل المسبق.</p>
                                                                <a href="#" class="btn btn-primary">تغير الاعدادات</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endfor; ?>
                                            </div>
                                        </div>
                     </div><!-- /.container-fluid -->
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/settings/settings.blade.php ENDPATH**/ ?>