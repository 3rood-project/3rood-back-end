@extends('layouts.master')

@section('title', 'Checkout')

@section('content')
    <div class="row">

        <div class="col-lg-12 ">
            <div class="about-section section-padding ">
                <h2 class="custom-text mx-lg-5" style="font-size:35px">Checkout </h2>

                <div class=" text-center mt-4">
                    <form class="custom-form row container mx-auto" action="/users/store" method="post" role="form">
                        @csrf
                        <h6 class="mb-3 text-start">Address</h6>

                        <div class="row w-lg-50 mx-auto mb-3 pt-2 align-content-start">
                            <div class=" col-6">
                                <input type="text" name="fullName" id="fullName" class="form-control"
                                    value="{{ old('fullName') }}" placeholder="Full name">
                            </div>
                            <div class=" col-6">
                                <input type="number" name="phoneNumber" id="phoneNumber" class="form-control"
                                    value="{{ old('phoneNumber') }}" placeholder="Phone Number">
                            </div>

                            <div class=" col-6">
                                <input type="text" name="city" id="city" class="form-control"
                                    value="{{ old('city') }}" placeholder="city">
                            </div>

                            <div class=" col-6">
                                <input type="email" name="email" id="email" value="{{ old('email') }}"
                                    class="form-control" placeholder="Jackdoe@gmail.com">
                            </div>

                            <div class=" col-12">
                                <input type="address" name="address" id="address" value="{{ old('address') }}"
                                    class="form-control" placeholder="Address">
                            </div>
                            <div class=" col-12">
                                <textarea name="note" id="note" rows="3" class="form-control" placeholder="Note">{{ old('note') }}</textarea>
                            </div>


                            <div class="mb-5 text-start">
                                <h6 class="mb-3 ">Payment method</h6>
                                <input type="radio" name="Payment" id="visa"class="ms-4">
                                <label for="visa">visa</label>
                                <input type="radio" name="Payment" id="cash"class="ms-4">
                                <label for="cash">cash</label>

                            </div>
                        </div>
                        <div class="row w-lg-50 mx-auto mb-3 pt-2">
                            <div class="" style="text-align: -webkit-center;">
                                <table class="table  mt-4" style="width:80%;">

                                    <tbody>
                                        <tr>
                                            <td class="d-flex">
                                                <div>
                                                    <img src="https://via.placeholder.com/100"
                                                        alt=""class="news-image img-fluid w-100">
                                                </div>
                                                <div class="mx-3">
                                                    <h6>product name</h6>
                                                    <p class="text-muted d-flex justify-content-between">
                                                        <span>price</span><span>Quantity</span>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex">
                                                <div>
                                                    <img src="https://via.placeholder.com/100"
                                                        alt=""class="news-image img-fluid w-100">
                                                </div>
                                                <div class="mx-3">
                                                    <h6>product name</h6>
                                                    <p class="text-muted d-flex justify-content-between">
                                                        <span>price</span><span>Quantity</span>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-flex">
                                                <div>
                                                    <img src="https://via.placeholder.com/100"
                                                        alt=""class="news-image img-fluid w-100">
                                                </div>
                                                <div class="mx-3">
                                                    <h6>product name</h6>
                                                    <p class="text-muted d-flex justify-content-between">
                                                        <span>price</span><span>Quantity</span>
                                                    </p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted d-flex justify-content-between"><span>Sub Total :</span>
                                                <span> 3 JD</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-muted d-flex justify-content-between"><span>delivery :</span>
                                                <span> 3 JD</span>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="text-muted d-flex justify-content-between"><span>total:</span> <span>
                                                    5 JD</span></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <button type="submit" class="form-control w-50 mx-auto">Place Order</button>
                            </div>

                        </div>
                    </form>

                </div>

            </div>

        </div>



    </div>
@endsection
