<title>Home</title>
@extends('front_end.layouts.layout')

@section('content')
<div class="container-fluid">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active slide-item-one">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="child-container">
                  <h2 style="font-weight: bold;color: white;">THIS IS HEADER</h2>
                  <p style="color: white;" class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                    possimus praesentium
                    repellat autem ipsum veritatis at blanditiis ipsa dolor corporis.
                  </p>
                  <button class="counsel-btn mt-3">CREDIT COUNSELING</button>
                </div>
              </div>
              <div class="col-12 col-md-6"></div>
            </div>
          </div>
        </div>
        <div class="carousel-item slide-item-two">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">

              </div>
              <div class="col-12 col-md-6">
                <div class="child-container">
                  <h2 style="font-weight: bold;color: white;">THIS IS HEADER</h2>
                  <p style="color: white;" class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                    possimus praesentium
                    repellat autem ipsum veritatis at blanditiis ipsa dolor corporis.
                  </p>
                  <button class="counsel-btn mt-3">CREDIT COUNSELING</button>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="carousel-item slide-item-three">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="child-container">
                  <h2 style="font-weight: bold;color: white;">THIS IS HEADER</h2>
                  <p style="color: white;" class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                    possimus praesentium
                    repellat autem ipsum veritatis at blanditiis ipsa dolor corporis.
                  </p>
                  <button class="counsel-btn mt-3">CREDIT COUNSELING</button>
                </div>
              </div>
              <div class="col-12 col-md-6"></div>
            </div>

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <!-- end carousel  -->
  <!-- below carousel part  -->
  <section>
    <div class="container">
      <h2 style="text-align: center;font-weight: bold;" class="mt-5">TRUSTED CREDIT REPAIR</h2>
      <p style="text-align: center;" class="mt-3">CarsonX Credit Repair is a fully licensed and bonded company here to
        assist you fix any credit situation. </p>
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="credit-repair-card">
            <div class="card-content">
              <div class="inner-content" style="text-align: center;">
                <img style="width: 70px; text-align: center;" src="{{asset("front_end/img/icons/dahlia.png")}}" alt="">
                <h6 class="my-3" style="color: teal;font-weight: bold;letter-spacing: 2px;">FIX</h6>
                <h3 class="white" style="font-weight: bold;">CREDIT REPAIR</h3>
                <!-- <span class="line"></span> -->
                <p class="white mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. quasi. Similique non aut
                  id perferendis dicta modi! Quae obcaecati,
                </p>
                <!-- <span class="line-2"></span> -->
                <button class="start-hear">START HERE</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="credit-repair-card">
            <div class="card-content">
              <div class="inner-content" style="text-align: center;">
                <img style="width: 70px; text-align: center;" src="{{asset("front_end/img/icons/flower.png")}}" alt="">
                <h6 class="my-3" style="color: teal;font-weight: bold;letter-spacing: 2px;">MEND</h6>
                <h3 class="white" style="font-weight: bold;">PAY TO DELETE</h3>
                <!-- <span class="line"></span> -->
                <p class="white mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. quasi. Similique non aut
                  id perferendis dicta modi! Quae obcaecati,
                </p>
                <!-- <span class="line-2"></span> -->
                <button class="start-hear">START HERE</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="credit-repair-card">
            <div class="card-content">
              <div class="inner-content" style="text-align: center;">
                <img style="width: 70px; text-align: center;" src="{{asset("front_end/img/icons/flower(2).png")}}" alt="">
                <h6 class="my-3" style="color: teal;font-weight: bold;letter-spacing: 2px;">LEARN</h6>
                <h3 class="white" style="font-weight: bold;">CREDIT COUNCELING</h3>
                <!-- <span class="line"></span> -->
                <p class="white mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. quasi. Similique non aut
                  id perferendis dicta modi! Quae obcaecati,
                </p>
                <!-- <span class="line-2"></span> -->
                <button class="start-hear ">START HERE</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="credit-repair-card">
            <div class="card-content">
              <div class="inner-content" style="text-align: center;">
                <img style="width: 70px; text-align: center;" src="{{asset("front_end/img/icons/flower(1).png")}}" alt="">
                <h6 class="my-3" style="color: teal;font-weight: bold;letter-spacing: 2px;">EARN</h6>
                <h3 class="white" style="font-weight: bold;">BUSINESS CREDIT</h3>
                <!-- <span class="line"></span> -->
                <p class="white mt-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. quasi. Similique non aut
                  id perferendis dicta modi! Quae obcaecati,
                </p>
                <!-- <span class="line-2"></span> -->
                <button class="start-hear">START HERE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end below carousel part  -->
  <!-- carousel two  -->
  <div class="container-fluid my-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active slide-item-one">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="child-container container-tow">
                  <h2 style="font-weight: bold;color: black;">THIS IS HEADER</h2>
                  <p style="color: black;" class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                    possimus praesentium
                    repellat .
                  </p>
                  <button class="btn-slide-2 counsel-btn mt-3">CREDIT COUNSELING</button>
                </div>
              </div>
              <div class="col-12 col-md-6"></div>
            </div>
          </div>
        </div>
        <div class="carousel-item slide-item-two">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">

              </div>
              <div class="col-12 col-md-6">
                <div class="child-container container-tow">
                  <h2 style="font-weight: bold;color: black;">THIS IS HEADER</h2>
                  <p style="color: black;" class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                    possimus praesentium
                    repellat .
                  </p>
                  <button class="btn-slide-2 counsel-btn mt-3">CREDIT COUNSELING</button>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="carousel-item slide-item-three">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6">
                <div class="child-container container-tow">
                  <h2 style="font-weight: bold;color: black;">THIS IS HEADER</h2>
                  <p style="color: black;" class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                    possimus praesentium
                    .
                  </p>
                  <button class="btn-slide-2 counsel-btn mt-3">CREDIT COUNSELING</button>
                </div>
              </div>
              <div class="col-12 col-md-6"></div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end carousel 2 carouse  -->
  <!-- rating & customer review -->
  <section class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="rating-card">
          <div class="star">
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
          </div>
          <hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. culpa vero dicta accusantium minus minima placeat
            animi in tenetur ipsam? Nisi totam voluptatibus,

          </p>
          <hr>
          <h6>-> Jhon Clonny</h6>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="rating-card">
          <div class="star">
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
          </div>
          <hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo alias corporis eum fugiat labore libero
            eligendi iusto deleniti. Magni veritatis et, culpa vero dicta accusantium minus minima placeat animi in
            tenetur ipsam? Nisi totam voluptatibus,

          </p>
          <hr>
          <h6>-> Jhon Clonny</h6>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="rating-card">
          <div class="star">
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
            <i class="far fa-star mr-2" style="color: teal;"></i>
          </div>
          <hr>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo alias corporis eum fugiat labore libero
            eligendi iusto deleniti. Magni veritatis et, culpa vero dicta accusantium minus minima placeat animi in
            tenetur ipsam? Nisi totam voluptatibus,
            dolorum vel ad sed, quisquam eum!
          </p>
          <hr>
          <h6>-> Jhon Clonny</h6>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="preorder">
          <div class="child">
            <h2 class="white" style="font-weight: bold;">PRE-ORDER CREDIT PHYSICS </h2>
            <p class="my-3 white">Learn how to fix your credit the right way.</p>
            <button class="order-btn">PREORDER</button>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection