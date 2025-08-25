@extends('layouts.app')

@section('title', 'testimoni')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Data testimoni</h4>
        <a href="{{ route('testimoni.create') }}" class="btn btn-primary">Tambah testimoni</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>nama</th>
                <th>jabatan</th>
                <th>tanggal</th> 
                <th>isi</th>   
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testimonis as $testimoni)
            <tr>
                <td>{{ $testimoni->nama }}</td>
                <td>{{ $testimoni->jabatan }}</td>
                <td>{{ $testimoni->tanggal }}</td>
                <td>{{ $testimoni->isi }}</td>
                <td>
                    @if($testimoni->gambar)
                    <img src="{{ asset('storage/'.$testimoni->gambar) }}" width="80">
                    @endif
                </td>
                <td>
                    <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
