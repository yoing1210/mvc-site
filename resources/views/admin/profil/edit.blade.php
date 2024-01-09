@extends('admin.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom ">
    <h1 class="h2">Edit Profil </h1>
  </div>

  <div class="col-lg-8">

    <form method="post" action="/admin/profil/{{ $profil->id }}" class="mb-5" enctype="multipart/form-data" >
        @csrf

{{-- profil --}}
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Desa</label>
          <input type="Text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ old('nama') }}">
          @error('nama')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat Desa</label>
          <input type="Text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
          @error('alamat')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="kd" class="form-label">Nama Kepala Desa</label>
          <input type="Text" class="form-control @error('kd') is-invalid @enderror" id="kd" name="kd" required autofocus value="{{ old('kd') }}">
          @error('kd')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="nip" class="form-label">nip</label>
          <input type="Text" class="form-control @error('nip') is-invalid @enderror" id="nip" name="nip" required autofocus value="{{ old('nip') }}">
          @error('nip')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="kontak" class="form-label">kontak</label>
          <input type="Text" class="form-control @error('kontak') is-invalid @enderror" id="kontak" name="kontak" required autofocus value="{{ old('kontak') }}">
          @error('kontak')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">email</label>
          <input type="Text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="pos" class="form-label">pos</label>
          <input type="Text" class="form-control @error('pos') is-invalid @enderror" id="pos" name="pos" required autofocus value="{{ old('pos') }}">
          @error('pos')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="luas" class="form-label">luas</label>
          <input type="Text" class="form-control @error('luas') is-invalid @enderror" id="luas" name="luas" required autofocus value="{{ old('luas') }}">
          @error('luas')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="penduduk" class="form-label">penduduk</label>
          <input type="Text" class="form-control @error('penduduk') is-invalid @enderror" id="penduduk" name="penduduk" required autofocus value="{{ old('penduduk') }}">
          @error('penduduk')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        
        <div class="mb-3">
          <label for="visi" class="form-label">visi</label>
          @error('visi')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="visi" type="hidden" name="visi" value="{{ old('visi',$profil->visi) }}">
          <trix-editor input="visi"></trix-editor>
        </div>

        <div class="mb-3">
          <label for="misi" class="form-label">misi</label>
          @error('misi')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="misi" type="hidden" name="misi" value="{{ old('misi',$profil->misi) }}">
          <trix-editor input="misi"></trix-editor>
         
        </div>
       
        
        <button type="submit" class="btn btn-primary">Edit Profil</button>
      </form>

  </div>

<script>

  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change',function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });


  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent) {
      imgPreview.src = oFREvent.target.result;
    }
  }
</script>


@endsection