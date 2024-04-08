@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools"></div>
    </div>
    <div class="card-body">
        @empty($level)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5>Data yang Anda cari tidak ditemukan.
        </div>
        <a href="{{ url('level') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
        @else
        <form method="POST" action="{{ url('/level/'.$level->level_id) }}" class="form-horizontal">
            @csrf
            {!! method_field('PUT') !!} <!-- tambahkan baris ini untuk proses edit yang butuh method PUT -->
            {{-- <div class="form-group row">
                <label class="col-1 control-label col-form-label">Level</label>
                <div class="col-11">
                    <select class="form-control" id="level_id" name="level_id" required>
                        <option value="">- Pilih Level -</option>
                        @foreach($level as $item)
                        <option value="{{ $item->level_id }}" @if($item->level_id == $level->level_id) selected @endif>{{ $item->level_nama }}</option>
                        @endforeach
                    </select>
                    @error('level_id')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div> --}}
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Kode Level</label>
                <div class="col-11">
                    <input type="text" class="form-control" id="level_kode" name="level_kode" value="{{ old('level_kode', $level->level_kode) }}" required>
                    @error('level_kode')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-1 control-label col-form-label">Nama Level</label>
                <div class="col-11">
                    <input type="text" class="form-control" id="level_nama" name="level_nama" value="{{ old('level_nama', $level->level_nama) }}" required>
                    @error('level_nama')
                    <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label class="col-1 control-label col-form-label"></label>
                <div class="col-11">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a class="btn btn-sm btn-default ml-1" href="{{ url('level') }}">Kembali</a>
                </div>
            </div>
        </form>
        @endempty
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush

{{-- @extends('layouts.app') --}}

{{-- Customize layout sections --}}
{{-- @section('subtitle', 'Kategori')      
@section('content_header_title', 'User')
@section('content_header_subtitle', 'Edit') --}}

{{-- Content body: main page content --}}

{{-- @section('content')
    <div class="container">
        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ops!</strong> Error <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card card-primary">
            <div class="card-header">
                <div class="float-left">
                    <h5 class="my-1">Edit User</h5>
                </div>
                <div class="float-right">
                    <a class="btn btn-secondary" href="{{ route('m_user.index') }}">Kembali</a>
                </div>
            </div>

            <form method="post" action="{{ route('m_user.update', $useri->user_id) }}">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                        <strong>Username:</strong>
                        <input type="text" name="userid" value="{{ $useri->user_id }}" class="form-control" placeholder="Masukkan user id">
                    </div>                    
                    <div class="form-group">
                        <strong>Nama:</strong>
                        <input type="text" name="levelid" value="{{ $useri->level_id }}" class="form-control" placeholder="Masukkan level">
                    </div>
                    <div class="form-group">
                        <strong>Password:</strong>
                        <input type="password" value="{{ $useri->password }}" name="password" class="form-control" placeholder="Masukkan password">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>

    </div>
@endsection --}}