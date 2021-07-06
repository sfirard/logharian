@extends('layouts.header-user')

@section('title', 'Log Harian Pegawai')

@section('content')
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <div class="logo mr-auto">
        <a href="/dashboard">
        <img src="{{ asset ('assets/img/logobalai.png') }}" alt="" class="img-fluid"></a>
      </div>
      <!-- .nav-menu -->
      @include('layouts.navbar-user')
      <!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- Konten -->
  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Profil</h2>
          <ol>
            <li><a href="/karyawan">Home</a></li>
            <li>Profil</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="col-xl-8 order-xl-1 center">
        @csrf
			                     @if (session('error'))
                                    <div class="alert alert-danger">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-1">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Profil</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="/editKaryawan" class="btn btn-sm btn-primary">Edit Profil</a>
                </div>
              </div>
            </div>

            <div class="card-body bg-white border-0">
              <form>
              
                <!-- <div class="col-12 text-center">
                  <img src="{{ asset ('assets/img/default-avatar.png') }}" alt="foto profil" width="100" height="100">        
                </div> -->
                <h6 class="heading-small text-muted mb-4">Informasi Karyawan</h6>
                <div class="pl-lg-4">

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">Nama</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="belum terisi" value="{{$data->name}}" readonly>
                      </div>
                    </div>
                            
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-nik">NIK</label>
                        <input type="text" id="input-nik" class="form-control form-control-alternative" placeholder="belum terisi" value="{{$data->nik}}" readonly>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-notelp">No. Telp</label>
                        <input type="text" id="input-notelp" class="form-control form-control-alternative" placeholder="belum terisi" value="{{$data->no_telp}}" readonly>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-alamat">Alamat</label>
                        <input type="text" id="input-alamat" class="form-control form-control-alternative" placeholder="belum terisi" value="{{$data->address}}" readonly>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-jabatan">Jabatan</label>
                        <input type="text" id="input-jabatan" class="form-control form-control-alternative" placeholder="belum terisi" value="{{$data->position}}" readonly>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-kerja">Unit Kerja</label>
                        <input type="text" id="input-kerja" class="form-control form-control-alternative" placeholder="belum terisi" value="{{$data->unit}}" readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>  
        <div class="col-12 text-center mt-4">
          <a href="/editPasswordKaryawan" class="btn btn-primary btn-lg">Edit Password</a>
        </div>
      </div>
    </section>
  </main><!-- End #main -->
  @include('layouts.footer-user')

  