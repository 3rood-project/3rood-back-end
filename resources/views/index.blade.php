@extends('layouts.master')

@section('title', 'Home')

@section('content')

    <main>


        {{-- hero section --}}
        <section class="hero-section hero-section ">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-12 p-0">
                        <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active position-relative">
                                    <img src="" class="" alt="...">

                                    <div class="position-absolute top-50 start-50 translate-middle" style="z-index: 3;">
                                        <h1 style="color: #fff;">3rood To Make you smile</h1>

                                        <p style="color: #fff;">All the offers you need in the same place</p>
                                        <p class="d-flex justify-content-center"><a
                                                class="nav-link custom-btn custom-border-btn btn " href="/allshops">start
                                                shop</a>
                                        </p>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        {{-- categories section --}}
        <section class="section-padding">
            <div class="container">
                <div class="row">

                    {{-- <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Welcome to Kind Heart Charity</h2>
                    </div> --}}

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="https://cdn-icons-png.flaticon.com/128/2515/2515263.png"
                                    class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Food</strong> Offers </p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="https://cdn-icons-png.flaticon.com/128/3211/3211391.png" width="150px"
                                    class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"><strong>Fashion</strong> Offers</p>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="https://cdn-icons-png.flaticon.com/128/862/862856.png"
                                    class="featured-block-image img-fluid" alt="">

                                <p class="featured-block-text"> <strong>Mart</strong> Offers</p>
                            </a>
                        </div>
                    </div>
                    {{--
                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="donate.html" class="d-block">
                                <img src="images/icons/scholarship.png" class="featured-block-image img-fluid"
                                    alt="">

                                <p class="featured-block-text"><strong>Scholarship</strong> Program</p>
                            </a>
                        </div>
                    </div> --}}

                </div>
            </div>
        </section>

        <section class="about-section section-padding">
            <div class="container">
                <div class="row justify-content-between">

                    <div class=" col-md-5 col-12">
                        <img src="images/portrait-volunteer-who-organized-donations-charity.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0"> Small Business</h2>


                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>

                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>

                            <a href="/joinUs" class="custom-btn btn smoothscroll"> join now</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="about-section section-padding">
            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-5 col-md-7 col-12">
                        <div class="custom-text-block">
                            <h2 class="mb-0"> people who want to sell item </h2>


                            <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                                charity theme based</p>

                            <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>

                            <a href="/joinUs" class="custom-btn btn smoothscroll"> join now</a>
                        </div>
                    </div>

                    <div class=" col-md-5 col-12">
                        <img src="images/portrait-volunteer-who-organized-donations-charity.jpg"
                            class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection
