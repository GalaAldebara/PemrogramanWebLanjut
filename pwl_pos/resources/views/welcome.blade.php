@extends('layouts.app')

@section('subtitle', 'welcome')
@section('content_header_title', 'home')
@section('content_header_subtitle', 'welcome')

@section('content_body')
<p>Welcome to this beautiful admin panel.</p>
@stop

@push('css')
@endpush

@push('js')
<script>console.log("Hi, I'm using the Laravel-AdminLTE package!");</script>
@endpush