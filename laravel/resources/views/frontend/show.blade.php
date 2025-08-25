<!DOCTYPE html>
<html>
<head>
    <title>{{ $artikel->judul_artikel }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>{{ $artikel->judul_artikel }}</h1>
    <p><strong>Kategori:</strong> {{ $artikel->kategori->nama_kategori ?? '-' }}</p>
    @if($artikel->gambar)
        <img src="{{ asset('storage/'.$artikel->gambar) }}" class="img-fluid mb-3">
    @endif
    <div>{!! nl2br(e($artikel->isi_artikel)) !!}</div>
    <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
</body>
</html>
