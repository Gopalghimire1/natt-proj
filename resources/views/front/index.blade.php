@extends('front.layouts.app')
@section('content')
<div class="owl-carousel">
    <?php
        for ($i=0; $i < 5; $i++) { ?>

        <div class="slider-item">
            <img class="w-100" src="{{ asset('front/img/slider.jpg') }}" alt="">
            <button class="slider-btn">
            view More
            </button>
        </div>
    <?php } ?>
  </div>



  <div class="container-custom">
    <div class="row my-3">
      <div class="col-lg-6 h-350">
        <div class="tabs h-100" id="main-tab">
          <div class="tab-btn-bar" >
            <button class="tab-btn active" data-of="main-tab" data-for="news">News</button>
            <button class="tab-btn" data-of="main-tab" data-for="events">Events</button>
            <button class="tab-btn" data-of="main-tab" data-for="activity">Activities</button>
          </div>
          <div class="tab-container">
            <div class="tab-item active" id="news">@include('front.news')</div>
            <div class="tab-item " id="events">@include('front.news')</div>
            <div class="tab-item " id="activity">@include('front.news')</div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="updates h-350">
          <div class="updates-title">
            Updates
          </div>
          <marquee behavior="" direction="up">
            <?php
              for ($i=0; $i < 5; $i++) { ?>
                <ul class="updates-list">
                  <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                </ul>
               <?php } ?>
          </marquee>
        </div>
        <div class="min-about">
          <div class="about-title">
            <div>

              About org
            </div>
            <div class="about-name">
              Need Technosoft pvt ltd
            </div>

          </div>
          <div class="quote">
            <span>

              &ldquo;
            </span>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut repellendus impedit magni .

          </div>
          <p class="about-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quibusdam reprehenderit? Voluptatem dolorum quisquam deleniti in molestiae excepturi sunt eligendi eveniet dolorem iure, earum maiores, facere hic eaque voluptates alias?</p>
          <p class="about-paragraph">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi, quibusdam reprehenderit? Voluptatem dolorum quisquam deleniti in molestiae excepturi sunt eligendi eveniet dolorem iure, earum maiores, facere hic eaque voluptates alias?</p>
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
  <div class="partners">
    <div class="container-custom">

      <div class="title">
      ASSOCIATES
      </div>
      <div class="list">
        <?php
        for ($i=0; $i < 13; $i++) { ?>
          <div class="item">
            <img src="{{ asset('front/img/slider.jpg')}}" class="w-100" alt="">
          </div>
        <?php }?>
      </div>
    </div>
  </div>
@endsection
