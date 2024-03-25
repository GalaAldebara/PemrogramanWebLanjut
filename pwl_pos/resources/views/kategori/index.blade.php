@extends('layouts.app')

@section('subtitle', 'kategori')
@section('content_header_title', 'home')
@section('content_header_subtitle', 'kategori')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/kategoriedit.css') }}">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kategori') }}">Manage Kategori</a>
                    </li>
                    <!-- Other menu items -->
                </ul>
            </div>
            <div class="card-body">
                <a href="{{ url('/kategori/create') }}" class="btn btn-success">Tambah</a>
                {{ $dataTable->table([
                    'class' => 'table',
                    'width' => '100%',
                    'cellspacing' => '0'
                ]) }}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
    <script>
        $(document).ready(function() {
            $('#kategori-table').DataTable({
                "columns": [
                    { "data": "kategori_id" },
                    { "data": "kategori_nama" },
                    { 
                        "data": "action",
                        "orderable": false,
                        "searchable": false
                    }
                ]
            });
        });
    </script>
@endpush
