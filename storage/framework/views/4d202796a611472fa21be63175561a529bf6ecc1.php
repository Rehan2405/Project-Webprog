<?php $__env->startSection('content', 'search'); ?>

<?php $__env->startSection('body'); ?>
    <style>
        body {
            /* background-image: url('https://wallpaperaccess.com/full/1124103.jpg'); */
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: darken;

        }
    </style>

    <body>
        <div class="container">
            <div class="text-black">
                <h1>Search Post</h1>
                <div class="input-group rounded mt-4">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    </span>
                </div>
            </div>
            <div class="row mt-3">
                <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-4 mb-4 order-1 mt-3">
                        <div class="card">
                            <img src="<?php echo e(url('/Images/' . $dest->image)); ?>"
                                style="object-fit: :cover; width:100%; height:180px" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title"><strong><?php echo e(Str::limit($dest->title, 30)); ?></strong></h5>
                                <i class="card-text w-full bi bi-geo-alt"><?php echo e(Str::limit($dest->desc, 120)); ?></i><br>
                                <a href="<?php echo e(url('detail/' . $dest->id)); ?>" class="btn btn-outline-info mt-3"> More
                                    Detail</a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


    </body>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Sem 5\Web Prog\LEC\Assignment\Project\Test\Project-Webprog\resources\views/search.blade.php ENDPATH**/ ?>