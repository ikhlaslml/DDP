@extends('layouts.app')

@section('title', 'buku')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Data buku</h4>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah buku</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Readmore</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bukus as $buku)
            <tr>
                <td>{{ $buku->judul }}</td>
                <td>{{ $buku->penulis}}</td>
                <td>{{ $buku->readmore }}</td>
                <td>{{ Str::limit($buku->ringkasan,50) }}</td>
                <td>
                    @if($buku->gambar)
                    <img src="{{ asset('storage/'.$buku->gambar) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
