@extends('template.index')

@section('main')
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{ url('siswa') }}">Siswa</a>
    </li>
    <li class="breadcrumb-item active">Edit Data Siswa</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-note"></i> Edit Data Siswa</div>
    <div class="card-body">
          <form method="post" action="{{ url('siswa/'.$siswa->id) }}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" class="form-control" style="text-transform: uppercase" value="{{ $siswa->id }}">
            <div class="form-group col-md-12">
                <label class="control-label">NISN :</label>
                <input type="text" name="nisn" class="form-control" style="text-transform: uppercase" value="{{ $siswa->nisn }}">
                @if($errors->has('nisn'))
                  <span style="color:red">{{ $errors->first('nisn') }}</span>
                @endif
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Nama :</label>
                <input type="text" name="nama" class="form-control" style="text-transform: uppercase" value="{{ $siswa->nama }}">
                @if($errors->has('nama'))
                  <span style="color:red">{{ $errors->first('nama') }}</span>
                @endif
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Tempat Lahir :</label>
                <input type="text" name="tempat_lahir" class="form-control" style="text-transform: uppercase" value="{{ $siswa->tempat_lahir }}">
                @if($errors->has('tempat_lahir'))
                  <span style="color:red">{{ $errors->first('tempat_lahir') }}</span>
                @endif
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Tanggal Lahir :</label>
                <input type="date" name="tanggal_lahir" class="form-control" style="text-transform: uppercase" value="{{ $tglLahir }}">
                @if($errors->has('tanggal_lahir'))
                  <span style="color:red">{{ $errors->first('tanggal_lahir') }}</span>
                @endif
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Jenis Kelamin :</label>
                <select class="form-control select2" select2="" name="jenis_kelamin">
                  <option value="">Select ...</option>
                  @if($siswa->jenis_kelamin == 'L')
                    <option value="L" selected="selected"> Laki Laki</option>
                  @else
                    <option value="L"> Laki Laki</option>
                  @endif
                  @if($siswa->jenis_kelamin == 'P')
                    <option value="P" selected="selected"> Perempuan</option>  
                  @else
                    <option value="P"> Perempuan</option>
                  @endif
                </select>
                @if($errors->has('jenis_kelamin'))
                  <span style="color:red">{{ $errors->first('jenis_kelamin') }}</span>
                @endif
            </div>
             <div class="form-group col-md-12">
                <label class="control-label">No Telephone :</label>
                <input type="text" name="no_telepon" class="form-control" style="text-transform: uppercase" value="{{ $siswa->no_telepon }}">
                @if($errors->has('no_telepon'))
                  <span style="color:red">{{ $errors->first('no_telepon') }}</span>
                @endif
            </div>
            <div class="form-group col-md-12">
                <label class="control-label">Pilih Kelas :</label>
                <select class="form-control select2" select2="" name="id_kelas">
                  <option value="">Select ...</option>
                  @foreach($list_kelas as $rs)
                    <option value="{{ $rs->id }}" 
                      @if($siswa->id_kelas==$rs->id) selected="selected" @endif>{{ $rs->nama_kelas }}</option>
                  @endforeach
                </select>
                @if($errors->has('id_kelas'))
                  <span style="color:red"> {{ $errors->first('id_kelas') }} </span>
                @endif
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