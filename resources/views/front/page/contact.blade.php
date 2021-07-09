@extends('front.layouts.app')
@section('content')
<section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url({{asset('front/img/1.jpg')}});">
    <div class="breadcrumb-overlay">
    <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Contact Us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container mt-5 mb-5">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8 col-12">
                    <h4 class="mb-50">Send a message</h4>
                    <hr>
                    <form action="/mcci/messages/" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your E-mail" required>
                                </div>
                            </div>
                            <div class="col-12 mt-1">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="sub" id="subject" placeholder="Your Subject" required>
                                </div>
                            </div>
                            <div class="col-12 mt-1">
                                <div class="form-group">
                                    <textarea name="detail" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="col-12 mt-1">
                                <button class="btn btn-primary mt-30" type="submit">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-12">
                    <h4 class="mb-50">Contact Information</h4>
                    <hr>
                </div>
            </div>
        </div>
      </div>
</div>

@endsection
