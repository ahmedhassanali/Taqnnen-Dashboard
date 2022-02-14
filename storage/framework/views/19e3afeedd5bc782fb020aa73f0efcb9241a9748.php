

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
<h3><?php echo app('translator')->get('تقرير المبيعات'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item">تقرير</li>
<li class="breadcrumb-item active">تقرير المبيعات</li>
<?php $__env->stopSection(); ?>

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



                    </div>


                 </div><!-- /.container-fluid -->
                </section>
                <section>
                    <section class="content">
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-sm-12">

                                <div class="card">

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الخدمة</th>
                                                        <th>العميل</th>
                                                        <th>التاريخ</th>
                                                        <th>التكلفة</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php for($i = 0; $i < 50; $i++): ?>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>خدمة مقيم الباقة الاولى</td>
                                                            <td>حسان احمد حمدان</td>
                                                            <td>02-11-2021</td>
                                                            <td>1265 SAR</td>
                                                        </tr>
                                                     <?php endfor; ?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الخدمة</th>
                                                        <th>العميل</th>
                                                        <th>التاريخ</th>
                                                        <th>التكلفة</th>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/report/financial.blade.php ENDPATH**/ ?>