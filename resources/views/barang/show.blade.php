@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body"> 
        @empty($barang)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
        </div> 
        @else
            <table class="table table-bordered table-striped table-hover table-sm">
                <tr>
                    <th>ID</th>
                    <td>{{ $barang->barang_id }}</td>
                </tr>
                <tr>
                    <th>Kategori Barang</th>
                    <td>{{ $barang->kategori->kategori_nama }}</td>
                </tr>
                <tr>
                    <th>Kode Barang</th>
                    <td>{{ $barang->barang_kode }}</td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td>{{ $barang->barang_nama }}</td>
                </tr>
                <tr>
                    <th>Harga Beli</th>
                    <td>{{ $barang->harga_beli }}</td>
                </tr>
                <tr>
                    <th>Harga Jual</th>
                    <td>{{ $barang->harga_jual }}</td>
                </tr>
            </table> @endempty
    <a href="{{ url('barang') }}" class="btn btn-sm btn-default mt- 2">Kembali</a>
    </div>
    </div> @endsection
    
    @push('css') @endpush
    
    @push('js') @endpush
    
{{-- @extends('layouts.app') --}}

{{-- Customize layout sections --}}
{{-- @section('subtitle', 'Kategori')      
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Show') --}}

{{-- Content body: main page content --}}

{{-- @section('content')
<div class="container">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Show User</h5>
                <a class="btn btn-secondary btn-sm" href="{{ route('m_user.index') }}">Kembali</a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>User ID:</strong>
                        {{ $useri->user_id }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Level ID:</strong>
                        {{ $useri->level_id }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Username:</strong>
                        {{ $useri->username }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Nama:</strong>
                        {{ $useri->nama }}
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <strong>Password:</strong>
                        {{ $useri->password }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
{{-- @extends('m_user/template')
@section('content')
<div class="row mt-5 mb-5">
<div class="col-lg-12 margin-tb">
<div class="float-left">
<h2> Show User</h2>
</div>
<div class="float-right">
<a class="btn btn-secondary" href="{{ route('m_user.index') }}"> Kembali</a>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>User_id:</strong>
{{ $useri->user_id }}
</div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Level_id:</strong>
{{ $useri->level_id }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Username:</strong>
{{ $useri->username }}
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Nama:</strong>
    {{ $useri->nama }}
    </div>
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Password:</strong>
{{ $useri->password }}
</div>
</div>

</div>
@endsection --}}
