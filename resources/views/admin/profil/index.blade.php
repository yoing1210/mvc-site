@extends('admin.layouts.main') 

@section('container')
<div id="content" class="p-4 p-md-5 pt-5 ">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center mt-1 pt-1 pb-2 mb-3 border-bottom">
  <h1 class="h2">PROFIL DESA</h1>
</div>

@if(session()-> has ('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif


<div class="table-responsive col-lg-12">
  {{-- <a href="/admin/profil/create" class="btn btn-primary mb-3">Input Data Profil Desa </a> --}}
  
  @foreach ($profil as $profils)
  <a href="/admin/profil/{{ $profils->id }}/edit" class="btn btn-primary mb-3">Edit Profil Desa</a>
  
  <dl class="row">
    <dt class="col-sm-3">Nama Desa</dt>
    <dd class="col-sm-9">{{ $profils->nama }}</dd>
    <dt class="col-sm-3">Alamat Desa</dt>
    <dd class="col-sm-9">{{ $profils->alamat }}</dd>
    <dt class="col-sm-3">Kepala Desa</dt>
    <dd class="col-sm-9">{{ $profils->kd }}</dd>
    <dt class="col-sm-3">NIP</dt>
    <dd class="col-sm-9">{{ $profils->nip }}</dd>
    <dt class="col-sm-3">Kontak</dt>
    <dd class="col-sm-9">{{ $profils->kontak }}</dd>
    <dt class="col-sm-3"> email</dt>
    <dd class="col-sm-9">{{ $profils->email }}</dd>
    <dt class="col-sm-3"> pos</dt>
    <dd class="col-sm-9">{{ $profils->pos }}</dd>
    <dt class="col-sm-3"> luas</dt>
    <dd class="col-sm-9">{{ $profils->luas }}</dd>
    <dt class="col-sm-3"> penduduk</dt>
    <dd class="col-sm-9">{{ $profils->penduduk }}</dd>
    <dt class="col-sm-3"> visi</dt>
    <dd class="col-sm-9">{!! $profils->visi !!}</dd>
    <dt class="col-sm-3"> misi</dt>
    <dd class="col-sm-9">{!! $profils->misi !!}</dd>


  </dl>




@endforeach
 
</div>
</div>

@endsection