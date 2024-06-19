<style>

</style>
@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5" >
      <div class="container" >
          <div class="hero__item set-bg"  data-setbg="{{ asset('https://gardeneo.pl/wp-content/uploads/2022/02/kwiaty-na-rocznice-slubu.jpg') }}" style="height: 700px">
              <div class="hero__text">
                  <span>Flowers</span>
                  <p>Free Pickup and Delivery Available</p>
                  <a href="#" class="primary-btn">SHOP NOW</a>
              </div>
          </div>
      </div>
    </section>
      <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            @foreach($menu_categories as $menu_category)
              <div class="col-lg-3">
                <div
                  class="categories__item set-bg"

                >
                  <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></h5>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Products</h2>
            </div>
          </div>
        </div>
        <div class="row featured__filter" id="product-list">
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('https://i.pinimg.com/736x/34/79/03/3479035ede3df7efc82e6dd626caa1b2.jpg') }}" alt="" style="height: 700px" />
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="banner__pic">
              <img src="{{ asset('https://i.pinimg.com/564x/26/5e/6d/265e6d0671fada5731fa2ba9ecc282f2.jpg') }}" alt=""style="height: 646px; margin-left:90px" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner End -->
@endsection
