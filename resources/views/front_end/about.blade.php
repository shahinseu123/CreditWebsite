<title>About Us</title>
@extends('front_end.layouts.layout')

@section('content')
<section id="fixed-img-part-2">
    <div class="fixed-image-2">
        <div class="item">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-7 py-5">
                        <div class="py-5">
                            <h2 class="white mt-5" style="font-weight:bold">About Us</h2>
                            <p class="white mt-3">We don't just repair credit, we change lives!</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-5">
                        <!-- <img style="width: 200px;margin: 50% auto" src="./img//logo/CCM02.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end fixed image part  -->
<!-- about part  -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="py-5">
                    <h6 style="font-weight: bold;color: teal;">Integrity, Strategy, & Excellence</h6>
                    <h2 class="mt-4" style="text-transform: uppercase;">Let us help with all of your credit needss
                    </h2>
                    <p class="mt-4">Your credit is important to you. Our professionals not only have expertise in
                        credit but in
                        their respective areas of focus whether it be marketing, accounting, human resources or
                        design. </p>

                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row py-4">
                    <div class="col-4">
                        <img style="width: 140px;" src="./img/about/1(2).jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img style="width: 140px;" src="./img/about/2(3).jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img style="width: 140px;" src="./img/about/3(2).jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img style="width: 140px;" src="./img/about/4(2).jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img style="width: 140px;" src="./img/about/5.jpg" alt="">
                    </div>
                    <div class="col-4">
                        <img style="width: 140px;" src="./img/about/cream-corner-frame-photography-logo.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- the team  -->
<section>
    <div class="container">
        <h2 style="text-align: center;font-weight: bold;">OUR TEAM</h2>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <div class="anim-card student-card">
                    <img class="card-img-anim" style="width: 100%;border: 2px solid teal" src="{{asset("front_end/img/about/man-19.jpg")}}"
                        alt="">
                    <p class="anim-card-p" style="padding: 15px">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Accusamus ad amet aperiam corporis cumque distinctio eaque esse excepturi

                        Eius nemo neque non voluptas.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="anim-card student-card">
                    <img class="card-img-anim" style="width: 100%;border: 2px solid teal" src="{{asset("front_end/img/about/woman.jfif")}}"
                        alt="">
                    <p class="anim-card-p" style="padding: 15px">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Accusamus ad amet aperiam corporis cumque distinctio eaque esse excepturi

                        Eius nemo neque non voluptas.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="anim-card student-card">
                    <img class="card-img-anim" style="width: 100%;border: 2px solid teal" src="{{asset("front_end/img/about/man2.jpg")}}"
                        alt="">
                    <p class="anim-card-p" style="padding: 15px">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Accusamus ad amet aperiam corporis cumque distinctio eaque esse excepturi

                        Eius nemo neque non voluptas.</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <div class="anim-card student-card">
                    <img class="card-img-anim" style="width: 100%;border: 2px solid teal" src="{{asset("front_end/img/about/womn2.jpg")}}"
                        alt="">
                    <p class="anim-card-p" style="padding: 15px">Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Accusamus ad amet aperiam corporis cumque distinctio eaque esse excepturi

                        Eius nemo neque non voluptas.</p>
                </div>
            </div>
        </div>
    </div>
</section>  
@endsection