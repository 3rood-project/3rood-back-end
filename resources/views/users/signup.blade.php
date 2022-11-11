@extends('layouts.master')

@section('title', 'Sign up')

@section('content')
    <div class="container">
        <form class="custom-form volunteer-form mt-5 mb-0 pb-0" action="/users/store" method="post" role="form">
            @csrf
            <h3 class="mb-5 text-center">Register Today and Join Our Family</h3>

            <div class="row w-lg-50 mx-auto mb-3 pt-2">
                <div class=" col-6">
                    <input type="text" name="fname" id="fname" class="form-control" value="{{ old('fname') }}"
                        placeholder="First name">
                </div>
                @error('fname')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror
                <div class=" col-6">
                    <input type="text" name="lname" id="lname" class="form-control" value="{{ old('lname') }}"
                        placeholder="Last name">
                </div>
                @error('lname')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror

                <div class=" col-12">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Jackdoe@gmail.com">
                </div>

                @error('email')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror

                <div class=" col-6">
                    <input type="date" name="birthday" id="birthday" class="form-control" value="{{ old('birthday') }}"
                        placeholder="Birthday">
                </div>
                @error('birthday')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror

                <div class=" col-6">
                    <select name="gender" id="gender" class="form-control" value="{{ old('birthday') }}">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>

                <div class=" col-6">
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}"
                        placeholder="Password">
                </div>

                @error('password')
                    <p class="text-danger text-left small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror


                <div class=" col-6">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Confirm Your Password" value="{{ old('password_confirmation') }}">
                </div>

                @error('password_confirmation')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror


                <div class=" col-6">
                    <input type="text" name="country" id="country" class="form-control" value="{{ old('country') }}"
                        placeholder="Country">
                </div>
                @error('country')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror
                <div class=" col-6">
                    <input type="number" name="phoneNumber" id="phoneNumber" class="form-control"
                        value="{{ old('phoneNumber') }}" placeholder="Phone Number">
                </div>
                @error('phoneNumber')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="form-control w-50 mx-auto">Sign Up</button>
        </form>
    </div>
    <div class="container text-center">
        <hr class="w-50 mx-auto">
        <form action="/redirect" method="get" class="custom-form volunteer-form mb-0 py-0">
            <button type="submit" class="form-control w-50 mx-auto">Continue With Google</button>
        </form>
        {{-- <a href="/redirect" class="custom-btn btn w-50 mx-auto"> Continue With Google</a> --}}
        <p class="my-3  text-center">Already a member? <a href="/login" class="text-decoration-underline">Log
                In</a></p>
    </div>
@endsection
