
@extends('layouts.app')
@section('content')

<br><br><br><br><br><br><br>
<div class="py-4">
    <div class="container">
        <div class="row justify-content-center">
               <div class="col-md-6" style="border: 0px;  justify-content: center; align-items: center;
            text-align: center;">
            <center> 
                <div class="card shadow m-auth" style="border: 0px solid #294424; padding: 30px;background-color:#ebf0ea; 
                    justify-content: center; margin:auth;
                    align-items: center;
                    text-align: center; ">
                    <div class="card-header">
                        <div class="h1">Registrater here</div>
                    </div>
                    <div class="card-body">

                        <form action="{{ url('register') }}" method="POST">
                            @csrf
                            @if(session('status') !== null)
                                <div class="alert alert-danger">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="form-group mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <label for="">Email address</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            <div class="form-group mb-3">
                                <label for="">phone number</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                                @error('address')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                                @error('password')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="">confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary" name="register">Register Now</button>
                            </div>
                        </form>

                    </div>
                </div>
            </center>
            </div>
        </div>
    </div>
</div>
@endsection