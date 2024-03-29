@extends('layouts.app')

{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Create')

{{-- Content body: main page content --}}
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>Form Tambah Data User</h1>
<form method="post" action="/user/tambah_simpan">

    {{-- @csrf --}}

    <label>Username</label>
    <input type="text" name="username" placeholder="Masukkan Username">
    <br>
    <label>Nama</label>
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan Password">
    <br>
    <label>Level ID</label>
    <input type="number" name="level_id" placeholder="Masukkan ID Level">
    
    <label for="kategori_kode">Kode Kategori</label>
    <input id="kategori_kode" type="text" name="kategori_kode" class="@error('kategori_kode') is-invalid @enderror">
    @error('kategori_kode')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <br><br>
    <input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection
