@extends('front.layouts.app')
@section('content')
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('front/img/1.jpg')}});" >
    <div class="breadcrumb-overlay">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Gallery</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    ._card{
        border:1px solid #f1f1f1;padding:10px;margin:2px;border-radius:5px;color:blue;display:inline-block;background:white;cursor: pointer;
    }
    ._card:hover{
        color:white;
        background:blue;
        transform: scale(1.1);
    }
</style>
<div class="container mt-5 mb-5">
    <div style="margin-top:10px;">
        <button class="_card" onclick="selectGalary(-1)">
            All
        </button>
        @foreach($galleries as $gallery)
        <button class="_card" onclick="selectGalary({{$gallery->id}})">
            {{$gallery->name}}
        </button>
        @endforeach
    </div>
    <div class="row mb-50" style="margin-top:5px;">
        @foreach($galleries as $gallery)
            @foreach($gallery->Galaryimages as $image)
            <div class="col-3 imageHolder" data-galary="{{$gallery->id}}">
                <div  class=" img-container ">
                    <img src="{{ asset($image->image->filepath) }}" style="width:100%">
                </div>
            </div>
            @endforeach
        @endforeach
    </div>
</div>
@endsection
    <script>
        function selectGalary(id){
            var images=document.querySelectorAll('.imageHolder')
            console.log(images);
                images.forEach(image => {
                    console.log(image);
                    if(id===-1){
                        image.style.display="block";
                        // image.style.disp
                    }else{
                        if(image.dataset.galary==id){
                            image.style.display="block";

                        }else{
                            image.style.display="none";

                        }
                    }
                });

        }
    </script>
