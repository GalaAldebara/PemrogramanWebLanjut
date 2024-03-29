@extends('layouts.app')
{{-- Customize layout sections --}}
@section('subtitle', 'Kategori')
@section('content_header_title', 'Level')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tambah Data User</title>
    </head>
    <body>
        <h1>Form Tambah Data User</h1>
        <form action="../level" method="post">
            <label>Kode Level</label>
            <input type="text" name="level_kode" id="kodeKategori" placeholder="Masukkan Level">
            <br>
            <label>Nama Level</label>
            <input type="text" name="level_nama" id="namaKategori" placeholder="Masukkan Nama Kategori">
            <br><br>
            <input type="submit" class="btn btn-success" value="Simpan">
        </form>
    </body>
</html>   
@endsection