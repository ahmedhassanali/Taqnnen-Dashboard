<?php $__env->startSection('title', 'Default'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.users'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.users'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.addusers'); ?></li>

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
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary">
                            
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="my-2" for="inputName">الاسم</label>
                                    <input type="text" id="inputName" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="my-2" for="email"><?php echo app('translator')->get('lang.email'); ?></label>
                                    <input type="email" name="email" value="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="my-2" for="phone"><?php echo app('translator')->get('lang.phone'); ?></label>
                                    <input type="text" name="phone" value="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="my-2" for="address"><?php echo app('translator')->get('lang.address'); ?></label>
                                    <input type="text" name="address" value="" class="form-control">
                                </div>

                                <label class="my-2" for="address">دور المشرف</label>
                                <select class="form-select " >
                                    <option selected>الدور</option>
                                    <option value="1">مشرف عام</option>
                                    <option value="2">مشرف</option>
                                    <option value="3">محرر</option>
                                  </select>

                                <div class="form-group">
                                    <label class="my-2" for="image"><?php echo app('translator')->get('lang.image'); ?></label>
                                    <input type="file" name="image"  class="form-control image">
                                </div>

                                <div class="form-group">
                                <label class="my-2" for="password"><?php echo app('translator')->get('lang.password'); ?></label>
                                <input type="password" name="password" class="form-control" >
                                </div>

                                <div class="form-group">
                                    <label class="my-2" for="password"><?php echo app('translator')->get('lang.password_confirmation'); ?></label>
                                    <input type="password" name="password" class="form-control" >
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/users/add.blade.php ENDPATH**/ ?>