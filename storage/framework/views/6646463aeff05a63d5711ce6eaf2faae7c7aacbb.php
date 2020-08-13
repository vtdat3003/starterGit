<?php $__env->startSection('title', 'Page Title'); ?>

<?php $__env->startSection('sidebar'); ?>
    ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
    <p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>This is my body content.</p>
    <p>The current time is: <?php echo e(time()); ?></p>
    <p>Parsed parameter: <?php echo e($id); ?></p>
    <?php if($id == 1): ?>
        I have one record!
    <?php elseif($id > 1): ?>
        I have multiple records!
    <?php else: ?>
        I don't have any records!
    <?php endif; ?>
    <br>
    <example></example>
    
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>