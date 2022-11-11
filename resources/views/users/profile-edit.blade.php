@extends('layouts.master')

@section('title', 'profile')

@section('content')

    <div class="container">
        <form class="custom-form volunteer-form my-5 mb-lg-5 " action="/update" method="post" role="form"
            enctype="multipart/form-data">
            @csrf
            <h3 class="mb-5 text-center">Edit Profile Infomation</h3>

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


            <button type="submit" class="form-control w-auto px-5 mx-auto ">save</button>


        </form>
    </div>

    </section>

@endsection
