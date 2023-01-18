
<?php $__env->startSection('body'); ?>
<span class="mt-5"></span>
<style>
    .add-btn{
        color:white;
        align-self: center;
        cursor: pointer;
    }

    .del-btn{
        color:red;
        align-self: center;
        cursor: pointer;
    }

    .hide{
        display: none;
    }

    .reviews > input{
        background-color: white;
        transition: 0.3s
    }

    .reviews:hover > input{
        background-color: #d3eaf2;
    }

    .reviews > span{
        color: white;
        transition: 0.3s
    }

    .reviews:hover > .add-btn{
        color: #4cd137;
    }

    .reviews:hover > .del-btn{
        color: red;
    }

    .h1{
        font-size: 40px;
        font-weight: bold;
    }

</style>
<div class="container">
    <div class="text-center">
        <h1><?php echo e($destination->title); ?></h1>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <iframe width="800" height="400" src="https://youtu.be/3Kxf2dHlDpQ" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="d-flex justify-content-around mb-5">
        <div>

            <p><?php echo e($destination->desc); ?></p>
        </div>
        <img width="400" height="300"src="<?php echo e(asset('images/' . $destination->image)); ?>" class="" alt="...">
    </div>

    <div class="d-flex justify-content-around mb-5">
        <img width="400" height="300"src="<?php echo e(asset('images/' . $destination->image)); ?>" class="" alt="...">
        <div>
            <h1>Things you have to do here!</h1>
            <p><?php echo e($todolist->list); ?></p>
        </div>
    </div>
</div>
<div class="container justify-content-center d-flex flex-column" style="margin-bottom:200px;">    
    
    <span class="">
        <h3>Our Reviews!</h3>
        <a class="text-blue" style="cursor: pointer" onclick="ShowInstruction()">How to use this?</a>
    </span>

    <div id="review" class="w-75">

        <?php if($reviews_count == 0): ?>
            <div class="d-flex reviews m-1">
                <span onclick="Duplicate()" class="mr-3 add-btn">&#10010;</span>
                <span onclick="Remove(this)" class="mr-3 del-btn">&#10008;</span>
                <input style="width:100%" type="text" onkeydown="Transform(this)" class="form-control border-0 dynamic-review">
            </div>
            
        <?php else: ?>
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="d-flex reviews m-1">
                    <span onclick="Duplicate()" class="mr-3 add-btn">&#10010;</span>
                    <span onclick="Remove(this)" class="mr-3 del-btn">&#10008;</span>

                        
                        <?php if($item->inputType == "INPUT"): ?>
                            <input style="width:100%; border:none" type="text" onkeydown="Transform(this)" class="<?php echo e($item->class); ?>" value="<?php echo e($item->value); ?>">
                        
                        
                        <?php elseif($item->inputType == "IMG"): ?>

                            <?php if($item->class == "big"): ?>
                                <img style="height:400px;width:1000px" src=<?php echo e($item->value); ?> class="<?php echo e($item->class); ?>">
                            
                            <?php else: ?>
                                <img style="height:200px" src=<?php echo e($item->value); ?> class="<?php echo e($item->class); ?>">

                            <?php endif; ?>

                        <?php elseif($item->inputType == "TEXTAREA"): ?>
                            <textarea onkeydown="Transform(this)" class="<?php echo e($item->class); ?>" cols="60" rows="2"><?php echo e($item->value); ?></textarea>
                        <?php endif; ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        
    </div>
    <div class="w-75 mt-2">
        <button onclick="Save()" type="button" class="btn btn-primary" style="width: 100%">Save</button>
    </div>
</div>
<script>
    function ShowInstruction(){
        Swal.fire({
            title: 'Review Feature Introduction',
            icon: 'question',
            width: 800,
            html:
                '<div style="text-align:justify">' +
                    '<h4>Keywords :</h4>' +
                    '<hr>' +
                    '<span><strong>/header</strong> -> Used to create a h1 element</span>' +
                    '<br>' +
                    '<h1>This is a sample text.</h1>' +
                    '<hr>' +
                    '<span><strong>/bold</strong> -> Used to make the text bold</span>' +
                    '<br>' +
                    '<strong>This is a sample text.</strong>' +
                    '<hr>' +
                    '<span><strong>/italic</strong> -> Used to make the text italic</span>' +
                    '<br>' +
                    '<i>This is a sample text.</i>' +
                    '<hr>' +
                    '<span><strong>/textarea</strong> -> Used to create a textarea element</span>' +
                    '<br>' +
                    '<textarea class="form-control">This is a sample text.</textarea>' +
                    '<hr>' +
                    '<span><strong>/img + imageurl</strong> -> Used to create an img element</span>' +
                    '<br>' +
                    '<img style="height:200px" src="https://img.pokemondb.net/artwork/large/bulbasaur.jpg"></img>' +
                    '<hr>' +
                    '<span><strong>/landscape + imageurl</strong> -> Used to create a landscape img element</span>' +
                    '<br>' +
                    '<img style="height:300px;width:100%" src="https://cdn.pixabay.com/photo/2012/08/27/14/19/mountains-55067__340.png"></img>' +
                '</div>',
            focusConfirm: false,
            confirmButtonText:
                'Lets Try!',
        })
    }

    function Duplicate(){
        var template = '<div class="reviews d-flex m-1">' +
                            '<span onclick="Duplicate()" class="mr-3 add-btn">&#10010;</span>' +
                            '<span onclick="Remove(this)" class="mr-3 del-btn">&#10008;</span>' +
                            '<input style="width:100%" type="text" onkeydown="Transform(this)" class="form-control border-0 dynamic-review">' +
                        '</div>'
        $('#review').append(template);
    }

    function Transform(e){
        if(event.key === 'Enter') {
            if(e.value == '/bold'){
                e.value = '';
                $(e).addClass('font-weight-bold');      
            }

            if(e.value == '/italic'){
                e.value = '';
                $(e).addClass('font-italic');      
            }

            if(e.value == '/header'){
                e.value = '';
                $(e).addClass('h1'); 
            }

            if(e.value == '/textarea'){
                var textArea = '<textarea onkeydown="Transform(this)" class="form-control border-0" cols="60" rows="2"></textarea>'
                var curr = $(e).parent();
                $(e).remove();
                curr.append(textArea);
            }

            // Gambar Kecil https://img.pokemondb.net/artwork/large/bulbasaur.jpg
            if(e.value.match("/image")){
                var img = '<img class="small" style="height:200px" ' + 'src="' + e.value.substring(7) +'" >'
                var curr = $(e).parent();
                $(e).remove();
                curr.append(img);
            }

            // Pemandangan https://cdn.pixabay.com/photo/2012/08/27/14/19/mountains-55067__340.png
            if(e.value.match("/landscape")){
                var img = '<img class="big" style="height:400px;width:1000px" ' + 'src="' + e.value.substring(11) +'" >'
                var curr = $(e).parent();
                $(e).remove();
                curr.append(img);
            }
        }
    }

    function Remove(e){
        var curr = $(e).parent();
        $(curr).remove();
    }
    
    function Delete(detail_id){
        $.ajax({
                type: 'GET',
                url: '/DeleteReview',
                data: {
                    detail_id: detail_id
                },
                success:function(data){
                }
            })

    }

    function Save(){
        Swal.fire({
                    didOpen: () => {
                        Swal.showLoading()
                    },
                    allowEscapeKey: false,
                    allowOutsideClick: false,
                    title: 'Please Wait...'
                });
                
        var url = window.location.href;
        var detail_id = url.substring(url.length - 1);

        Delete(detail_id);

        var size = $('.reviews').length;
        var index = 0;
        $.each($('.reviews'), function() {
            index++
            var inputType = "" + $(this).children().eq(2).prop('nodeName');
            var classes = $(this).children().eq(2).attr('class');
            var value = $(this).children().eq(2).val();
            var img = $(this).children().eq(2).attr('src');

            var element = {
                inputType: inputType ?? '',
                value: (inputType == "IMG" ? img : value),
                class: classes ?? '',
                destination_id: detail_id,
                index: index
            }
            
            var flag = false;
            if(index == size) flag = true

            $.ajax({
                type: 'GET',
                url: '/SaveReview',
                data: element,
                success:function(data){
                    if(flag){
                        Swal.close();
                        Swal.fire({
                                    icon: 'success',
                                    title: 'Reviews have been Saved!',
                                    timer: 1500,
                                    timerProgressBar: true
                                })
                    }
                }
            })

        });       
    }

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\edbert.hansel\Desktop\Project-Webprog\resources\views/detail.blade.php ENDPATH**/ ?>