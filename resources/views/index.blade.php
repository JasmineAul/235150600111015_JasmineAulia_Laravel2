<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgb(199, 169, 192)">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Testimonials</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Support Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <div class="text-center mt-5">
      <h2 class="mb-4">Welcome to Blogs</h2>

      <div class="row justify-content-center">
          <div class="col-md-5">
            <p>Belum punya akun?</p>
            <a class="btn btn-primary mb-10" href="{{ route('registrasi.tampil') }}">Register</a>
            <br><br>
            <p>Sudah punya akun?</p>
            <a class="btn btn-primary" href="{{ route('login.tampil') }}">Login</a>
          </div>
      </div>
  </div>
</body>
</html>
