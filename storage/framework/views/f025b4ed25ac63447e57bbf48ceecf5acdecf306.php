<?php $__env->startSection('title', 'Default'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>اضافة خدمة</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.Services'); ?></li>
<li class="breadcrumb-item active">اضافة خدمة</li>

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
                            
                            <?php
                                $models = ['مسؤل','مشرف','مشاهد','مصمم'];
                                $map=['شامل','عمليات'];
                            ?>

                            <div class="card-body">
                                <div class="form-group mb-3">
                                <input type="text" id="inputName" class="form-control mb-3" placeholder="اسم الخدمة">
                                </div>
                                
                                <div class="form-group">
                                    <ul class="nav nav-pills mb-3 mx-0 px-0 " id="pills-tabb" role="tablist">
                                        <li class="nav-item mx-1" role="presentation">
                                            <button class="nav-link mx-0 py-0 active" id="pills-aa--tab" data-bs-toggle="pill" data-bs-target="#pills-aa-" type="button" role="tab" aria-controls="pills-home" aria-selected="true">الباقة الاولى</button>
                                        </li>
                                        <li class="nav-item mx-1 " role="presentation">
                                            <button class="nav-link py-0 " id="pills-bb--tab" data-bs-toggle="pill" data-bs-target="#pills-bb-" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">الباقة الثانية</button>
                                        </li>
                                        <li class="nav-item mx-1" role="presentation">
                                            <button class="nav-link py-0" id="pills-cc--tab" data-bs-toggle="pill" data-bs-target="#pills-cc-" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">الباقة الثالثة</button>
                                        </li>
                                        <li class="nav-item mx-1" role="presentation">
                                            <button class="nav-link py-0" id="pills-dd--tab" data-bs-toggle="pill" data-bs-target="#pills-dd-" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">الباقة الرابعة</button>
                                        </li>
                                    </ul>
                                    <div class='d-flex justify-content-between' >
                                        <div class="tab-content " id="pills-tabbContent">
                                            <div class="tab-pane fade show active " id="pills-aa-" role="tabpanel" aria-labelledby="pills-aa--tab">
                                                <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="checkbox"  class="form-check-input" id="<?php echo e($m); ?>">
                                                    <label class="form-check-label"  for="<?php echo e($m); ?>"><?php echo e($m); ?></label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="tab-pane fade " id="pills-bb-" role="tabpanel" aria-labelledby="pills-bb--tab">
                                                <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="checkbox"   class="form-check-input " id="<?php echo e($m); ?>">
                                                    <label class="form-check-label"  for="<?php echo e($m); ?>"><?php echo e($m); ?></label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="tab-pane fade" id="pills-cc-" role="tabpanel" aria-labelledby="pills-cc--tab">
                                                <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="checkbox"   class="form-check-input" id="<?php echo e($m); ?>">
                                                    <label class="form-check-label"  for="<?php echo e($m); ?>"><?php echo e($m); ?></label>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="tab-pane fade" id="pills-dd-" role="tabpanel" aria-labelledby="pills-dd--tab">
                                                <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="checkbox"   class="form-check-input" id="<?php echo e($m); ?>">
                                                    <label class="form-check-label"  for="<?php echo e($m); ?>"><?php echo e($m); ?></label>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                          </div>
                                </div>

                                <select class="form-select mb-3" >
                                    <option selected>الاشتراك</option>
                                    <option value="1">مشرف عام</option>
                                    <option value="2">مشرف</option>
                                    <option value="3">محرر</option>
                                  </select>

                                  <div class="form-group mb-3">
                                    <input type="text" id="inputName" class="form-control" placeholder="مدة الاشتراك">
                                </div>

                                <div class="form-group mb-3">
                                    <input type="text" id="inputName" class="form-control" placeholder="سعر الاشتراك">
                                </div>

                                <div class="form-group mb-3">
                                    <textarea id="inputDescription" class="form-control" rows="4" placeholder="وصف الخدمة"></textarea>
                                </div>

                                <div class="row">
                                    <div class="col-12 my-3">
                                      <input type="submit" value="اضافة خدمة جديدة" class="btn btn-primary float-right">
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/services/add.blade.php ENDPATH**/ ?>