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
      <i class="fa fa-table"></i> Detail Siswa Atas Nama {{ $siswa->nama }}</div>
    <div class="card-body">
      <div id="siswa">
        <h2>Detail Siswa</h2>

        <table class="table table-striped">
            <tr>
                <th>NISN</th>
                <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
                <th>Tempat Lahir</th>
                <td>{{ $siswa->tempat_lahir }}</td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td>{{ $siswa->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
        </table>
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
  @include('template.footer')
@stop