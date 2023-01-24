<?php $__env->startSection('content', 'home'); ?>

<?php $__env->startSection('body'); ?>
    <img src="<?php echo e(asset('images/welcome.jpg')); ?>" style="height:500px; width:2000px" alt="">
    <div class="d-flex align-items-center justify-content-center p-2">
        <div class="position-absolute top-50 start-50 translate-middle">
            <div class="text-center text-white">
                <h1 class= " text-dark fw-bold">Welcome to <span>Travel Go</span></h1>
                <a href="<?php echo e(route('register')); ?>" class="btn btn-primary">SIGN UP NOW</a>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\semester 5\project lec\Project-Webprog\resources\views/welcome.blade.php ENDPATH**/ ?>