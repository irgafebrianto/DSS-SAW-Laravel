@extends('layouts.app')

@section('content')

@if(Session::has('flash_message'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="close btn-round" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button>

    {{ Session::get('flash_message') }}
</div>
</div>
@endif

<div align="center">
    <h2>FORM PENDAFTARAN</h2>
    <br>
</div>

<div align="center">
<form action="{{ url('/daftar') }}" method="post" enctype="multipart/form-data" style="width: 50%">
<div align="left">
  <div>
    Nama <br>
    <input class="form-control" type="text" name="nama" required="required">
  </div>
  <div>
    Email <br>
    <input class="form-control" type="email" name="email" required="required">
  </div>
  <div>
    IPK <br>
    <input class="form-control" type="text" name="ipk" required="required">
  </div>
  <div>
    Prestasi <br>
    <input class="form-control" type="text" name="prestasi" required="required">
  </div>
  <div>
    Tingkat <br>
      <select class="form-control"  required="required" name="tingkat" title="Tingkat Prestasi">
        <option value="1">Lokal</option>
        <option value="2">Regional</option>
        <option value="3">Nasional</option>
        <option value="4">Internasional</option>
      </select>
  </div>
  <div>
    Pengalaman Kerja <br>
    <input class="form-control" type="text" name="pengalaman_kerja" required="required">
  </div>
  <div>
    Lama Kerja <br>
    <input class="form-control" type="text" name="lama_kerja" required="required">
  </div>
  <div>
    Pengalaman Organisasi <br>
    <input class="form-control" type="text" name="pengalaman_organisasi" required="required">
  </div>
  <div>
    Posisi <br>
      <select class="form-control"  required="required" name="posisi" title="Tingkat Prestasi">
        <option value="1">Anggota</option>
        <option value="2">Koordinator</option>
        <option value="3">Pengurus Harian</option>
        <option value="4">Ketua</option>
      </select>
  </div>
  <br>
  <div style="float:right; margin-bottom:30px;">
    <input type="submit" class="btn btn-success" value="Submit" name="submit">
    <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
    <button type="button" class="btn btn-default btn-simple">Kembali</button>
  </div>
  </div>
</form>
</div>


@endsection