@extends('template.index')

@section('main')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Siswa</a>
    </li>
    <li class="breadcrumb-item active">Data Siswa</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
     
    <div class="card-header">
        <i class="fa fa-table"></i> Jumlah Siswa {{ $jumlah_siswa }}
        <a href="{{ url('siswa/create') }} " >
           <button type="button" class="btn btn-circle btn-danger">Tambah Data</button>
        </a>
    </div>

    
    <div class="card-body">
      @if(!empty($siswa_list))
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NISN</th>
                  <th>Nama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($siswa_list as $anak)
                <tr>
                  <td>{{ $anak->nisn }}</td>
                  <td>{{ $anak->nama }}</td>
                  <td>{{ $anak->tempat_lahir }}</td>
                  <td>{{ $anak->tanggal_lahir }}</td>
                  <td>{{ $anak->jenis_kelamin }}</td>
                  <td>
                    <a href="{{ url('siswa/'.$anak->id) }}"> 
                        <button type="button" class="btn btn-circle btn-primary">Detail</button>
                    </a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
      </div>
      @else
      <p>Tidak ada data yang ditampilkan</p>
      @endif
    </div>
  </div>
</div>
@stop

@section('footer')
  @include('template.footer')
@stop