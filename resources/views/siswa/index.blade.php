@extends('template.index')

@section('main')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url('siswa') }}">Siswa</a>
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
        <div class="table-responsive">
          <form method="post" action="{{ url('siswa/cari') }}">
            {{ csrf_field() }}
              <div class="form-group col-md-4">
                  <label class="control-label">Jenis Kelamin :</label>
                  <select class="form-control select2" select2="" name="jenis_kelamin">
                    <option value="">Select ...</option>
                    <option value="L"> Laki Laki</option>
                    <option value="P"> Perempuan</option>
                  </select>
              </div>
              <div class="form-group col-md-4">
                <button type="submit" class="btn btn-circle btn-primary">Cari</button>
              </div>
          </form>          
        </div>
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
                  <td>{{ $anak->tanggal_lahir->format('d-m-Y') }}</td>
                  <td>{{ $anak->jenis_kelamin }}</td>
                  <td>
                    <form method="post" action="{{ url('siswa/'.$anak->id) }}">
                      <a href="{{ url('siswa/'.$anak->id) }}"> 
                        <button type="button" class="btn btn-circle btn-primary">Detail</button>
                      </a>
                      <a href="{{ url('siswa/'.$anak->id.'/edit') }}"> 
                          <button type="button" class="btn btn-circle btn-success">Edit</button>
                      </a>
                      {{ csrf_field() }}
                      <button type="submit" name="_method" value="delete" class="btn btn-circle btn-danger">Delete</button>
                    </form>
                    
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