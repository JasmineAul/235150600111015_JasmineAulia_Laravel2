@extends('layouts.app')

@section('content')
<div class="hero-section">
    <h1>Judul: My Blog</h1>
    <p class="blog-description">My boyy</p>
    <p class="blog-author">Author: Saya</p>
    <div class="blog-photo">
        <p>Foto:</p>
        <img src="{{ asset('path/to/photo.jpg') }}" alt="Blog Image" />
    </div>
</div>
@endsection