
<?php $__env->startSection('content','home'); ?>

<?php $__env->startSection('body'); ?>
<style>
  body {
  background-image: url('https://wallpaperaccess.com/full/1124103.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  background-blend-mode: darken;
  
}
.text{
  margin-left: 7em;
  margin-top: 10em;
  margin-right: 60em;
}
</style>
<body>
  <!-- Hero Area -->
  <div class="hero-area">
    <div class="text">
      <div class="text-white">
        <h1>Hello Welcome To Our Journey!</h1>
        <h5>Here you can see our journey and use it as your references to start traveling the world.</h5>
        <div class="input-group rounded">
          <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          </span>
        </div>
      </div>
        
    </div>
    
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br>
  <div class="container">
  <div class="text-white">
    <h1>Latest Post</h1>
    </div>
    <<div class="row">
            <?php $__currentLoopData = $destinations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-4 mb-4 order-1 mt-3">
              <div class="card">
              <img src="<?php echo e(asset('/img/'.$dest->image)); ?>" class="card-img-top" alt="image">
                  <div class="card-body">
                      <h5 class="card-title"><strong><?php echo e($dest->name); ?></strong></h5>
                      <i class="card-text w-full bi bi-geo-alt"><?php echo e($dest->desc); ?></i><br>
                      <a href="#" class="btn btn-outline-info"> More Detail</a>
                  </div>
                  
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
    
        
</body>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Binus\Chapter 5\Webprog\Lecturer\project\resources\views/home.blade.php ENDPATH**/ ?>