
<?php $__env->startSection('body'); ?>
<style>
    body {
        background-image: url('/img/editform-background.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-blend-mode: darken;
    }
    .edit {
        background-color: blue;
        height: 100%;
        width: 100%;
    }
</style>
<div class="container vh-100">
    <div class="row justify-content-center">
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <form action="<?php echo e(url('/destination/update/'.$destination->id.'')); ?>" method="post" enctype="multipart/form-data" class="text-white col-8">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
    
            <h1 class="mt-5">Update Destination</h1>
    
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" name="title" id="title" value="<?php echo e(isset($destination->title) ? $destination->title : ''); ?>">
            </div>
    
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" name="description" id="description" value="<?php echo e(isset($destination->desc) ? $destination->desc : ''); ?>">
            </div>
    
            <div class="form-group">
                <label for="todolist">To do list</label>
                <input type="text" class="form-control" name="todolist" id="todolist" value="<?php echo e(isset($todolist->list) ? $todolist->list : ''); ?>">
            </div>
    
            <div class="form-group">
              <label for="youtubelink">Youtube link</label>
              <input type="text" class="form-control" name="youtubelink" id="youtubelink" value="<?php echo e(isset($destination->video) ? $destination->video : ''); ?>">
            </div>
    
            <div class="form-group">
                <label for="location">Location</label>
                <input type="link" class="form-control" name="location" id="location" value="<?php echo e(isset($destination->location) ? $destination->location : ''); ?>">
            </div>

            <div class="form-group">
                <label for="thumbnail">Image</label>
                <input type="file" class="form-control" name="thumbnail" id="thumbnail">
            </div>
    
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control">Save</button>
            </div>
        </form>
    </div>   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Sem 5\Web Prog\LEC\Assignment\Project\Test\Project-Webprog\resources\views/edit.blade.php ENDPATH**/ ?>