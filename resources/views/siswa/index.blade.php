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
      <i class="fa fa-table"></i> Jumlah Siswa {{ $jmlSiswa }}</div>
    <div class="card-body">
      <div class="table-responsive">
        <h1>Data Siswa</h1>
        @if(!empty($siswa))
          <ul>
            @foreach($siswa as $rs)
              <li>{{ $rs }}</li>
            @endforeach  
          </ul>
        @else
          <p>Tidak ada Data Siswa</p>
        @endif
      </div>
    </div>
  </div>
</div>
@stop

@section('footer')
  @include('template.footer')
@stop