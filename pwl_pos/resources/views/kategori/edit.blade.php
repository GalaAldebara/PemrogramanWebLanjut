@extends('layouts.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit')

@section('content')
    <div>
        <h1>Edit Kategori</h1>
        <a href="{{ url('/kategori') }}">Kembali</a>
        <br><br>
        
        <form method="post" action="{{ url('/kategori/edit/' . $data->kategori_id) }}">
            @csrf
            @method('PUT')

            <label>Kategori Nama</label>
            <input type="text" name="kategori_nama" placeholder="Masukkan Nama" value="{{ $data->kategori_nama }}">
            <br>
            <label>Kategori Kode</label>
            <input type="text" name="kategori_kode" placeholder="Masukkan Kode" value="{{ $data->kategori_kode }}">
            <br><br>
            <input type="submit" class="btn btn-success" value="Ubah">
        </form>
    </div>
@endsection  
