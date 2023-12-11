@extends('layout')



@section('content')
<div class="container" id="img_size ms-auto ">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Pengaduan</h4>
       
        <p class="card-description">
           <a href="{{ route('Pengaduan.create') }}">+ Tambah Pengaduan</a>
        </p>
        <div class="table-responsive pt-3">
          <table class="table-bordered">

            <thead>
              <tr>
                <th>Foto</th>
                <th>Jenis Keluhan</th>
                <th>Nomor Telepon</th>
                <th>Deskripsi</th>
                <th >Aksi</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($pengaduans as $pengaduan)
                <tr>
                  <td>
                    <img src="{{ asset('storage/'. $pengaduan->foto) }}" class="size"> 
                  </td>
                    <td>{{$pengaduan->jenis_keluhan}}</td>
                    <td>{{ $pengaduan->nomer_tlp }}</td>
                    <td>{{ $pengaduan->deskripsi }}</td>
                    <div class="button" id="tombol">
                    <td >
                      <a href="{{ route('Pengaduan.edit', $pengaduan->id) }}" class="btn btn-primary btn-sm">Edit</a>
                      <form action="{{ route('Pengaduan.destroy', $pengaduan->id) }}" method="POST">
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