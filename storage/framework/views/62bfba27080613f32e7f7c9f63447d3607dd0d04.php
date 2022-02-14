

<?php $__env->startSection('title', 'Default'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/animate.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/chartist.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get('lang.permissions'); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item"><?php echo app('translator')->get('lang.Dashboard'); ?></li>
<li class="breadcrumb-item active"><?php echo app('translator')->get('lang.permissions'); ?></li>
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
                    <div class="col-md-12">
                        <div class="card">
                          
                      <div class="card-body">
                        <div class="d-flex">
                            <div class=" col-md-5 me-5">
                                <form action="#" method="get" class="mb-3">
                                        <div class=" d-flex">
                                            <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('lang.search'); ?>">
                                            <button type="submit" class="btn btn-primary ms-3"><i class="fa fa-search"></i> <?php echo app('translator')->get('lang.search'); ?></button>
                                    </div>
                                </form><!-- end of form -->
                            </div>
                            <div class=" col-md-5">
                                <form action="#" method="get" class="mb-3">
                                        <div class=" d-flex">
                                            <input type="text" name="search" class="form-control" placeholder="<?php echo app('translator')->get('lang.add'); ?>">
                                            <button type="submit" class="btn btn-primary  ms-3"><i class="fa fa-plus"></i> <?php echo app('translator')->get('lang.add'); ?></button>
                                        </div>
                                </form><!-- end of form -->
                            </div>
                         </div>
                            <table class="table table-bordered">
                              <thead>
                                <tr>
                                  <th style="width: 10px">#</th>
                                  <th><?php echo app('translator')->get('lang.role'); ?></th>
                                  <th><?php echo app('translator')->get('lang.permissions'); ?></th>
                                </tr>
                              </thead>
                              <tbody>
                                  <?php
                                    $models = ['مسؤل','مشرف','مشاهد','مصمم'];
                                    $map=['read','create','delete','update'];
                                  ?>
                                <?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($index+1); ?></td>
                                    <td>  <?php echo e($item); ?> </td>
                                    <td>
                                        <ul class="nav nav-pills mb-3 mx-0 px-0 " id="pills-tabb" role="tablist">
                                            <li class="nav-item mx-1" role="presentation">
                                                <button class="nav-link mx-0 py-0 active" id="pills-aa-<?php echo e($item); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-aa-<?php echo e($item); ?>" type="button" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo app('translator')->get('lang.Services'); ?></button>
                                            </li>
                                            <li class="nav-item mx-1 " role="presentation">
                                                <button class="nav-link py-0 " id="pills-bb-<?php echo e($item); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-bb-<?php echo e($item); ?>" type="button" role="tab" aria-controls="pills-profile" aria-selected="false"><?php echo app('translator')->get('lang.users'); ?></button>
                                            </li>
                                            <li class="nav-item mx-1" role="presentation">
                                                <button class="nav-link py-0" id="pills-cc-<?php echo e($item); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-cc-<?php echo e($item); ?>" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><?php echo app('translator')->get('lang.Opportunities'); ?></button>
                                            </li>
                                            <li class="nav-item mx-1" role="presentation">
                                                <button class="nav-link py-0" id="pills-dd-<?php echo e($item); ?>-tab" data-bs-toggle="pill" data-bs-target="#pills-dd-<?php echo e($item); ?>" type="button" role="tab" aria-controls="pills-contact" aria-selected="false"><?php echo app('translator')->get('lang.reporting'); ?></button>
                                            </li>
                                        </ul>
                                        <div class='d-flex justify-content-between' >
                                        <div class="tab-content " id="pills-tabbContent">
                                            <div class="tab-pane fade show active " id="pills-aa-<?php echo e($item); ?>" role="tabpanel" aria-labelledby="pills-aa-<?php echo e($item); ?>-tab">
                                                <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="checkbox"  class="form-check-input" id="<?php echo e($m); ?>">
                                                    <label class="form-check-label"  for="<?php echo e($m); ?>"><?php echo app('translator')->get('lang.'.$m); ?></label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="tab-pane fade " id="pills-bb-<?php echo e($item); ?>" role="tabpanel" aria-labelledby="pills-bb-<?php echo e($item); ?>-tab">
                                                <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="checkbox"   class="form-check-input " id="<?php echo e($m); ?>">
                                                    <label class="form-check-label"  for="<?php echo e($m); ?>"><?php echo app('translator')->get('lang.'.$m); ?></label>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="tab-pane fade" id="pills-cc-<?php echo e($item); ?>" role="tabpanel" aria-labelledby="pills-cc-<?php echo e($item); ?>-tab">
                                                <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="checkbox"   class="form-check-input" id="<?php echo e($m); ?>">
                                                    <label class="form-check-label"  for="<?php echo e($m); ?>"><?php echo app('translator')->get('lang.'.$m); ?></label>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                            <div class="tab-pane fade" id="pills-dd-<?php echo e($item); ?>" role="tabpanel" aria-labelledby="pills-dd-<?php echo e($item); ?>-tab">
                                                <?php $__currentLoopData = $map; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <input type="checkbox"   class="form-check-input" id="<?php echo e($m); ?>">
                                                    <label class="form-check-label"  for="<?php echo e($m); ?>"><?php echo app('translator')->get('lang.'.$m); ?></label>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                          </div>
                                          <div class="mx-0 mt-0 ">
                                            <a class="btn btn-primary btn-sm"href="#"><i class="fa fa-pencil-alt"></i><?php echo app('translator')->get('lang.edit'); ?></a>
                                            <a class="btn btn-danger btn-sm" href="#"><i class="fa fa-trash mx-1"></i><?php echo app('translator')->get('lang.delete'); ?></a>
                                           </div>
                                    </div>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                            </table>
                          </div>
                          <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                              <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                              <li class="page-item"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
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

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/permissions/main.blade.php ENDPATH**/ ?>