

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
<h3>اضافة الادوار</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active">الادوار</li>
<li class="breadcrumb-item active">اضافة الادوار</li>
<?php $__env->stopSection(); ?>
<?php
    $classes = ['مشرفين','خدمات','اشتراكات','فرص'];
    $permissions = ['اضافة','حذف','تعديل'];
?>
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
                                        <div class="form-group">
                                            <label class="my-2" for="inputName">اسم الدور</label>
                                            <input type="text" id="inputName" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="display" id="advance-4">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th></th>
                                                        <th>الصلاحيات</th>                                             
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><?php echo e($item); ?></td>
                                                        <td>
                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox">اضافة <?php echo e($item); ?></label>
                                                            </div>
                                                            
                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox"> تعديل <?php echo e($item); ?> </label>
                                                            </div>
                                                            
                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox">حذف <?php echo e($item); ?></label>
                                                            </div>

                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox">حذف <?php echo e($item); ?> الخاصين بالمشرف</label>
                                                            </div>

                                                            <div class=" d-flex">
                                                                <input class="my-0 py-0 " type="checkbox" name="" id="checkbox">
                                                                <label class="m-2 py-0 " for="checkbox"> تعديل <?php echo e($item); ?> الخاصين بالمشرف </label>
                                                            </div>
                                                            
                                                        </td>       
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th></th>
                                                        <th>الصلاحيات</th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                            <div class="row">
                                                <div class="col-12 my-3">
                                                  <input type="submit" value="اضافة دور جديد" class="btn btn-primary float-left">
                                                </div>
                                            </div>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/permissions/add.blade.php ENDPATH**/ ?>