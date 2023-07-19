<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
   <div class="my-5">
        <div class="container">
           <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3 class="text-center"> Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ url('login') }}" method="POST">
                                @csrf
                                  @if(session('message') !== null)
                                    <div class="alert alert-danger">
                                        {{ session('message') }}
                                    </div>
                                @endif
                                Email<input type="text"name="email"class="form-control"placeholder="enter email"><br>
                                Password <a href="#" class="text-right" style="margin-left:35%; text-decoration:none;">Forgot Password?</a><br>
                                <input type="password"name="password"class="form-control"placeholder="enter password"><br>
                                <button type="submit"name="send" class="form-control badge bg-success py-3 fs-6">Sign in</button><br><br>
                                <p style="margin-left: 20px">If you are New <a href="{{ url('register') }}" style="text-decoration:none">Create new account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
           </div>
        </div>
   </div>
</body>
</html>