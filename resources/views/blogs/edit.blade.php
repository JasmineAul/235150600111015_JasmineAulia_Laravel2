<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Blog</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

   
</head>
<body>
     {{-- navbar start --}}
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
  {{-- navbar ends --}}
    <h1>Edit Blog</h1>
<form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="">Judul</label>
        <input type="text" name="judul" value="{{ $blog->judul }}">
    </div>
    <div>
        <label for="">Isi</label>
        <input type="text" name="isi" value="{{ $blog->isi }}">
    </div>
    <div>
        <label for="">Pembuat</label>
        <input type="text" name="pembuat" value="{{ $blog->pembuat }}">
    </div>
    <div>
      <label for="">Foto</label>
      <input type="file" name="photo" value="{{ $blog->photo }}">
  </div>
    <div>
        <button type="submit">Simpan Perubahan</button>
    </div>
</form>
</body>
</html>