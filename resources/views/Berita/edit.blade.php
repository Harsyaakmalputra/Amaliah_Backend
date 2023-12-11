@extends('layout')

@section('content')


<div class="card">
    <div class="card-body">
      <h4 class="card-title">From Edit Berita</h4>
      <form action="{{ route('Berita.update', $berita->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
        @method('PUT')
        
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Judul</label>
          <input type="text"name="judul" class="form-control" id="exampleInputName1" placeholder="Judul" value="{{ $berita->judul }}">
        </div>
        <div class="form-group">
            <label for="exampleInputName1">Artikel</label>
            <input type="text"name="artikel" class="form-control" id="exampleInputName1" placeholder="Artikel" value="{{ $berita->artikel }}">
          </div>
        <div class="form-group">
            <label>Foto</label>
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" placeholder="Upload Foto" name="foto" value="" >
            </div>
          </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection