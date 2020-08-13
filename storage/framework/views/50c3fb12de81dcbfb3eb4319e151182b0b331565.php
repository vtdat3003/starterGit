<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Chào mừng các bạn đã đến toidicode.com</h1>
    <?php echo "<p>Bien</p>"; ?>

    <?php for($i = 0; $i < 10; $i++): ?>
        In giá trị <?php echo e($i); ?> 
        <?php if($i % 2 == 0): ?>
            Đây là số chẵn <br>
        <?php else: ?> 
            Đây là số lẻ <br>
        <?php endif; ?>
    <?php endfor; ?>
</body>
<?php
    
?>
</html>
