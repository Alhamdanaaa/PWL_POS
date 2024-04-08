@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ url('stok') }}" class="form-horizontal">
            @csrf
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Barang</label>
                <div class="col-10">
                    <select class="form-control" id="barang_id" name="barang_id" required>
                        <option value="">- Pilih barang -</option>
                        @foreach($barang as $item)
                        <option value="{{ $item->barang_id }}">{{ $item->barang_nama }}</option>
                        @endforeach
                    </select>
                    @error('barang_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Nama user</label>
                <div class="col-10">
                    <select class="form-control" id="user_id" name="user_id" required>
                        <option value="">- Pilih user -</option>
                        @foreach($user as $item)
                        <option value="{{ $item->user_id }}">{{ $item->nama }}</option>
                        @endforeach
                    </select>
                    @error('user_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- <div class="form-group row">
                <label class="col-2 control-label col-form-label">Stok Tanggal</label>
                <div class="col-10">
                    <input type="date" class="form-control" id="stok_tanggal" name="stok_tanggal" value="{{ old('stok_tanggal') }}" required>
                    @error('stok_tanggal')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div> --}}
            <div class="form-group row">
                <label class="col-2 control-label col-form-label">Jumlah Stok</label>
                <div class="col-10">
                    <input type="text" class="form-control" id="stok_jumlah" name="stok_jumlah" value="{{ old('stok_jumlah') }}" required>
                    @error('stok_jumlah')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 control-label col-form-label"></label>
                <div class="col-10">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('stok') }}">Kembali</a>
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

{{-- @extends ('layouts.app') --}}
{{-- Customize layout sections --}} 
{{-- @section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori') 
@section('content_header_subtitle', 'Create')  --}}
{{-- Content body: main page content --}} 
{{-- @section('content') --}}

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
    {{-- <div class="container">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Buat kategori baru</h3>
            </div>

            <form method="post" action="../kategori">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kategori_kode">Kode Kategori</label>
                        <input id="kategori_kode"
                            type="text" 
                            name="kategori_kode" 
                            placeholder="KAT"
                            class="form-control 
                            @error('kategori_kode') is-invalid @enderror">

                        @error('kategori_kode')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="kategori_nama">Nama Kategori</label>
                        <input type="text" id="kategori_nama" name="kategori_nama" placeholder="Nama"
                        class="form-control
                        @error('kategori_nama') is-invalid @enderror">
                        
                        @error('kategori_nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
</div> --}}

{{-- @endsection
</div> --}}