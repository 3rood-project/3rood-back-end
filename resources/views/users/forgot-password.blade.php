@extends('layouts.master')

@section('title', 'Forgot Password')

@section('content')
    @error('email')
        <div class="alert alert-danger text-center">
            {{ $message }}
        </div>
    @enderror
    @if (session()->has('status'))
        <div class="alert alert-success text-center">
            {{ session()->get('status') }}
        </div>
    @endif
    <div class="container">
        <form class="custom-form volunteer-form mt-5 mb-5 pb-5" action="/forgot-password" method="post" role="form">
            @csrf
            <h3 class="mb-5 text-center">Reset My Password</h3>

            <div class="row w-50 mx-auto mb-3 pt-2">


                <div class=" col-12">
                    <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control"
                        placeholder="Jackdoe@gmail.com">
                </div>

            </div>


            <button type="submit" class="form-control w-50 mx-auto">Send Password Reset Link</button>
        </form>
    </div>

@endsection
