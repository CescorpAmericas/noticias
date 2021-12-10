@extends('adminlte::page')

@section('title', 'CESCORP')

@section('content_header')

    <a href="{{route('admin.posts.create')}}" class="btn btn-secondary btn-sm float-right">Nuevo noticia</a>

    <h1>Listado de noticas</h1>
@stop

@section('content')

@if (session('info'))
<div class="alert alert-success">
    <strong>{{session('info')}}</strong>
</div>

@endif
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop