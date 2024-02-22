@extends('layouts.layout')
@section('crumb', 'Monev')
@section('crumb2', 'Dashboard')

@section('sidebar')
    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('monev.index') }}">
                <i class="bi bi-book"></i>
                <span>Monev</span>
            </a>
        </li><!-- End Monev Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('cabor.index') }}">
                <i class="bi bi-collection"></i>
                <span>Cabor</span>
            </a>
        </li><!-- End Cabor Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('pelatih.index') }}">
                <i class="bi bi-person-circle"></i>
                <span>Pelatih</span>
            </a>
        </li><!-- End Pelatih Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('atlet.index') }}">
                <i class="bi bi-people"></i>
                <span>Atlet</span>
            </a>
        </li><!-- End Atlet Nav -->
    </ul>

@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Presensi</h5>

            <!-- Bordered Tabs Justified -->
            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home"
                        aria-selected="true">Atlet</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">Pelatih</button>
                </li>
            </ul>
            <form action="{{route('monev.storePres', $idMonev)}}" method="post">
                @csrf
            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel"
                    aria-labelledby="home-tab">

                    <div class="card-body">
                        <h5 class="card-title">Atlet</h5>
                        <input type="hidden" name="total_atlet" value="{{ $totalAtlet }}">

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Presensi</th>
                                    <th scope="col">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataAtlet as $atlet)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td><input type="hidden" name="name_atlet[{{ $loop->iteration }}]" id="name_atlet"
                                                value="{{ $atlet->name_atlet }}">{{ $atlet->name_atlet }}</td>
                                        <td>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <select class="form-select" aria-label="Default select example"
                                                        name="atlet_value[{{ $loop->iteration }}]" id="atlet_value">
                                                        <option value="Sakit">Sakit</option>
                                                        <option value="Hadir">Hadir</option>
                                                        <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="row mb-3">
                                                <div class="col-sm-10">
                                                    <input type="text" class="form-control" name="keterangan_atlet[{{ $loop->iteration }}]">
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="card-body">
                    <h5 class="card-title">Pelatih</h5>
                    <input type="hidden" name="total_pelatih" value="{{ $totalPelatih }}">

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Presensi</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPelatih as $pelatih)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td><input type="hidden" name="name_pelatih[{{ $loop->iteration }}]" id="name_pelatih"
                                            value="{{ $pelatih->name_pelatih }}">{{ $pelatih->name_pelatih }}</td>
                                    <td>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="pelatih_value[{{ $loop->iteration }}]" id="pelatih_value">
                                                    <option value="Sakit">Sakit</option>
                                                    <option value="Hadir">Hadir</option>
                                                    <option value="Tanpa Keterangan">Tanpa Keterangan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row mb-3">
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="keterangan_pelatih[{{ $loop->iteration }}]">
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
            <div class="row mb-3">
                <div class="col-12 d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-primary">Lanjut</button>
                </div>
            </div>
        </div><!-- End Bordered Tabs Justified -->
        </form>

    </div>
    </div>
@endsection
