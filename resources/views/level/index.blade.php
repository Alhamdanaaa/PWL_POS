@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('level/create')}}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if(@session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(@session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            {{-- <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" name="level_id" id="level_id" required>
                                <option value="">- Semua -</option>
                                @foreach ($level as $item)
                                    <option value="{{$item->level_id}}">{{$item->level_nama}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div> --}}
            <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
                <thead>
                    <tr><th>ID</th><th>Kode Level</th><th>Nama Level</th><th>Aksi</th></tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
    <script>
        $(document).ready(function() {
            var dataLevel = $('#table_level').DataTable({
                serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
                ajax: {
                    "url": "{{ url('level/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    // "data":function(d){
                    //     d.level_id = $('#level_id').val();
                    // }
                },
                columns: [
                    {
                    data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn()
                    className: "text-center",
                    orderable: false,
                    searchable: false
                    },{
                    data: "level_kode",
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },{
                    data: "level_nama",
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },{
                    data: "aksi",
                    className: "",
                    orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                }
            ]
        });
        // $('#level_id').on('change',function(){
        //     dataUser.ajax.reload();
        // });
    });
</script>
@endpush 

{{-- @extends('layouts.app') --}}

{{-- custom section --}}
{{-- @section('subtitle','Level')
@section('content_header_title','Home')
@section('content_header_subtitle','Level') --}}

{{-- @section('content') --}}
    {{-- <div class="container">
        <div class="card">
            <div class="card-header"> --}}
              {{-- <h3 class="card-title">Data User</h3> --}}
                {{-- <div class="float-left">
                    <h4>Data User</h4>
                </div>
                <div class="float-right">
                    <a class="btn btn-success" href="{{ route('level.create') }}"> Input Level</a>
                </div>
            </div> --}}
            <!-- /.card-header -->
            {{-- <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">Level Id</th>
                            <th class="text-center">Level Kode</th>
                            <th class="text-center">Level Nama</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $level)
                        <tr>
                            <td>{{ $level->level_id }}</td>
                            <td>{{ $level->level_kode }}</td>
                            <td>{{ $level->level_nama }}</td>
                            <td class="text-center">
                                <form action="{{ route('level.destroy',$level->level_id) }}" method="POST">
                                    <a class="btn btn-info btn-sm" href="{{ route('m_user.show',$level->level_id) }}">Show</a>
                                    <a class="btn btn-primary btn-sm my-2" href="{{ route('m_user.edit',$level->level_id) }}">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>        
                        </tr>
                        @endforeach
                    </tbody> --}}
                {{-- </table>
            </div>
          </div>
    </div> --}}
{{-- @endsection --}}