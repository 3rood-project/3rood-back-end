@extends('layouts.master')

@section('title', 'Sign up')

@section('content')

    @error('email')
        <div class="alert alert-danger text-center">
            {{ $message }}
        </div>
    @enderror
    <div class="container">
        <form class="custom-form volunteer-form mt-5 mb-1 pb-5" action="/reset-password" method="post" role="form">
            @csrf
            <h3 class="mb-5 text-center">Reset Your Password</h3>

            <div class="row w-50 mx-auto mb-3 pt-2">
                <div class=" col-12">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Jackdoe@gmail.com">
                </div>

                @error('email')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror

                <div class=" col-12">
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}"
                        placeholder="Password">
                </div>


                @error('password')
                    <p class="text-danger text-left small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror


                <div class=" col-12">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Confirm Your Password" value="{{ old('password_confirmation') }}">
                </div>

                @error('password_confirmation')
                    <p class="text-danger text-left  small" style="margin-top: -1.5rem">{{ $message }}</p>
                @enderror


                {{-- <input type="hidden" name="token" id="token" class="form-control" value="{{ $token }}"> --}}


            </div>

            <button type="submit" class="form-control w-50 mx-auto">Reset Password</button>
        </form>
    </div>

@endsection
