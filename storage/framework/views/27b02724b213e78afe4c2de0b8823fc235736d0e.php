<!DOCTYPE html>
<html lang="en">
<style>
    /* html {
    background: url("https://wallpapercave.com/wp/wp5391568.jpg") no-repeat;
    background-size: cover;
} */
</style>
<head>
  <title>TravelGo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/resources/css/app.css">
    <title><?php echo $__env->yieldContent('body'); ?></title>
</head>
<body>
    <?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <?php echo $__env->yieldContent('body'); ?>

</body>
</html>
<?php /**PATH C:\Users\edbert.hansel\Desktop\Project-Webprog\resources\views/template.blade.php ENDPATH**/ ?>