@extends('layout')

@section('content')


<div class="card">
    <div class="card-body">
      <h4 class="card-title">From Edit Gallery</h4>
      <form action="{{ route('Gallery.update', $gallery->id) }}" method="POST" class="forms-sample" enctype="multipart/form-data">
        @method('PUT')
        
        @csrf
        <div class="form-group">
          <label for="exampleInputName1">Judul</label>
          <input type="text"name="judul" class="form-control" id="exampleInputName1" placeholder="Judul" value="{{ $gallery->judul }}">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <div class="input-group col-xs-12">
              <input type="file" class="form-control file-upload-info" placeholder="Upload Foto" name="foto" value="" >
            </div>
          </div>
        <div class="form-group">
            <label for="exampleTextarea1">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" id="exampleTextarea1" rows="4" value="">{{ $gallery->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
@endsection