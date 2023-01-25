

<?php $__env->startSection('body'); ?>

<div class=" mt-5 justify-content-center text-center w-100 m-auto">
    <div class="card-header bg-transparent">
        <h3 class="fw-normal text-white mt-2 text-align-center"><h1>Insert Destination</h1></h3>
    </div>
    <div class="card-body">
        <main class="form-product w-75 m-auto">
            <form action="/insert" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-floating">
                    <input type="text" name="title" class="form-control <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="floatingInput" placeholder="Name">
                    <label for="exampleFormControlTextarea1" class="form-label float-start">Title</label>
                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback text-start mb-3">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
               
                <div class="form-floating">
                    <input type="text" name="Todolist" class="form-control <?php $__errorArgs = ['Todolist'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="floatingInput" placeholder="Name">
                    <label for="exampleFormControlTextarea1" class="form-label float-start">To Do List</label>
                    <?php $__errorArgs = ['todolist'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback text-start mb-3">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label float-start">Description</label>
                    <textarea class="form-control <?php $__errorArgs = ['Description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Description" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <?php $__errorArgs = ['Description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class="invalid-feedback text-start mb-3">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="input-group mb-3 text-white">
                    <span class="input-group-text" id="price">LINK</span>
                    <input type="link" name="price" class="form-control"  aria-describedby="price">
                    <?php $__errorArgs = ['link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback text-start mb-3">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <div class="input-group">
                    <input type="file" name="photo_url" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                    <?php $__errorArgs = ['photo_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback text-start mb-3">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <button class="w-100 btn btn-lg btn-secondary" type="submit">Insert Destination</button>
            </form>
        </main>
    </div>
</div>



<?php $__env->stopSection(); ?>


<style>
    .form-product input {
        margin-bottom: 10px;
    }
    body {
  background-image: url('https://thumbs.dreamstime.com/b/world-landmarks-photo-collage-vintage-tes-sepia-textured-background-travel-tourism-study-around-world-concept-vintag-94756410.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}
</style>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BINUS\Sem 5\Web Prog\LEC\Assignment\Project\Test\Project-Webprog\resources\views/insert.blade.php ENDPATH**/ ?>