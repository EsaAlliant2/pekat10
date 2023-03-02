@extends('layouts.admin')

@section('title', 'Halaman Dashboard')

@section('header', 'Dashboard')

@section('content')
  <div class="section-header">
    <h1>Dashboard</h1>
  </div> 

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-primary">
            <i class="far fa-user"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
              Petugas
            </div>

            <div class="card-body">
            {{ $petugas }}
            </div>
          </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
                Masyarakat
            </div>

            <div class="card-body">
                {{ $masyarakat }}
            </div>
          </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-warning">
            <i class="far fa-file"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
                Pengaduan Proses
            </div>

            <div class="card-body">
                {{ $proses }}
            </div>
          </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
      <div class="card card-statistic-1">
        <div class="card-icon bg-success">
            <i class="fas fa-box"></i>
        </div>

        <div class="card-wrap">
            <div class="card-header">
                Pengaduan Selesai
            </div>

            <div class="card-body">
                {{ $selesai }}
            </div>
          </div>
      </div>
    </div>
  </div>
@endsection