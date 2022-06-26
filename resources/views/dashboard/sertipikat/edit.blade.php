@extends('dashboard.layouts.main')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard | Edit Data Sertipikat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Edit Sertipikat</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card ">
      <div class="card-header">
        <h3 class="card-title">Edit Data</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <form action="/dashboard/sertipikat/{{ $sertipikat->id }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="no" class="form-label">SHM</label>
                @error('no')
                <div class="text-warning">
                <span>{{ $message }}</span>
                </div>
                @enderror
              <input type="text" name="no" class="form-control @error('no') is-invalid @enderror" id="no" required value="{{ $sertipikat->no }}">
             </div>
    
            <div class="mb-3">
              <label for="desa" class="form-label">Desa/Kelurahan</label>
              @error('desa')
              <div class="text-warning">
                <span>{{ $message }}</span>
              </div>
              @enderror
              <input type="text" name="desa" class="form-control @error('desa') is-invalid @enderror" id="desa" required value="{{ $sertipikat->desa }}">
            </div>
    
            <div class="mb-3">
                <label for="luas" class="form-label">Luas (M<sup>2</sup>)</label>
                @error('luas')
                <div class="text-warning">
                  <span>{{ $message }}</span>
                </div>
                @enderror
                <input type="number" name="luas" class="form-control @error('luas') is-invalid @enderror" id="luas" required value="{{ $sertipikat->luas }}" style="width:150px;">
            </div>
    
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Pemilik</label>
                @error('nama')
                <div class="text-warning">
                  <span>{{ $message }}</span>
                </div>
                @enderror
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" required value="{{ $sertipikat->nama }}">
            </div>
    
    
            <button type="submit" class="btn btn-primary mt-3 mb-3">Simpan</button>
            <button type="reset" class="btn btn-warning mt-3 mb-3">Reset</button>
        </form>
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        
      </div>
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection

