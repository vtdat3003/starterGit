<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <div>
        <?php $__env->startSection('content'); ?>
        <?php echo $__env->yieldSection(); ?>
    </div>
</body>
<?php
    
?>
</html>
