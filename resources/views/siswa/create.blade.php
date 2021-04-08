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
      <i class="fa fa-note"></i> Tambah Data Siswa</div>
    <div class="card-body">
          <form method="post" action="{{ url('siswa') }}">
            {{ csrf_field() }}
            <div class="form-group col-md-12">
                <label class="control-label">NISN :</label>
                <input type="text" name="nisn" class="form-control" style="text-transform: uppercase" placeholder="NISN">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Nama :</label>
                <input type="text" name="nama" class="form-control" style="text-transform: uppercase" placeholder="Nama">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" class="form-control" style="text-transform: uppercase" placeholder="Tempat Lahir">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" class="form-control" style="text-transform: uppercase" placeholder="Tanggal Lahir">
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Jenis Kelamin :</label>
                <select class="form-control select2" select2="" name="jenis_kelamin">
                  <option value="">Select ...</option>
                  <option value="L"> Laki Laki</option>
                  <option value="P"> Perempuan</option>
                </select>
            </div>
            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary btn-circle"> Simpan </button>
            </div>
          </form>
        </div>
  </div>
</div>
@stop

@section('footer')
  @include('template.footer')
@stop