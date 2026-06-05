<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="ThemesLay">
    <title><?php echo $__env->yieldContent('title', 'RoundTours'); ?></title>
    <link rel="icon" type="image/png" sizes="80x80" href="/assets/images/favicon.png">
    <link href="/assets/css/main.css" rel="stylesheet">
    <?php echo $__env->yieldPushContent('styles'); ?>
</head>
<body>
    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
</body>
<<<<<<< HEAD:storage/framework/views/95694346f73eb89347b11c767a795478.php
</html><?php /**PATH C:\Users\USER\Herd\cs262_midterm_project\resources\views/layouts/app.blade.php ENDPATH**/ ?>
=======
</html><?php /**PATH C:\Users\MSILMC\Ministry_of_Toursim\resources\views/layouts/app.blade.php ENDPATH**/ ?>
>>>>>>> b68522e0eb1ddd84c89e6673bd843168edd89fa4:storage/framework/views/8a9c4f19499cd9ffbc10bd378d74ef29.php
