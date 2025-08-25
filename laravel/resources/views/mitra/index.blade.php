@extends('layouts.app')

@section('title', 'Mitra')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Data Mitra</h4>
        <a href="{{ route('mitra.create') }}" class="btn btn-primary">Tambah Mitra</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Mitra</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mitras as $mitra)
            <tr>
                <td>{{ $mitra->nama_mitra }}</td>
                <td>
                    @if($mitra->gambar)
                    <img src="{{ asset('storage/'.$mitra->gambar) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('mitra.edit', $mitra->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('mitra.destroy', $mitra->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
