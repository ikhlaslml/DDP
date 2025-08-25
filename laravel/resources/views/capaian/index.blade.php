@extends('layouts.app')

@section('title', 'Pencapaian Data')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Data Pencapaian Data</h4>
        <a href="{{ route('capaian.create') }}" class="btn btn-primary">Tambah Pencapaian Data</a>
    </div>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Desa</th>
                <th>Dusun</th>
                <th>RW</th>
                <th>Kelurahan</th>
                <th>Bangunan</th>
                <th>KK</th>
                <th>Jiwa</th>
                <th>Laki-laki</th>
                <th>Perempuan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($capaians as $capaian)
            <tr>
                <td>{{ $capaian->desa }}</td>
                <td>{{ $capaian->dusun }}</td>
                <td>{{ $capaian->rw }}</td>
                <td>{{ $capaian->kelurahan }}</td>
                 <td>{{ $capaian->bangunan }}</td>
                <td>{{ $capaian->kk }}</td>
                <td>{{ $capaian->jiwa }}</td>
                <td>{{ $capaian->laki }}</td>
                <td>{{ $capaian->perempuan }}</td>
                <td>
                    <a href="{{ route('capaian.edit', $capaian->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('capaian.destroy', $capaian->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
