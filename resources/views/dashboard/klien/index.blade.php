@extends('dashboard.layouts.main')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard | Data Klien</h1>
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
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Informasi Data Klien</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No KTP</th>
            <th>Alamat</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($klien as $kli)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kli['nama'] }}</td>
            <td>{{ $kli['no_ktp'] }}</td>
            <td>{{ $kli['alamat'] }}</td>
            <td width="170">      
             
              <a href="/dashboard/klien/{{ $kli->id }}/edit">
              <button class="btn btn-success btn-sm"><i class="fas fa-edit"></i> Edit</button>
              </a>

              <a href="#" class="btn btn-danger btn-sm delete" klien-id="{{$kli->id}}" klien-nama="{{ $kli['nama'] }}"><i class="fas fa-trash"></i> Delete</a>
              

            </td>
          </tr>  
          @endforeach
          <tfoot>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>No KTP</th>
            <th>Alamat</th>
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

      var klienId = $(this).attr('klien-id');
      var klienNama = $(this).attr('klien-nama');

      swal({
        title: "Yakin?",
        text: "Yakin Mau Hapus Data "+ klienNama +" ",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          window.location = "/dashboard/delklien/"+klienId+""
          swal("Data Berhasil Dihapus!", {
            icon: "success",
          });
        }
      });
    });
  </script>
@endsection
