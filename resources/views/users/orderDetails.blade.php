@extends('layouts.master')

@section('title', 'Order Details')

@section('content')
    <section class="about-section section-padding">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-start ">
                <div class="col-md-6 col-12  ">
                    <p><b>order id</b>: 11</p>
                    <p><b>Order From</b>: Shop name</p>
                    <p><b>phone</b>: 0786238190</p>
                    <p><b>order date</b>: 2002/11/3</p>
                </div>
                <div class="col-md-6 col-12  ">
                    <p><b>Totle</b>: 30 JD</p>
                    <p><b>order status</b>: On Delivery</p>
                    <p><b>adress delivery</b>: new zarqa -36str</p>
                    <p><b>Nots</b>: no potato</p>
                </div>
            </div>
            <hr class=" mt-1">
            {{-- products that user ordered  --}}
            <div class="container row  about-section ">
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-5 ">
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
                                    <span>Quantity</span>

                                </p>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-5 ">
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
                                    <span>Quantity</span>

                                </p>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-5 ">
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
                                    <span>Quantity</span>

                                </p>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
