@extends('dashboard.layouts.main')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard | Input Data Klien</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Klien</li>
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
        <h3 class="card-title">Create Data</h3>

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
        <form action="/dashboard/klien" method="post">
          @csrf
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
              @error('nama')
              <div class="text-warning">
              <span>{{ $message }}</span>
              </div>
              @enderror
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" required value="{{ old('nama') }}">
           </div>
  
          <div class="mb-3">
            <label for="no_ktp" class="form-label">No Ktp</label>
            @error('no_ktp')
            <div class="text-warning">
              <span>{{ $message }}</span>
            </div>
            @enderror
            <input type="text" name="no_ktp" class="form-control @error('no_ktp') is-invalid @enderror" id="no_ktp" required value="{{ old('no_ktp') }}">
          </div>
  
          <div class="form-floating">
              <label for="alamat">Alamat</label>
              @error('alamat')
              <div class="text-warning">
                  <span>{{ $message }}</span>
              </div>
              @enderror
              <textarea class="form-control @error('alamat') is-invalid @enderror" name="alamat" id="alamat" style="height: 100px" required value="">{{ old('alamat') }}</textarea>      
          </div>
  
          <button type="submit" class="btn btn-primary mt-3">Simpan</button>
          <button type="reset" class="btn btn-warning mt-3">Reset</button>
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

