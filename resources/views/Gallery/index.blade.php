@extends('layout')



@section('content')
<div class="container" id="img_size ms-auto ">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Gallery</h4>
       
        <p class="card-description">
           <a href="{{ route('Gallery.create') }}">+ Tambah Pengaduan</a>
        </p>
        <div class="table-responsive pt-3">
          <table class="table-bordered">

            <thead>
              <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th >Aksi</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($galleries as $gallery)
                <tr>
                  <td>
                    <img src="{{ asset('storage/'. $gallery->foto) }}" class="size"> 
                  </td>
                    <td>{{$gallery->judul}}</td>
                    <td>{{ $gallery->deskripsi }}</td>
                    <div class="button" id="tombol">
                    <td >
                      <a href="{{ route('Gallery.edit', $gallery->id) }}" class="btn btn-primary btn-sm">Edit</a>
                      <form action="{{ route('Gallery.destroy', $gallery->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                    </td>
                  </div>
                      </form>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection