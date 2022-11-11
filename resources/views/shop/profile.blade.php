@extends('layouts.master')

@section('title', ' shop profile')
@section('content')



    <section class="about-section section-padding">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-start ">
                <div class="col-lg-4 col-md-4 col-12 text-center ">
                    <img width="300px" style="object-fit:cover;height:300px" src=" "
                        class="ms-lg-auto bg-light shadow-lg img-fluid rounded-5" alt="">
                </div>

                <div class="col-lg-5 col-md-5 col-6 ">

                    <div class=" d-flex flex-column align-items-start justify-content-center pt-5 ">
                        <h2 style="text-transform: capitalize">Shop Name</h2>
                        <p> <b> category</b> </p>
                        <p> <b> city: </b> zarqa </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-6  d-md-block  pt-5">


                    <p class="custom-text-block d-flex justify-content-end mt-3">8:00am - 12:00am</p>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="/addProduct"><button class="btn custom-btn">Add Offer</button></a>

                </div>

            </div>



            {{-- Order History --}}
            <div class="container row  about-section section-padding ">
                <nav class="nav">
                    <a class="nav-tab  {{ request()->is('activeOrder') || request()->is('shopUser/profile') ? 'active' : '' }}"
                        href="/activeOrder">
                        Active Offers
                    </a>
                    <a class="nav-tab {{ request()->is('orders') ? 'active' : '' }}" href="/orders">
                        Orders
                    </a>

                </nav>
                <hr class=" mt-1">

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-5 ">
                    <div class="custom-block-wrap">
                        <a href="/allshops/">
                            <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                alt="">
                        </a>
                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Product name</h5>
                                <p class="mb-2 col-12 justify-content-between d-flex">
                                    <span>price Jd</span>
                                    <span>Duo to 2022/11/5</span>

                                </p>
                            </div>

                            <div class="d-flex row">
                                <a href="/allshops/" class="custom-btn btn  w-50 "><small><i
                                            class="bi bi-pencil-square"></i> Edit
                                    </small></a>

                                <a href="/volunteerInProject/" class="custom-btn btn col bg-danger"><small><i
                                            class="bi bi-trash-fill"></i> Delete</small></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-5 ">
                    <div class="custom-block-wrap">
                        <a href="/allshops/">
                            <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                alt="">
                        </a>
                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Product name</h5>
                                <p class="mb-2 col-12 justify-content-between d-flex">
                                    <span>price Jd</span>
                                    <span>Duo to 2022/11/5</span>

                                </p>
                            </div>


                            <div class="d-flex row">
                                <a href="" class="custom-btn btn  w-50 "><small><i class="bi bi-pencil-square"></i>
                                        Edit
                                    </small></a>

                                <a href="" class="custom-btn btn col bg-danger"><small><i
                                            class="bi bi-trash-fill"></i> Delete</small></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-5 ">
                    <div class="custom-block-wrap">
                        <a href="/allshops/">
                            <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                alt="">
                        </a>
                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Product name</h5>
                                <p class="mb-2 col-12 justify-content-between d-flex">
                                    <span>price Jd</span>
                                    <span>Duo to 2022/11/5</span>

                                </p>
                            </div>
                            <div class="d-flex row">
                                <a href="/allshops/" class="custom-btn btn  w-50 "><small><i
                                            class="bi bi-pencil-square"></i> Edit
                                    </small></a>

                                <a href="/volunteerInProject/" class="custom-btn btn col bg-danger"><small><i
                                            class="bi bi-trash-fill"></i> Delete</small></a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-5 ">
                    <div class="custom-block-wrap">
                        <a href="/allshops/">
                            <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                alt="">
                        </a>
                        <div class="custom-block">
                            <div class="custom-block-body">
                                <h5 class="mb-3">Product name</h5>
                                <p class="mb-2 col-12 justify-content-between d-flex">
                                    <span>price Jd</span>
                                    <span>Duo to 2022/11/5</span>

                                </p>
                            </div>


                            <div class="d-flex row">
                                <a href="/allshops/" class="custom-btn btn  w-50 "><small><i
                                            class="bi bi-pencil-square"></i> Edit
                                    </small></a>

                                <a href="/volunteerInProject/" class="custom-btn btn col bg-danger"><small><i
                                            class="bi bi-trash-fill"></i> Delete</small></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection
