@extends('template')
@section('body')
<span class="mt-5"></span>
<style>
    .add-btn{
        color:aquamarine;
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
        background-color: aquamarine;
        transition: 0.3s
    }

    .reviews:hover > input{
        background-color: white;
    }

    .reviews > span{
        color: aquamarine;
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
<div style="background-color: aquamarine">
<div class="container">
    <div class="text-center">
        <h1>{{$destination->title}}</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center mb-5">
        <a href="{{$destination->video}}" target="_blank" class="w-75 border">
            <img class="w-100" src="{{"https://img.youtube.com/vi/" . $thumbnail . "/maxresdefault.jpg"}}" alt="">
            <span class="font-italic">Watch our Journey</span>
        </a>
        <div class="mx-2 d-flex flex-column">
            <a href="/destination/update/{{ $destination->id }}" class="btn btn-secondary mb-2">Update</a>
            @if(isset($favourite))
                <button id="favouriteRemove" type="button" class="btn btn-secondary mb-2">
                    &#9829; Remove favourite
                </button>
            @else
                <button id="favouriteAdd" type="button" class="btn btn-secondary mb-2">
                    &#9825; Add favourite
                </button>
            @endif
        </div>
    </div>

    <div class="d-flex flex-column justify-content-center mb-5">
        <p class="text-justify" style="font-size: 20px">{{$destination->desc}}
        <br><br>
        <img src="{{ asset('images/' . $destination->image) }}" class="w-100" style="height: 400px" alt="...">

        <span class="font-italic font-weight-bold">Things You Have To Do Here! : {{$todolist->list}}</span>
        </p>
    </div>
</div>
<div class="container justify-content-center d-flex flex-column" style="padding-bottom:100px;">    
    
    <span class="">
        <h3>Our Reviews!</h3>
        <a class="text-blue" style="cursor: pointer" onclick="ShowInstruction()">How to use this?</a>
    </span>

    <div class="d-flex">
        <div class="w-100">
            <div id="review" class="w-100">

                @if($reviews_count == 0)
                    <div class="d-flex reviews m-1">
                        <span onclick="Duplicate()" class="mr-3 add-btn">&#10010;</span>
                        <span onclick="Remove(this)" class="mr-3 del-btn">&#10008;</span>
                        <input style="width:100%" type="text" onkeydown="Transform(this)" class="form-control border-0 dynamic-review">
                    </div>
                    
                @else
                    @foreach ($reviews as $item)
                        <div class="d-flex reviews m-1">
                            <span onclick="Duplicate()" class="mr-3 add-btn">&#10010;</span>
                            <span onclick="Remove(this)" class="mr-3 del-btn">&#10008;</span>
        
                                {{-- For Input Type --}}
                                @if($item->inputType == "INPUT")
                                    <input style="width:100%; border:none" type="text" onkeydown="Transform(this)" class="{{$item->class}}" value="{{$item->value}}">
                                
                                {{-- For Image Type --}}
                                @elseif($item->inputType == "IMG")
        
                                    @if($item->class == "big")
                                        <img style="height:400px;width:1000px" src={{$item->value}} class="{{$item->class}}">
                                    
                                    @else
                                        <img style="height:200px" src={{$item->value}} class="{{$item->class}}">
        
                                    @endif
        
                                @elseif($item->inputType == "TEXTAREA")
                                    <textarea onkeydown="Transform(this)" class="{{$item->class}}" cols="60" rows="2">{{$item->value}}</textarea>
                                @endif
                        </div>
                    @endforeach
                @endif
                
            </div>
            <div class="w-100 mt-2">
                <button onclick="Save()" type="button" class="btn btn-primary" style="width: 100%">Save</button>
            </div>
        </div>
        <span class="m-5"></span>
        <div class="mapouter w-100">
            <div class="gmap_canvas">
            <iframe width="500" height="500" id="gmap_canvas" src={{$destination->location}}  frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>

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

    function AddFavourite() {
        var detail_id = {{ $destination->id }};

        $.ajax({
            type: 'GET',
            url: '/AddFavourite',
            data: {
                destination_id: detail_id,
            },
            success:function(data){
                Swal.close();
                Swal.fire({
                    icon: 'success',
                    title: 'Added favourite destination!',
                    timer: 1000
                });
            }
        })
    }

    function RemoveFavourite() {
        var detail_id = {{ $destination->id }};

        $.ajax({
            type: 'GET',
            url: '/DeleteFavourite',
            data: {
                destination_id: detail_id,
            },
            success:function(data){
                Swal.close();
                Swal.fire({
                    icon: 'success',
                    title: 'Removed favourite destination!',
                    timer: 1000
                });
            }
        })
    }

    $('[id^=favourite]').click(function() {
        if($(this).attr('id') === 'favouriteAdd') {
            AddFavourite();
            $(this).text('♥ Remove favourite');
            $(this).attr('id', 'favouriteRemove');
        } else {
            RemoveFavourite();
            $(this).text('♡ Add favourite');
            $(this).attr('id', 'favouriteAdd')
        }
    });
</script>
@endsection
