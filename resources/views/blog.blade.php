@extends('layouts.app')
  <!-- blog section -->

  <section class="blog_section layout_padding-top layout_padding2-bottom">

    <div class="container">
      <div class="heading_container">
        <h2>
          Latest From The Blog
        </h2>
      </div>
      <div class="blog_container">
        <div class="box">
          <div class="img-box">
            <img src="{{asset('public/asset/images/b-1.jpg')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              tempor incididunt ut labore
            </h5>
            <p>
              Lorem ipsum dolor sit amet, conadipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam, quis
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('public/asset/images/b-2.jpg')}}" alt="">

          </div>
          <div class="detail-box">
            <h5>
              tempor incididunt ut labore
            </h5>
            <p>
              Lorem ipsum dolor sit amet, conadipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam, quis
            </p>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('public/asset/images/b-3.jpg')}}" alt="">

          </div>
          <div class="detail-box">
            <h5>
              tempor incididunt ut labore
            </h5>
            <p>
              Lorem ipsum dolor sit amet, conadipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
              aliqua. Ut enim ad minim veniam, quis
            </p>
          </div>
        </div>
      </div>
    </div>

  </section>
@endsection
