
@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('barang') }}" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">kategori</label>
                <div class="col-10">
                    <select class="form-control" id="kategori_id" name="kategori_id" required>
                        <option value="">- Pilih kategori -</option>
                        @foreach($kategori as $item)
                        <option value="{{ $item->kategori_id }}">{{ $item->kategori_nama }}</option>
                        @endforeach
                    </select>
                    @error('kategori_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Barang Kode</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="barang_kode" name="barang_kode" value="{{ old('barang_kode') }}" required>
                    @error('barang_kode')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Barang Nama</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="barang_nama" name="barang_nama" value="{{ old('barang_nama') }}" required>
                    @error('barang_nama')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Harga Beli</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="{{ old('harga_beli') }}" required>
                    @error('harga_beli')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Harga Jual</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="{{ old('harga_jual') }}" required>
                    @error('harga_jual')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label"></label>
                <div class="col-10">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('barang') }}">Kembali</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush


{{-- @extends('layouts.app') --}}
{{-- Customize layout sections --}}
{{-- @section('subtitle', 'User')      
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Create') --}}
{{-- Content body: main page content --}}
{{-- @section('content')
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        <div class="card card-primary">
            <div class="card-header">
                <div class="float-left py-1">
                    <h5>Membuat Daftar User</h5>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('m_user.index') }}">Kembali</a>
                </div>
            </div>

            <form method="post" action="{{ route('m_user.store') }}">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <strong>Username:</strong>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" 
                        id="username" name="username" placeholder="Masukkan username">
                        @error('username')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>                    
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                        id="nama" name="nama" placeholder="Masukkan nama">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <strong>Level</strong>
                        <select name="level_id" class="form-select">
                            <option value="">Masukkan level</option>
                            @foreach($levels as $level)
                                <option value="{{ $level->level_id }}">{{ $level->level_nama }}</option>
                            @endforeach
                        </select>                        
                    </div>
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" 
                        id="password" name="password" placeholder="Masukkan password">
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection --}}
{{-- @extends('m_user/template')
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
<div class="row mt-5 mb-5">
<div class="col-lg-12 margin-tb">
<div class="float-left">
<h2>Membuat Daftar User</h2>
</div>
<div class="float-right">
<a class="btn btn-secondary" href="{{ route('m_user.index') }}"> Kembali</a>
</div>
</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
<strong>Ops</strong> Input gagal<br><br>
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<form action="{{ route('m_user.store') }}" method="POST">
@csrf


<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Username:</strong>
<input type="text" name="username" class="form-control" placeholder="Masukkan username"></input>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>nama:</strong>
    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama"></input>
    </div>
    </div>

    
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
    <strong>Password:</strong>
    <input type="password" name="password" class="form-control" placeholder="Masukkan password"></input>
    </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
<button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
@endsection --}}
