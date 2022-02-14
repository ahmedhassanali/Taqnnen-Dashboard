<?php $__env->startSection('title', 'Video Chat'); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3><?php echo app('translator')->get(''); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Chat</li>
<li class="breadcrumb-item active"> Chat</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
	<div class="row">
        <div class="b-0">
            <object type="text/html" data="https://taqneen.com/wp-content/plugins/supportboard/supportboard/admin.php?fbclid=IwAR0xLbLxJLDJ6aL83AdHYdfh3WXtxdPqUIg5KVB0dB2_HbXcxj_UUWo31Nw"
            width="800px" height="600px" style="overflow:auto; ridge ">
            </object>
         </div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/fullscreen.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Cuba\resources\views/taqnnen/chat/chatlink.blade.php ENDPATH**/ ?>