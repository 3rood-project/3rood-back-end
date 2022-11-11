@extends('layouts.master')

@section('title', 'Add Product')

@section('content')

    <div class="container">
        <form class="custom-form volunteer-form my-5 mb-lg-0 " action="/update" method="post" role="form"
            enctype="multipart/form-data">
            @csrf
            <h3 class="mb-5 text-center">Add New Product</h3>

            <div class="row w-50 mx-auto mb-3 pt-2">
                <div class=" col-12">
                    <label class="text-start fw-semibold " for="name">Product Name</label>
                    <input type="text" name="pname" id="pname" class="form-control text-dark" required>
                </div>

                <div class=" col-6">
                    <label class="text-start fw-semibold " for="price">Price</label>
                    <input type="text" name="price" id="price" class="form-control text-dark" required
                        value="">
                </div>
                <div class=" col-6">
                    <label class="text-start fw-semibold " for="duoto">Duo to</label>
                    <input type="date" name="duoto" id="duoto" class="form-control text-dark" required
                        value="">
                </div>

                <div class=" col-12">
                    <label class="text-start fw-semibold " for="description">Discription</label>
                    <textarea type="text" name="description" id="description" class="form-control text-dark">  </textarea>
                </div>

                <label class="text-start fw-semibold " for="name">Product photo</label>
                <div class=" col-12 d-flex align-items-end">
                    <div class="me-5">
                        <img width="100px" src="https://via.placeholder.com/300">
                    </div>
                    <input type="file" name="image" class="form-control" value="">
                </div>

            </div>

            <button type="submit" class="form-control w-auto px-5 mx-auto ">save</button>


        </form>
    </div>

    </section>

@endsection
