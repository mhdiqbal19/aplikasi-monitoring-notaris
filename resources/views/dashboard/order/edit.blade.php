@extends('dashboard.layouts.main')

@section('container')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard | Detail Proses Order</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Detail Order</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- Timelime example  -->
      <div class="row">
        <div class="col-md-9">
          <!-- The time line -->
          <div class="timeline">
 
            <!-- timeline item -->
            <div>
              <i class="fas fa-home bg-blue"></i>
              <div class="timeline-item card card-outline card-info">
                <h3 class="timeline-header"><a href="#">Daftar BKD</a></h3>
                <div class="timeline-body">
                  <form action="/dashboard/order/{{ $order->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                      <label>Tanggal Masuk :</label>
                      <input type="date" class="form-control" id="tgl_bkd" name="tgl_bkd" value="{{ $order->tgl_bkd }}">
                    </div>
                    <div class="form-group mt-2">
                      <label for="ket_bkd">Catatan :</label>
                      <input type="text" class="form-control" id="ket_bkd" name="ket_bkd"" value="{{ $order->ket_bkd }}">
                    </div>
                    <div class="timeline-footer">
                      <a href="/dashboard/order" class="btn btn-sm btn-danger mt-1"><i class="fa fa-arrow-left"></i> Kembali</a> 
                      <button type="submit" class="btn btn-sm btn-primary mt-1"><i class="fas fa-save bg-blue"></i> Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- END timeline item -->

            <!-- timeline item -->
            <div>
              <i class="fas fa-home bg-blue"></i>
              <div class="timeline-item card card-outline card-info">
                <h3 class="timeline-header"><a href="#">Daftar KPP</a></h3>
                <div class="timeline-body">
                  <form action="/dashboard/order/{{ $order->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                      <label>Tanggal Masuk :</label>
                      <input type="date" class="form-control" id="tgl_kpp" name="tgl_kpp" value="{{ $order->tgl_kpp }}">
                    </div>
                    <div class="form-group mt-2">
                      <label for="ket_kpp">Catatan :</label>
                      @error('ket_kpp')
                      <div class="text-warning">
                        <span>{{ $message }}</span>
                      </div>
                      @enderror
                      <input type="text" class="form-control @error('ket_kpp') is-invalid @enderror" id="ket_kpp" name="ket_kpp"" value="{{ $order->ket_kpp }}">
                    </div>
                    <div class="timeline-footer">
                      <a href="/dashboard/order" class="btn btn-sm btn-danger mt-1"><i class="fa fa-arrow-left"></i> Kembali</a> 
                      <button type="submit" class="btn btn-sm btn-primary mt-1"><i class="fas fa-save bg-blue"></i> Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- END timeline item -->

            <!-- timeline item -->
            <div>
              <i class="fas fa-home bg-blue"></i>
              <div class="timeline-item card card-outline card-info">
                <h3 class="timeline-header"><a href="#">Daftar BPN</a></h3>
                <div class="timeline-body">
                  <form action="/dashboard/order/{{ $order->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group">
                      <label>Tanggal Masuk :</label>
                      <input type="date" class="form-control" id="tgl_bpn" name="tgl_bpn" value="{{ $order->tgl_bpn }}">
                    </div>
                    <div class="form-group">
                      <label for="no_akta">No Akta</label>
                      <input type="text" class="form-control" id="no_akta" name="no_akta" value="{{ $order->no_akta }}">
                    </div>
                    <div class="form-group">
                      <label for="ket_bpn">Catatan :</label>
                      <input type="text" class="form-control" id="ket_bpn" name="ket_bpn"" value="{{ $order->ket_bpn }}">
                    </div>
                    <div class="timeline-footer">
                      <a href="/dashboard/order" class="btn btn-sm btn-danger mt-1"><i class="fa fa-arrow-left"></i> Kembali</a> 
                      <button type="submit" class="btn btn-sm btn-primary mt-1"><i class="fas fa-save bg-blue"></i> Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- END timeline item -->

            <!-- timeline item -->
            <div>
              <i class="fas fa-edit bg-blue"></i>
              <div class="timeline-item card card-outline card-info">
                <h3 class="timeline-header"><a href="#">Keterangan :</a></h3>
                <div class="timeline-body">
                  <!-- Date dd/mm/yyyy -->
                  <form action="/dashboard/order/{{ $order->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group mt-2">
                      <label for="ket_bkd">Catatan :</label>
                      <input id="catatan" type="hidden" name="catatan" value="{{ old('body', $order->catatan) }}">

                      <trix-editor input="catatan"></trix-editor>
                    </div>
                    <div class="timeline-footer">
                      <a href="/dashboard/order" class="btn btn-sm btn-danger mt-1"><i class="fa fa-arrow-left"></i> Kembali</a> 
                      <button type="submit" class="btn btn-sm btn-primary mt-1"><i class="fas fa-save bg-blue"></i> Simpan</button>
                    </div>
                  </form>
                  <!-- /.form group -->
                </div>
              </div>
            </div>
            <!-- END timeline item -->
            <!-- timeline item -->
            <div>
              <i class="fas fa-edit bg-blue"></i>
              <div class="timeline-item card card-outline card-info">
                <h3 class="timeline-header"><a href="#">Status</a></h3>
                <div class="timeline-body">
                  <!-- Date dd/mm/yyyy -->
                  <form action="/dashboard/order/{{ $order->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="form-group mt-2">
                      <label>Status Berkas :</label>
                      <select class="custom-select" aria-label="Default select example" name="status">
                        <option>Open this select menu</option>
                        <option value="0" {{ ($order->status == 0) ? 'selected' : '' }}>Masih Proses</option>
                        <option value="1" {{ ($order->status == 1) ? 'selected' : '' }}>Selesai</option>                 
                      </select>
                    </div>
                    <div class="timeline-footer">
                      <a href="/dashboard/order" class="btn btn-sm btn-danger mt-1"><i class="fa fa-arrow-left"></i> Kembali</a> 
                      <button type="submit" class="btn btn-sm btn-primary mt-1"><i class="fas fa-save bg-blue"></i> Simpan</button>
                    </div>
                  </form>
                  <!-- /.form group -->
                </div>
              </div>
            </div>
            <!-- END timeline item -->

            <!-- timeline item -->
            <div>
              <i class="fas fa-clock bg-gray"></i>
            </div>

          </div>
        </div>
        <!-- /.col -->
      </div>
    </div>
    <!-- /.timeline -->

  </section>
  <!-- /.content -->

</div>
<!-- /.content-wrapper -->
@include('sweetalert::alert') 
@endsection

