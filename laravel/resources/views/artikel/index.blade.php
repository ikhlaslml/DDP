@extends('layouts.app')

@section('title', 'Artikel')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Data Artikel</h4>
        <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah Artikel</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Readmore</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($artikels as $artikel)
            <tr>
                <td>{{ $artikel->judul_artikel }}</td>
                <td>{{ $artikel->kategori->nama_kategori ?? '-' }}</td>
                <td>{{ $artikel->readmore }}</td>
                <td>{{ Str::limit($artikel->isi_artikel,50) }}</td>
                <td>
                    @if($artikel->gambar)
                    <img src="{{ asset('storage/'.$artikel->gambar) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('artikel.edit', $artikel->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('artikel.destroy', $artikel->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
