<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


<body>
    <div class="text-center mt-5">
        <h2>Registrasi</h2>

        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body text-start">
                        <form action="{{ route('login.submit') }}" method="post">
                            @csrf
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control mb-2">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control mb-2">
                            <button class="btn btn-primary">Login</button>
                        </form>
                        @if(session('gagal'))
                        <p class="text-danger">{{ session('gagal') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>
