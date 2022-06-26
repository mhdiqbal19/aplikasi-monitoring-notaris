  @extends('dashboard.layouts.main')

  @section('container')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->

          <section class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                      <div class="col-sm-6">
                          <h2 style="color:rgb(89, 102, 114)"><i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</h2>
                      </div>

                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Profil</li>
                          </ol>
                      </div>
                  </div>
              </div><!-- /.container-fluid -->
              <hr>
          </section>

          <div class="container-fluid">
              <div class="row">

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-primary shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Berkas
                                          Masuk</div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_order }}</div>
                                  </div>
                                  <div class="col-auto">
                                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-success shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Klien
                                      </div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_klien }}</div>
                                  </div>
                                  <div class="col-auto">
                                      <i class="fas fa-user fa-2x text-gray-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-info shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Order Masih
                                          Proses
                                      </div>
                                      <div class="row no-gutters align-items-center">
                                          <div class="col-auto">
                                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                                  {{ $jumlah_order_diproses }}</div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-auto">
                                      <i class="fas fa-book fa-2x text-gray-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <!-- Pending Requests Card Example -->
                  <div class="col-xl-3 col-md-6 mb-4">
                      <div class="card border-left-warning shadow h-100 py-2">
                          <div class="card-body">
                              <div class="row no-gutters align-items-center">
                                  <div class="col mr-2">
                                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Berkas Selesai
                                      </div>
                                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlah_order_selesai }}
                                      </div>
                                  </div>
                                  <div class="col-auto">
                                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Main content -->
          <section class="content">

              <!-- Default box -->
              <div class="card">
                  <div class="card-header">
                      <h1 class="card-title">Biodata <small>Notaris-PPAT</small></h1>
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
                      <div class="row">
                          <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="x_panel ">

                                  <div class="x_content">
                                      <div class="row">
                                          <div class="col-md-4 col-sm-4 col-xs-12 form-group has-feedback"
                                              style="text-align:center;">
                                              <img src="{{ asset('img') }}/wahyuanalista.jpeg" alt="Foto Pengguna"
                                                  class="img-thumbnail">
                                              <br><br>
                                              <p style="font:normal 20px cambria;color:green;">SUDAH VERIFIKASI</p>
                                              <p style="font:normal 20px cambria;color:blue;">PPAT</p>
                                          </div>
                                          <div class="col-md-8 col-sm-8 col-xs-12 form-group has-feedback">
                                              <div class="table-responsive">
                                                  <table class="table-sm table-striped">
                                                      <tbody>
                                                          <tr>
                                                              <th>NIK/ No. KTP</th>
                                                              <td>:</td>
                                                              <td style="width:30%">1603062502850002</td>
                                                              <th>JENIS KELAMIN</th>
                                                              <td>:</td>
                                                              <td>Pria</td>
                                                          </tr>
                                                          <tr>
                                                              <th>NAMA LENGKAP </th>
                                                              <td>:</td>
                                                              <td>Wahyu Analista</td>
                                                              <th>STATUS PERKAWINAN</th>
                                                              <td>:</td>
                                                              <td>Menikah</td>
                                                          </tr>
                                                          <tr>
                                                              <th>EMAIL </th>
                                                              <td>:</td>
                                                              <td colspan="4">notaris.wahyuanalista@gmail.com</td>

                                                          </tr>
                                                          <tr>
                                                              <th>TEMPAT/ TGL LAHIR</th>
                                                              <td>:</td>
                                                              <td>Pangkal Pinang / 25 Februari 1985</td>
                                                              <th>TELP / HP </th>
                                                              <td>:</td>
                                                              <td> / 085758472727</td>
                                                          </tr>
                                                          <tr>
                                                              <th>SK PENGANGKATAN<span style="color:red">*</span></th>
                                                              <td>:</td>
                                                              <td>NO. 311/KEP-400.20.3/XI/2017<br> TGL. 02 November 2017
                                                              </td>
                                                              <th>STATUS NOTARIS<br> WILAYAH KERJA NOTARIS</th>
                                                              <td>:<br>:</td>
                                                              <td>
                                                                  <font style="color:green"> Ya</font><br>
                                                                  Kabupaten Sukoharjo
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <th>TEMPAT KEDUDUKAN PPAT</th>
                                                              <td>:</td>
                                                              <td>
                                                                  Kabupaten Sukoharjo </td>
                                                              <th>PEJABAT LELANG KELAS II</th>
                                                              <td>:</td>
                                                              <td>Tidak</td>
                                                          </tr>
                                                          <tr>
                                                              <th>ALAMAT KTP</th>
                                                              <td>:</td>
                                                              <td>JL. Wonodri Sendang III No.15B, RT/002, RW/005, Wonodri,
                                                                  Semarang Selatan, Kota Semarang.</td>
                                                              <th>ALAMAT KANTOR</th>
                                                              <td>:</td>
                                                              <td>Jalan Jenderal Sudirman No.243</td>
                                                          </tr>
                                                      </tbody>
                                                  </table>
                                                  <small style="color:#F00;">* SK Pengangkatan Terakhir
                                                      <br>
                                                      * Pastikan Anda seorang PPAT atau PPATS, untuk update silahkan update
                                                      pada menu mutasi<br>
                                                      * Validasi dilakukan oleh PPAT dan verifikasi dilakukan oleh Kantor
                                                      Pertanahan<br>
                                                  </small>
                                              </div>
                                          </div>
                                          <!--row-->
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
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
      @include('sweetalert::alert')
  @endsection
