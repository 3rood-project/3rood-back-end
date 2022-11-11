@extends('layouts.master')

@section('title', 'product Details')

@section('content')

    <section class="news-section section-padding">
        <div class="container">
            <div class="row">

                <div class="col-lg-5 col-12">
                    <div class="news-block">
                        <div class="news-block-top">
                            <img src="https://via.placeholder.com/500" class="news-image img-fluid w-100" alt="">
                        </div>

                    </div>
                </div>


                <div class="col-lg-5 col-12 mx-auto mt-4 mt-lg-0">
                    <div class="news-block-info">
                        <div class="news-block-title mb-2 ">
                            <div class="d-flex">

                                <h6>
                                    <h5 class="fs-5"> Product name</h5>
                                </h6>
                            </div>

                            <div class="d-flex gap-2">
                                <p> <b> Shop Name</b></p>
                            </div>
                            <div class="d-flex gap-2">
                                <p> price: <b> 10 jd</b></p>
                            </div>

                            <div class="d-flex gap-2">
                                <p>
                                    Category:<b> name</b>
                                </p>
                            </div>




                            <div class="news-block-body">
                                <p class="fw-semibold">description </p>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Possimus ipsa corporis sapiente
                                    odio, iste ullam qui nulla quas consequuntur nihil rem, ducimus, voluptatibus deleniti
                                    at vero porro quaerat tempora similique.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex row align-items-center mt-4">
                            <div class="row  ">
                                <form action="">


                                    <div class="col-12  mb-2 ">

                                        <span>
                                            <i class="bi bi-dash mx-2" id="mines"
                                                style="cursor: pointer;font-size:20px;"></i>
                                        </span>

                                        <input type="number" id="num-product" name="num-product" value="1"
                                            style="width: 50px;">


                                        <span>
                                            <i class="bi bi-plus-lg mx-2" id="plus"
                                                style="cursor: pointer;font-size:20px;"></i>
                                        </span>

                                        <small class="mx-4">
                                            <input type="submit" value="Add To Cart" class="custom-btn btn " />
                                        </small>
                                    </div>
                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
