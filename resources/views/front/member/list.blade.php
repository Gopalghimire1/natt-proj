@extends('front.layouts.app')
@section('content')
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('front/img/1.jpg')}});" >
    <div class="breadcrumb-overlay">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Member List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Members</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row mt-5 mb-5">
        @foreach ($member as $secretary)
        <div class="row">
            <div class="col-12 col-lg-3">
               <img src="{{ asset($secretary->image) }}" alt="" style="height:150px; width:170;float:">
            </div>

            <div class="col-12 col-lg-9">
                 <div style="line-hight:10px;">
                    <ul style="font-size: 15px;
                                font-weight: 600;
                                color: #003679;
                                ">
                        <li style="padding:4px 0;"><span class="text-dark">Name </span>:  {{$secretary->name}}</li>
                        <li style="padding:4px 0;"><span class="text-dark">Address </span>: {{$secretary->address}}</li>
                        <li style="padding:4px 0;"><span class="text-dark">Mobile </span>: {{$secretary->phone}}</li>
                        <li style="padding:4px 0;"><span class="text-dark">Email </span>: {{$secretary->email}}</li>
                    </ul>

                 </div>
            </div>
        </div>
        <hr>
        @endforeach
    </div>
</div>

@endsection
