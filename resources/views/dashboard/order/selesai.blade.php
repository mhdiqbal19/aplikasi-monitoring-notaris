@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard | Data Order Selesai</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Order Selesai</li>
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
                    <h3 class="card-title">Data Order Selesai</h3>
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
                                <th>Luas</th>
                                <th>No Akta</th>
                                <th>Status</th>
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
                                    <td>{{ $ord->sertipikat->luas }}</td>
                                    <td>{{ $ord->no_akta }}</td>
                                    <td class="text-center">
                                        <span
                                            class="badge {{ $ord->status == 1 ? 'badge-success' : 'badge-danger' }}">{{ $ord->status == 1 ? 'Selesai' : 'Masih Proses' }}</span>
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
                                <th>Luas</th>
                                <th>No AKta</th>
                                <th>Status</th>
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
@endsection
