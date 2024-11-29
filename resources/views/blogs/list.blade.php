<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Blog</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap-5.3.3-dist/css/bootstrap.css')}}">
</head>
<body>
    {{-- navbar start --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: rgb(199, 169, 192)">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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
    <div class="container mt-5">
        <a href="/tambah" class="btn btn-primary mb-3">Tambah Blog</a>

        @foreach($blogs as $blog)
        <div class="card mb-3">
            <div class="card-body">
                <h3 class="card-title">Judul: {{ $blog["judul"] }}</h3>
                <p class="card-text">{{ $blog["isi"] }}</p>
                <p><strong>Author:</strong> {{ $blog["pembuat"] }}</p>
                <p><strong>Tanggal Buat:</strong> {{ $blog["tanggal_buat"] ?? 'Tidak tersedia' }}</p>
                @if($blog->photo)
                <img src="{{ asset('storage/' . $blog->photo) }}" alt="Foto Blog" style="max-width: 50%; height: 50%;" class="mb-3">
                @endif
                <div>
                    <a href="{{ route('blog.edit', $blog['id']) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('blog.destroy', $blog['id']) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus blog ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <script src="{{ asset('bootstrap/bootstrap-5.3.3-dist/js/bootstrap.bundle.js') }}"></script>
</body>
</html>