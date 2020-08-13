<?php $__env->startSection('title','trang chủ'); ?>

<?php $__env->startSection('content'); ?>
    <p>Content</p>
    <h1>Hello $name</h1>
<?php $__env->stopSection(); ?>

<h1>Hello <?php echo e($name); ?></h1>
<h2>Shared data <?php echo e($shared_data); ?></h2>