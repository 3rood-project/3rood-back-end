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
                    <a href=""><button class="btn custom-btn">Add Offer</button></a>

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

                <div class="text-center ">
                    <h4 class="text-start my-3 ">Pending Orders</h4>
                    <table class="table  mt-4 mx-auto" style="width:85%;">
                        <thead class="table-light">
                            <th>order ID</th>
                            <th>Order From</th>
                            <th> details</th>
                            <th> amount</th>
                            <th> action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted">1</td>
                                <td class="text-muted">osama das</td>
                                <td class="text-muted">
                                    <a href="/profile/orderDetails/id">View</a>
                                </td>
                                <td class="text-muted">30JD</td>
                                <td class="text-muted">
                                    <b class="text-success"> Aproove</b> |
                                    <b class="text-danger"> Reject </b>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">1</td>
                                <td class="text-muted">osama das</td>
                                <td class="text-muted">
                                    <a href="/profile/orderDetails/id">View</a>
                                </td>
                                <td class="text-muted">30JD</td>
                                <td class="text-muted">
                                    <b class="text-success"> Aproove</b> |
                                    <b class="text-danger"> Reject </b>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">1</td>
                                <td class="text-muted">osama das</td>
                                <td class="text-muted">
                                    <a href="/profile/orderDetails/id">View</a>
                                </td>
                                <td class="text-muted">30JD</td>
                                <td class="text-muted">
                                    <b class="text-success"> Aproove</b> |
                                    <b class="text-danger"> Reject </b>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <div class="text-center mt-5">
                    <h4 class="text-start my-3 ">Approved Orders</h4>
                    <table class="table  mt-4 mx-auto" style="width:85%;">
                        <thead class="table-light">
                            <th>order ID</th>
                            <th>Order From</th>
                            <th> order date</th>
                            <th> Status</th>
                            <th> details</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted">1</td>
                                <td class="text-muted">osama das</td>
                                <td class="text-muted">2022/5/2 3:50</td>
                                <td class="text-muted">
                                    preparing | ondelivery | delivered
                                </td>
                                <td class="text-muted">
                                    <a href="/profile/orderDetails/id">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">1</td>
                                <td class="text-muted">osama das</td>
                                <td class="text-muted">2022/5/2 3:50</td>
                                <td class="text-muted">
                                    preparing | ondelivery |delivered
                                </td>
                                <td class="text-muted">
                                    <a href="/profile/orderDetails/id">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted">1</td>
                                <td class="text-muted">osama das</td>
                                <td class="text-muted">2022/5/2 3:50</td>
                                <td class="text-muted">
                                    preparing | ondelivery |delivered
                                </td>
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
