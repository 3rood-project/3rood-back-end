@extends('layouts.master')

@section('title', 'join us')

@section('content')
    <div class="container">
        <form class="custom-form volunteer-form mt-5 mb-0 pb-0" action="/users/store" method="post" role="form">
            @csrf
            <h3 class="mb-5 text-center">Register Today and Join Our Family</h3>

            <div class="row w-lg-50 mx-auto mb-3 pt-2">
                <div class=" col-6">
                    <input type="text" name="shopname" id="shopname" class="form-control" value="{{ old('shopname') }}"
                        placeholder="Shop Name">
                </div>
                @error('shopname')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror
                <div class=" col-6">
                    <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}"
                        placeholder="City">
                </div>
                @error('city')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror

                <div class=" col-12">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Jackdoe@gmail.com">
                </div>

                @error('email')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror

                <div class=" col-12">
                    <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}"
                        placeholder="Address">
                </div>
                @error('address')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror



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


                <div class=" col-3">
                    <input type="time" name="openT" id="openT" class="form-control" value="{{ old('openT') }}"
                        placeholder="Open Time">
                </div>
                @error('openT')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror

                <div class=" col-3">
                    <input type="time" name="closeT" id="closeT" class="form-control" value="{{ old('closeT') }}"
                        placeholder="Open Time">
                </div>
                @error('closeT')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror
                <div class=" col-6">
                    <input type="" name="phoneNumber" id="phoneNumber" class="form-control"
                        value="{{ old('phoneNumber') }}" placeholder="Phone Number">
                </div>
                @error('phoneNumber')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror
                <div class=" col-12">
                    <input type="" name="wallet" id="wallet" class="form-control" value="{{ old('wallet') }}"
                        placeholder="Wallet Number">
                </div>
                @error('wallet')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="form-control w-50 mx-auto">Sign Up</button>
        </form>
    </div>
@endsection
