@extends('dashboard.layouts.main')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard | Data Sertipikat</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Sertipikat</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Informasi Data Sertipikat</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>SHM No</th>
            <th>Desa/Kelurahan</th>
            <th>Luas</th>
            <th>Nama Pemilik</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($sertipikat as $sert)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $sert['no'] }}</td>
            <td>{{ $sert['desa'] }}</td>
            <td>{{ $sert['luas'] }} M<sup>2</sup></td>
            <td>{{ $sert['nama'] }}</td>
            <td width="150">      
              <a href="/dashboard/sertipikat/{{ $sert->id }}/edit">
                <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</button>
              </a>

              <a href="#" class="btn btn-danger btn-sm delete" sertipikat-id="{{$sert->id}}" sertipikat-nama="{{ $sert['nama'] }}"><i class="fas fa-trash"></i> Delete</a>

            </td>
          </tr>  
          @endforeach
          <tfoot>
          <tr>
            <th>No</th>
            <th>SHM No</th>
            <th>Desa/Kelurahan</th>
            <th>Luas</th>
            <th>Nama Pemilik</th>
            <th>Action</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@include('sweetalert::alert')
@endsection

{{-- script sweet alart confirm delete--}}
@section('footer')
  <script>
    $('.delete').click(function(){

      var sertipikatId = $(this).attr('sertipikat-id');
      var sertipikatNama = $(this).attr('sertipikat-nama');

      swal({
        title: "Yakin?",
        text: "Yakin Mau Hapus Data "+ sertipikatNama +" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/dashboard/delsertipikat/"+sertipikatId+""
          swal("Data Berhasil Dihapus!", {
            icon: "success",
          });
        }
      });
    });
  </script>
@endsection

