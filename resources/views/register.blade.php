

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
   <div class="my-5">
        <div class="container">
           <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-center"> Register!</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('register') }}" method="POST">
                                @csrf
                                @if(session('status') !== null)
                                    <div class="alert alert-danger">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                Full Name<input type="text"name="name"class="form-control"placeholder="enter fullname"value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror<br>
                                Email<input type="email"name="email"class="form-control"placeholder="enter your email"value="{{ old('email') }}">
                                @error('email')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror<br>
                                Phone Number<input type="text"name="phone"class="form-control"placeholder="enter your phone number"value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror<br>
                                Address<input type="type"name="address"class="form-control"placeholder="enter your addreaa"value="{{ old('address') }}">
                                @error('address')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror<br>
                                Password<input type="password"name="password"class="form-control"placeholder="enter new password"value="{{ old('password') }}">
                                @error('password')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                @enderror<br>
                                Confirm Password<input type="password"name="password_confirmation"class="form-control"placeholder="conform password"value="{{ old('password') }}">
                                <br>
                                <button type="submit"name="send" class="form-control badge bg-success py-3 fs-6">Sign up</button>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
</body>
</html>