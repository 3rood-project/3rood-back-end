@extends('layouts.master')

@section('title', 'cart')

@section('content')
    <div class="row">

        <div class="col-lg-9 ">
            <div class="about-section section-padding ">
                <h2 class="custom-text mx-lg-5" style="font-size:35px">Cart </h2>

                <div class="text-center ">
                    <table class="table  mt-4 mx-auto" style="width:80%;">
                        <thead class="table-light">
                            <th> </th>
                            <th>Product image</th>
                            <th> Product Name</th>
                            <th> Price</th>
                            <th> Quantity</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-muted"><i class="bi bi-trash-fill"></i></td>
                                <td class="text-muted">
                                    <img src="https://via.placeholder.com/100" class="news-image img-fluid " alt=""
                                        style="width: 100px">
                                </td>
                                <td class="text-muted">manga</td>
                                <td class="text-muted">3 JD</td>
                                <td class="text-muted">
                                    <span>
                                        <i class="bi bi-dash mx-2" id="mines"
                                            style="cursor: pointer;font-size:20px;"></i>
                                    </span>

                                    <input type="number" id="num-product" name="num-product" value="1"
                                        style="width: 40px;">


                                    <span>
                                        <i class="bi bi-plus-lg mx-2" id="plus"
                                            style="cursor: pointer;font-size:20px;"></i>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-muted"><i class="bi bi-trash-fill"></i></td>
                                <td class="text-muted">
                                    <img src="https://via.placeholder.com/100" class="news-image img-fluid " alt=""
                                        style="width: 100px">
                                </td>
                                <td class="text-muted">manga</td>
                                <td class="text-muted">3 JD</td>
                                <td class="text-muted">
                                    <span>
                                        <i class="bi bi-dash mx-2" id="mines"
                                            style="cursor: pointer;font-size:20px;"></i>
                                    </span>

                                    <input type="number" id="num-product" name="num-product" value="1"
                                        style="width: 40px;">


                                    <span>
                                        <i class="bi bi-plus-lg mx-2" id="plus"
                                            style="cursor: pointer;font-size:20px;"></i>
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="col-lg-3 ">
            <div class="about-section section-padding mt-5  " style="text-align: -webkit-center;">
                <table class="table  mt-4" style="width:80%;">
                    <thead class="table-light">
                        <th></th>
                        <th> Price</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-muted">Sub Total</td>
                            <td class="text-muted">3 JD</td>
                        </tr>
                        <tr>
                            <td class="text-muted">delivery</td>
                            <td class="text-muted">2 JD</td>
                        </tr>
                        <tr>
                            <td class="text-muted">total</td>
                            <td class="text-muted">5 JD</td>
                        </tr>
                    </tbody>
                </table>
                <a href=""><button class="custom-btn p-2 btn">Update cart</button></a>
                <a href="/checkout"><button class="custom-btn p-2 btn">Checkout</button></a>
            </div>
        </div>


    </div>
@endsection
