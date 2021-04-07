@extends('template.index')

@section('main')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Home</a>
    </li>
    <li class="breadcrumb-item active">Home</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-file"></i> Home</div>
    <div class="card-body">
      <h1>Halaman Home</h1>
    </div>
  </div>
</div>
@stop

@section('footer')
  @include('template.footer')
@stop