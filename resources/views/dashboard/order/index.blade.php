@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard | Data Order</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Order</li>
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
                    <h3 class="card-title">Monitoring Data</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Penjual</th>
                                <th>Pembeli</th>
                                <th>SHM</th>
                                <th>Desa/Kelurahan</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $ord)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $ord->penjual }}</td>
                                    <td>{{ $ord->pembeli }}</td>
                                    <td>{{ $ord->sertipikat->no }}</td>
                                    <td>{{ $ord->sertipikat->desa }}</td>
                                    <td>{{ $ord->created_at->format('d-M-Y') }}</td>
                                    <td width="150">

                                        <a href="/dashboard/order/{{ $ord->id }}/edit">
                                            <button class="btn btn-info btn-sm"><i class="fas fa-search"></i>
                                                Detail</button>
                                        </a>

                                        <a href="#" class="btn btn-danger btn-sm deleteOrd"
                                            order-id="{{ $ord->id }}"><i class="fas fa-trash"></i> Delete</a>


                                    </td>
                                </tr>
                            @endforeach
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Penjual</th>
                                <th>Pembeli</th>
                                <th>SHM</th>
                                <th>Desa/Kelurahan</th>
                                <th>Tanggal</th>
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

{{-- script sweet alart confirm delete --}}
@section('footer')
    <script>
        $('.deleteOrd').click(function() {

            var orderId = $(this).attr('order-id');

            swal({
                    title: "Yakin?",
                    text: "Yakin Mau Hapus Data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location = "/dashboard/delorder/" + orderId + ""
                        swal("Data Berhasil Dihapus!", {
                            icon: "success",
                        });
                    }
                });
        });
    </script>
@endsection
