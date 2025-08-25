@extends('layouts.app')

@section('title', 'Gambar')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Data Gambar</h4>
        <a href="{{ route('gambar.create') }}" class="btn btn-primary">Tambah Gambar</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Tanggal</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($gambars as $gambar)
            <tr>
                <td>{{ $gambar->judul }}</td>
                <td>{{ $gambar->tanggal }}</td>
                <td>
                    @if($gambar->gambar)
                    <img src="{{ asset('storage/'.$gambar->gambar) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('gambar.edit', $gambar->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('gambar.destroy', $gambar->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
