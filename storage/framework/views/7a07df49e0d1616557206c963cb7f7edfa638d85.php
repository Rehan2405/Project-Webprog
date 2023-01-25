
<?php $__env->startSection('content', 'search'); ?>

<?php $__env->startSection('body'); ?>
    <style>
        body {
            /* background-image: url('https://wallpaperaccess.com/full/1510545.jpg'); */
            background-image: url('https://wallpaperaccess.com/full/1510533.jpg');
            /* background-image: url('https://wallpaperaccess.com/full/1510585.jpg'); */
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: darken;

        }
    </style>

    <div class="container">
        <div class="text-black">
            
            <p class="mt-3" style="font-size: 40px; font-weight:bold" >Search Destination</p>
            <form action="<?php echo e(route('search_dest')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <div class="input-group mb-4">
                    <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" name="search" />
                </div>
            </form>

            <div class="row mt-3">
                <?php $__empty_1 = true; $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-4 mb-4 order-1 mt-3">
                        <div class="card">
                            <img src="<?php echo e(asset('Images/' . $dest->image)); ?>"
                                style="object-fit: :cover; width:100%; height:180px" class="card-img-top" alt="image">
                            <div class="card-body">
                                <h5 class="card-title"><strong><?php echo e(Str::limit($dest->title, 30)); ?></strong></h5>
                                <i class="card-text w-full bi bi-geo-alt"><?php echo e(Str::limit($dest->desc, 120)); ?></i><br>
                                <a href="<?php echo e(url('detail/' . $dest->id)); ?>" class="btn btn-outline-info mt-3"> More
                                    Detail</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="alert alert-danger">The Destination You Are Looking For Doesn't Exist!</div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\semester 5\project lec\Project-Webprog\resources\views/search.blade.php ENDPATH**/ ?>