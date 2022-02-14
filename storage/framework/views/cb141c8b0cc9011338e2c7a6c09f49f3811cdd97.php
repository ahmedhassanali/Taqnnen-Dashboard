

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
<h3>عرض الادوار</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active">الادوار</li>
<li class="breadcrumb-item active">عرض الادوار</li>
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
                                         <a class="btn btn-primary" href="<?php echo e(route('addrole')); ?>">اضافة</a>
                                    </div> 
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الدور</th>
                                                        <th>الاجراء</th>                                             
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td> مسؤل عام</td>
                                                            <td class="d-flex ">
                                                                <a href="#" class="btn btn-primary  p-1">
                                                                    <i class="bi bi-edit"></i>
                                                                    <?php echo app('translator')->get('lang.edit'); ?></a>
                                                                <a href="#" class="btn btn-danger mx-2 p-1">
                                                                    <i class="bi bi-trash"></i>
                                                                    <?php echo app('translator')->get('lang.delete'); ?>
                                                                   </a>
                                                            </td>       
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>مسؤل</td>
                                                            <td class="d-flex ">
                                                                <a href="#" class="btn btn-primary  p-1">
                                                                    <i class="bi bi-edit"></i>
                                                                    <?php echo app('translator')->get('lang.edit'); ?></a>
                                                                <a href="#" class="btn btn-danger mx-2 p-1">
                                                                    <i class="bi bi-trash"></i>
                                                                    <?php echo app('translator')->get('lang.delete'); ?>
                                                                   </a>
                                                            </td>       
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>مشرف</td>
                                                            <td class="d-flex ">
                                                                <a href="#" class="btn btn-primary  p-1">
                                                                    <i class="bi bi-edit"></i>
                                                                    <?php echo app('translator')->get('lang.edit'); ?></a>
                                                                <a href="#" class="btn btn-danger mx-2 p-1">
                                                                    <i class="bi bi-trash"></i>
                                                                    <?php echo app('translator')->get('lang.delete'); ?>
                                                                   </a>
                                                            </td>       
                                                        </tr>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الدور</th>
                                                        <th>الاجراء</th>
                                                    
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/permissions/view.blade.php ENDPATH**/ ?>