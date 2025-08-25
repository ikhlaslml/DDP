@extends('layouts.app')

@section('title', 'Tambah Infografis')

@section('content')
<h4>Tambah Infografis</h4>
<form action="{{ route('infografis.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Ringkasan</label>
        <textarea name="keterangan" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Gambar</label>
        <input type="file" name="gambar[]" class="form-control" multiple required>
        <div id="preview" class="mt-3 d-flex flex-wrap gap-2"></div>
    </div>
    <div class="mb-3">
        <label>Link</label>
        <input type="text" name="link" class="form-control" required>
    </div>
    <button class="btn btn-primary">Simpan</button>
</form>
<script>
    document.getElementById('gambar').addEventListener('change', function (event) {
        let preview = document.getElementById('preview');
        preview.innerHTML = ""; // Bersihkan sebelumnya

        Array.from(event.target.files).forEach(file => {
            if (file.type.startsWith('image/')) {
                let reader = new FileReader();
                reader.onload = function (e) {
                    let img = document.createElement('img');
                    img.src = e.target.result;
                    img.width = 120;
                    img.classList.add('me-2', 'mb-2');
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>

@endsection
