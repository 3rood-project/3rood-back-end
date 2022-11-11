@extends('layouts.master')

@section('title', 'profile')
@section('content')



    <section class="about-section section-padding">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-start ">
                <div class="col-lg-4 col-md-4 col-12 text-center ">
                    <img width="300px" style="object-fit:cover;height:300px" src=" "
                        class="ms-lg-auto bg-light shadow-lg img-fluid rounded-5" alt="">
                </div>

                <div class="col-lg-5 col-md-5 col-12 ">

                    <div class=" d-flex flex-column align-items-start justify-content-center pt-5 ">
                        <h2 style="text-transform: capitalize">Osama Dasookt</h2>

                        <p> <b> Email: </b> osamadasooky@gmail.com</p>
                        <p> <b> city: </b> zarqa </p>
                        <p> <b> Gender: </b> male</p>
                        <p class="text-muted mb-lg-4 mb-md-4 ml-3"><b>Phone</b>: 0786238190</p>
                        <p class="text-muted mb-lg-4 mb-md-4 ml-3"><b>Birthday</b>:1/6/1999</p>



                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-12 d-none d-md-block  ">
                    <h3 class="custom-text-block d-flex justify-content-end"> <a href="/editProfile"><i
                                class="bi bi-gear-fill "></i></a></h3>

                </div>

            </div>
            <hr class=" mt-5">

            {{-- Order History --}}
            <div class="container row  about-section section-padding text-center">
                <h2 class="custom-text " style="font-size:35px">Order History </h2>

                <div class="text-center ">
                    <table class="table  mt-4 mx-auto" style="width:85%;">
                        <thead class="table-light">
                            <th>order ID</th>
                            <th>Shop name</th>
                            <th> order amount</th>
                            <th> order date</th>
                            <th> details</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted">1</td>
                                <td class="text-muted">zwahrah market</td>
                                <td class="text-muted">30JD</td>
                                <td class="text-muted">2022/11/3</td>
                                <td class="text-muted">
                                    <a href="/profile/orderDetails/id">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">2</td>
                                <td class="text-muted">zwahrah market</td>
                                <td class="text-muted">30JD</td>
                                <td class="text-muted">2022/11/3</td>
                                <td class="text-muted">
                                    <a href="/profile/orderDetails/id">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">3</td>
                                <td class="text-muted">zwahrah market</td>
                                <td class="text-muted">30JD</td>
                                <td class="text-muted">2022/11/3</td>
                                <td class="text-muted">
                                    <a href="/profile/orderDetails/id">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

@endsection
