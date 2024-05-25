@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ url('/file-upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="filename" class="form-label">Nama Gambar:</label>
                    <input type="text" class="form-control" name="filename" id="filename">
                    @error('filename')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="berkas" class="form-label">Gambar</label>
                    <input type="file" class="form-control" id="berkas" name="berkas">
                    @error('berkas')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                @if ($errors->has('upload_error'))
                    <div class="text-danger">{{ $errors->first('upload_error') }}</div>
                @endif
                <button type="submit" class="btn btn-primary btn-block">Upload</button>
            </form>
        </div>
    </div>
@endsection
{{-- <head> --}}
    {{-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    {{-- <link href="/css/bootstrap.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISV5WaRU90FeRpok6YctnYmDr5pNlyT2bRjXh@JMhjY6hW+ALEWIH" crossorigin="anonymous">
    <title>File Upload</title>
    <style>
        .has-text {
            border-color: blue;
        }
    </style> --}}
{{-- </head> --}} 

{{-- <body> --}}
    {{-- <div class="container mt-3">
        <h2>File Upload</h2>
        <hr>
        <form action="{{ url('/file-upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
            <label for="filename" class="form-label">Nama Gambar:</label>
            <input type="text" class="form-control" name="filename" id="filename">
            <br>
            <label for="berkas" class="form-label">Gambar Profile</label>
            <input type="file" class="form-control" id="berkas" name="berkas">
            @error('berkas')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        <button type="submit" class="btn btn-primary my-2">Upload</button> </form>
    </div> --}}
{{-- </body>
</html> --}}