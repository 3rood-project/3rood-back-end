@extends('layouts.master')

@section('title', 'Change Password')

@section('content')

    <div class="container">

        <form class="custom-form volunteer-form my-5 mb-lg-0 text-center" action="/updatepass" method="post" role="form">
            @csrf
            <h3 class="mb-5">Change Password</h3>

            <div class="row w-50 mx-auto mb-3 pt-2">

                <div class=" col-12">
                    <input type="password" name="password_current" id="password" class="form-control"
                        placeholder="current Password" value="{{ old('password_current') }}">
                    <span class="error text-danger">{{ $errors->first('password_current') }}</span>
                </div>

                <div class=" col-12">
                    <input type="password" name="password_new" id="password" class="form-control"
                        placeholder="New Password" value="{{ old('password_new') }}">
                    <span class="error text-danger">{{ $errors->first('password_new') }}</span>
                </div>


                <div class=" col-12">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control"
                        placeholder="Confirm Your Password" value="{{ old('password_confirmation') }}">
                </div>
                <span class="error text-danger">{{ $errors->first('password_confirmation') }}</span>
            </div>

            <button type="submit" class="form-control w-50 mx-auto">Save Change</button>

        </form>
    </div>

@endsection
