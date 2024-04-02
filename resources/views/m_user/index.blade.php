@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('user/create')}}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if(@session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(@session('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            <div class="row">
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
            </div>
            <table class="table table-bordered table-striped table-hover table-sm" id="table_user">
                <thead>
                    <tr><th>ID</th><th>Username</th><th>Nama</th><th>Level Pengguna</th><th>Aksi</th></tr>
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
            var dataUser = $('#table_user').DataTable({
                serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
                ajax: {
                    "url": "{{ url('user/list') }}",
                    "dataType": "json",
                    "type": "POST",
                    "data":function(d){
                        d.level_id = $('#level_id').val();
                    }
                },
                columns: [
                    {
                    data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn()
                    className: "text-center",
                    orderable: false,
                    searchable: false
                    },{
                    data: "username",
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },{
                    data: "nama",
                    className: "",
                    orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: true // searchable: true, jika ingin kolom ini bisa dicari
                    },{
                    data: "level.level_nama",
                    className: "",
                    orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                    },{
                    data: "aksi",
                    className: "",
                    orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan
                    searchable: false // searchable: true, jika ingin kolom ini bisa dicari
                }
            ]
        });
        $('#level_id').on('change',function(){
            dataUser.ajax.reload();
        });
    });
</script>
@endpush 

{{-- // @extends('layouts.app') --}}

{{-- custom section --}}
{{-- @section('subtitle','User')
// @section('content_header_title','Home')
// @section('content_header_subtitle','User')

// @section('content')
//     <div class="container">
//         <div class="card">
//             <div class="card-header">
//               {{-- <h3 class="card-title">Data User</h3> --}}
                 {{-- <div class="float-left">
//                     <h4>Data User</h4>
//                 </div>
//                 <div class="float-right">
//                     <a class="btn btn-success" href="{{ route('m_user.create') }}"> Input User</a>
//                 </div>
//             </div> --}}
             <!-- /.card-header -->
             {{-- <div class="card-body">
//               <table id="example2" class="table table-responsive table-bordered table-hover">
//                 <thead>
//                     <tr>
//                         <th width="20px" class="text-center">User id</th>
//                         <th width="150px" class="text-center">Level id</th>
//                         <th width="200px"class="text-center">username</th>
//                         <th width="200px"class="text-center">nama</th>
//                         <th width="150px"class="text-center">password</th>
//                     </tr>
//                 </thead>
//                 <tbody>
//                     @foreach ($useri as $m_user)
//                     <tr>
//                         <td>{{ $m_user->user_id }}</td>
//                         <td>{{ $m_user->level_id }}</td>
//                         <td>{{ $m_user->username }}</td>
//                         <td>{{ $m_user->nama }}</td>
//                         <td>{{ $m_user->password }}</td>
//                         <td class="text-center">
//                             <form action="{{ route('m_user.destroy',$m_user->user_id) }}" method="POST">
//                                 <div class="btn-group-vertical" role="group" aria-label="Actions">
//                                     <a class="btn btn-info btn-sm" href="{{ route('m_user.show',$m_user->user_id) }}">Show</a>
//                                     <a class="btn btn-primary btn-sm my-2" href="{{ route('m_user.edit',$m_user->user_id) }}">Edit</a>
//                                     @csrf
//                                     @method('DELETE')
//                                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
//                                 </div>
//                             </form>
//                         </td>        
//                     </tr>
//                     @endforeach
//                 </tbody>
//               </table>
//             </div>
//           </div>
//     </div> --}}
 {{-- @endsection --}}



 {{-- @extends('m_user/template')
// @section('content')
// <div class="row mt-5 mb-5">
//     <div class="col-lg-12 margin-tb">
//         <div class="float-left">
//             <h2>CRUD user</h2>
//         </div>
//         <div class="float-right">
//             <a class="btn btn-success" href="{{ route('m_user.create') }}"> Input User</a>
//         </div>
//     </div>
// </div>
// @if ($message = Session::get('success'))
// <div class="alert alert-success">
//     <p>{{ $message }}</p>
// </div>
// @endif
// <table class="table table-bordered">
//     <tr>
//         <th width="20px" class="text-center">User id</th>
//         <th width="150px" class="text-center">Level id</th>
//         <th width="200px"class="text-center">username</th>
//         <th width="200px"class="text-center">nama</th>
//         <th width="150px"class="text-center">password</th>
//     </tr>
//     @foreach ($useri as $m_user)
//     <tr>
//         <td>{{ $m_user->user_id }}</td>
//         <td>{{ $m_user->level_id }}</td>
//         <td>{{ $m_user->username }}</td>
//         <td>{{ $m_user->nama }}</td>
//         <td>{{ $m_user->password }}</td>
//         <td class="text-center">
//             <form action="{{ route('m_user.destroy',$m_user->user_id) }}" method="POST">
//                 <div class="btn-group" role="group" aria-label="Actions">
//                     <a class="btn btn-info btn-sm" href="{{ route('m_user.show',$m_user->user_id) }}">Show</a>
//                     <a class="btn btn-primary btn-sm mx-2" href="{{ route('m_user.edit',$m_user->user_id) }}">Edit</a>
//                     @csrf
//                     @method('DELETE')
//                     <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
//                 </div>
//             </form>
//         </td>        
//     </tr>
// @endforeach
// </table>
// @endsection --}}