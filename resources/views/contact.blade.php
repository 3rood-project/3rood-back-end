@extends('layouts.master')

@section('title', 'Contact us')
@section('content')

    <section class="contact-section section-padding" id="section_6">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                    <div class="contact-info-wrap">
                        <h2>Get in touch</h2>



                        <div class="contact-image-wrap d-flex flex-wrap">
                            <img src="https://cdn-icons-png.flaticon.com/64/3135/3135715.png" class="img-fluid avatar-image"
                                alt="">

                            <div class="d-flex flex-column justify-content-center ms-3">
                                <p class="mb-0">Osama Dasooky</p>
                                <p class="mb-0">osamadasooky6@gmail.com<strong></strong></p>
                            </div>
                        </div>




                        <div class="contact-info">
                            <h5 class="mb-3">Contact Infomation</h5>

                            <p class="d-flex mb-2">
                                <i class="bi-geo-alt me-2"></i>
                                Jordan
                            </p>

                            <p class="d-flex mb-2">
                                <i class="bi-telephone me-2"></i>

                                <a href="tel: 077-777-7777">
                                    077-777-7777
                                </a>
                            </p>

                            <p class="d-flex">
                                <i class="bi-envelope me-2"></i>

                                <a href="mailto:info@yourgmail.com">
                                    Admin@3rood.org
                                </a>
                            </p>


                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-12 mx-auto">
                    <form class="custom-form contact-form" action="/contactForm" method="post">
                        @csrf
                        <h2>Contact form</h2>


                        <div class="row">
                            {{-- <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="first-name" id="first-name" class="form-control"
                                placeholder="Jack" required>
                        </div> --}}

                            <div>
                                <input type="text"
                                    @if (Auth::check()) value="{{ auth()->user()->name }}" @endif
                                    name="name" id="last-name" class="form-control" placeholder="Name" required>
                                @error('name')
                                    <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <input type="email" @if (Auth::check()) value="{{ auth()->user()->email }}" @endif
                            name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email"
                            required>
                        @error('email')
                            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
                        @enderror
                        <textarea name="message" rows="5" class="form-control" id="message" placeholder="How can we help you?"></textarea>
                        @error('message')
                            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
                        @enderror
                        <button type="submit" class="form-control">Send Message</button>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
