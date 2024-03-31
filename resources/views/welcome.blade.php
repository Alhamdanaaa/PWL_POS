@extends('layouts.template')

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">Halo, apakabar!!!</h3>
    <div class="card-tools"></div>
  </div>
  <div class="card-body">
    Selamat datang semua, ini adalah halaman utama dari aplikasi ini.
  </div>
</div>
@endsection
{{-- @extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="card card-warning">
  <div class="card-header">
    <h3 class="card-title">Tambah Data Level</h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form>
      <div class="row">
        <div class="col-sm-6">
          <!-- text input -->
          <div class="form-group"> --}}
            {{-- m_user --}}
            {{-- <label>Nama</label>
            <input type="text" class="form-control" placeholder="Enter ...">
            <label>Username</label>
            <input type="text" class="form-control" placeholder="Enter ...">
            <label>Password</label>
            <input type="text" class="form-control" placeholder="Enter ...">
            <label>Level</label>
            <input type="text" class="form-control" placeholder="Enter ..."> --}}
            {{-- m_level --}}
            {{-- <label>Kode</label>
            <input type="text" class="form-control" placeholder="Enter ...">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Enter ...">
          </div>
          <button type="submit" class="btn btn-dark">Submit</button>
        </div>
        
      </div>
      
    </form>
  </div>
  <!-- /.card-body -->

@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}

{{-- @stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop  --}}
