@extends('template')
@section('body')
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
        <h1>{{$destination->title}}</h1>
    </div>
    <div class="d-flex justify-content-center mb-5">
        <iframe width="800" height="400" src="https://youtu.be/3Kxf2dHlDpQ" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="d-flex justify-content-around mb-5">
        <div>

            <p>{{$destination->desc}}</p>
        </div>
        <img width="400" height="300"src="{{ asset('images/' . $destination->image) }}" class="" alt="...">
    </div>

    <div class="d-flex justify-content-around mb-5">
        <img width="400" height="300"src="{{ asset('images/' . $destination->image) }}" class="" alt="...">
        <div>
            <h1>Things you have to do here!</h1>
            <p>{{$todolist->list}}</p>
        </div>
    </div>
</div>
<div class="container justify-content-center d-flex flex-column" style="margin-bottom:200px;">    
    <div id="review">

        @if($reviews_count == 0)
            <div class="d-flex reviews m-1">
                <span onclick="Duplicate()" class="mr-3 add-btn">&#10010;</span>
                <span onclick="Remove(this)" class="mr-3 del-btn">&#10008;</span>
                <input style="width:600px" type="text" onkeydown="Transform(this)" class="form-control border-0 dynamic-review">
            </div>
            
        @else
            @foreach ($reviews as $item)
                <div class="d-flex reviews m-1">
                    <span onclick="Duplicate()" class="mr-3 add-btn">&#10010;</span>
                    <span onclick="Remove(this)" class="mr-3 del-btn">&#10008;</span>
                        {{-- For Input Type --}}
                        @if($item->inputType == "INPUT")
                            <input style="width:600px; border:none" type="text" onkeydown="Transform(this)" class="{{$item->class}}" value="{{$item->value}}">
                        
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
    <button onclick="Save()" type="button" class="btn btn-primary" style="width: 650px">Save</button>
</div>
<script>
    function Duplicate(){
        var template = '<div class="reviews d-flex m-1">' +
                            '<span onclick="Duplicate()" class="mr-3 add-btn">&#10010;</span>' +
                            '<span onclick="Remove(this)" class="mr-3 del-btn">&#10008;</span>' +
                            '<input style="width:600px" type="text" onkeydown="Transform(this)" class="form-control border-0 dynamic-review">' +
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

            if(e.value == '/h1'){
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
            var inputType = $(this).children().eq(2).prop('nodeName').toString();
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
                                })
                    }
                }
            })

        });       
    }

</script>
@endsection
