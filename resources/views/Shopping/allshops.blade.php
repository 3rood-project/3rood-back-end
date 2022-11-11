@extends('layouts.master')

@section('title', 'Projects')
@section('content')

    @if ($message ?? false)
        <div class="alert alert-success text-center">
            {{ $message }}
        </div>
    @endif

    <section class="section-padding">

        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="col-12 ">
                        <form class="custom-form search-form" action="/projects" role="form">
                            <input class="form-control" type="search" name="search" placeholder="Search"
                                aria-label="Search" value="{{ @request('search') }}">

                            <button type="submit" class="form-control">
                                <i class="bi-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="tags-block mb-5 col-12">
                        <h5 class="mb-3">Categories</h5>
                        <a href="?status">
                            <span class="tags-block-link "> All </span>
                        </a>
                        <a href="?status=Fastion">
                            <span
                                class="tags-block-link {{ request('status') == 'active' ? 'active-category text-white' : '' }}">
                                Fastion </span>
                        </a>
                        <a href="?status=Food">
                            <span
                                class="tags-block-link {{ request('status') == 'in progress' ? 'active-category text-white' : '' }} ">
                                Food </span>
                        </a>
                        <a href="?status=market">
                            <span
                                class="tags-block-link {{ request('status') == 'completed' ? 'active-category text-white' : '' }}">
                                Market </span>
                        </a>
                    </div>

                </div>
                <div class="col-lg-9">
                    <div class="row gy-5">
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <a href="/allshops/name">
                                    <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                        alt="">
                                </a>
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Shop name</h5>
                                        <p class="mb-2">Zarqa </p>
                                        <p>category </p>
                                    </div>

                                    <div class="d-flex row">
                                        <a href="/allshops/name" class="custom-btn btn  w-100 "><small>Shop Now
                                            </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <a href="/allshops/name">
                                    <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                        alt="">
                                </a>
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Shop name</h5>
                                        <p class="mb-2">Zarqa </p>
                                        <p>category </p>

                                    </div>

                                    <div class="d-flex row">
                                        <a href="/allshops/name" class="custom-btn btn  w-100 "><small>Shop Now
                                            </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <a href="/allshops/name">
                                    <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                        alt="">
                                </a>
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Shop name</h5>
                                        <p class="mb-2">Zarqa </p>
                                        <p>category </p>
                                    </div>

                                    <div class="d-flex row">
                                        <a href="/allshops/name" class="custom-btn btn  w-100 "><small>Shop Now
                                            </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <a href="/allshops/name">
                                    <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                        alt="">
                                </a>
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Shop name</h5>
                                        <p class="mb-2">Zarqa </p>
                                        <p>category </p>
                                    </div>

                                    <div class="d-flex row">
                                        <a href="/allshops/name" class="custom-btn btn  w-100 "><small>Shop Now
                                            </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <a href="/allshops/name">
                                    <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                        alt="">
                                </a>
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Shop name</h5>
                                        <p class="mb-2">Zarqa </p>
                                        <p>category </p>
                                    </div>

                                    <div class="d-flex row">
                                        <a href="/allshops/name" class="custom-btn btn  w-100 "><small>Shop Now
                                            </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block-wrap">
                                <a href="/allshops/name">
                                    <img src="https://via.placeholder.com/300x200" class=" img-fluid custom-block-image"
                                        alt="">
                                </a>
                                <div class="custom-block">
                                    <div class="custom-block-body">
                                        <h5 class="mb-3">Shop name</h5>
                                        <p class="mb-2">Zarqa </p>
                                        <p>category </p>
                                    </div>

                                    <div class="d-flex row">
                                        <a href="/allshops/name" class="custom-btn btn  w-100 "><small>Shop Now
                                            </small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
