@extends('layout')



@section('content')
<div class="container" id="img_size ms-auto ">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Berita</h4>
       
        <p class="card-description">
           <a href="{{ route('Berita.create') }}">+ Tambah Berita</a>
        </p>
        <div class="table-responsive pt-3">
          <table class="table-bordered">

            <thead>
              <tr>
                <th>Foto</th>
                <th>Judul</th>
                <th>Artikel</th>
                <th >Aksi</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($beritas as $berita)
                <tr>
                  <td>
                    <img src="{{ asset('storage/'. $berita->foto) }}" class="size"> 
                  </td>
                    <td>{{$berita->judul}}</td>
                    <td>{{ $berita->artikel }}</td>
                    <div class="button" id="tombol">
                    <td >
                      <a href="{{ route('Berita.edit', $berita->id) }}" class="btn btn-primary btn-sm">Edit</a>
                      <form action="{{ route('Berita.destroy', $berita->id) }}" method="POST">
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