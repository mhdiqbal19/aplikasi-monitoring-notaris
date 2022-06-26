@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dashboard | Order Berkas</h1>
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
            <div class="card col-md-8 mb-3">
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
                    <form action="/dashboard/order" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="penjual" class="form-label mb-0">Nama Penjual</label>
                            <select class="custom-select" id="penjual" name="penjual"
                                data-placeholder="Pilih nama penjual">
                                <option selected></option>
                                @foreach ($klien as $kli)
                                    <option value="{{ $kli->nama }}">{{ $kli->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pembeli" class="form-label mb-0">Nama Pembeli</label>
                            <select class="custom-select" id="pembeli" name="pembeli"
                                data-placeholder="Pilih nama pembeli">
                                <option selected></option>
                                @foreach ($klien as $kli)
                                    <option value="{{ $kli->nama }}">{{ $kli->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="sertipikat_id" class="form-label mb-0">NO SHM</label>
                            <select class="custom-select" id="sertipikat" name="sertipikat_id"
                                data-placeholder="Pilih sertipikat">
                                <option selected></option>
                                @foreach ($sertipikat as $sert)
                                    <option value="{{ $sert->id }}">SHM : {{ $sert->no }}/{{ $sert->desa }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            <button type="reset" class="btn btn-warning mt-3">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('select2')
    <script>
        $(document).ready(function() {
            $('#penjual').select2({
                theme: 'bootstrap4'
            });

        });

        $(document).ready(function() {
            $('#pembeli').select2({
                theme: 'bootstrap4'
            });
        });
        $(document).ready(function() {
            $('#sertipikat').select2({
                theme: 'bootstrap4'
            });
        });
    </script>

    {{-- select2 --}}
    <script src="{{ asset('template') }}/plugins/select2/js/select2.min.js"></script>
@endsection
