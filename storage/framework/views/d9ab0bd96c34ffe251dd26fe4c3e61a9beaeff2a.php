<?php $__env->startSection('content', 'home'); ?>

<?php $__env->startSection('body'); ?>
    <style>
        body {
            background-image: url('https://wallpaperaccess.com/full/1124103.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-blend-mode: darken;

        }

        .text {
            /* margin-left: 7em; */
            /* margin-top: 7em; */
            /* margin-right: 60em; */
        }
    </style>

    <body>
        <?php echo e(dd(Auth::user()->is_admin)); ?>

        <!-- Hero Area -->
        <div class="container hero-area">
            <div class="d-flex text justify-content-center">
                <div class="text-white" style="margin-top: 10%">
                    <p style="font-size: 70px; font-weight:bold ">Hello Welcome To Our Journey!</p>
                    <h4>Here you can see our journey and use it as your references to start traveling the world.</h4>
                    <form action="<?php echo e(route('search_dest')); ?>" method="GET">
                        <?php echo csrf_field(); ?>
                        <div class="input-group rounded mt-4 w-50">
                            <input type="text" class="form-control rounded" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" name="search" />
                        </div>
                    </form>
                </div>
                <img src="<?php echo e(asset('images/HomePic2.png')); ?>" alt="" style="height:600px; width:600px">
            </div>

        </div>
        <br><br><br>
        <div class="container">
            <div class="text-white">
                <h1>Latest Post</h1>
            </div>
            <<div class="row">
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

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\semester 5\project lec\Project-Webprog\resources\views/home.blade.php ENDPATH**/ ?>