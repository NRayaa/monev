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
            <h5 class="card-title">Data Detail Monev</h5>

            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Lokasi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" disabled value="Jogja">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" disabled value="Kamis, 22-02-2024">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Cabang Olahraga</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" disabled value="Bulu Tangkis">
                </div>
            </div>

            <!-- Bordered Tabs Justified -->
            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab"
                        data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home"
                        aria-selected="true">Prsensi Atlet</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab"
                        data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile"
                        aria-selected="false">Presensi Pelatih</button>
                </li>
                <li class="nav-item flex-fill" role="presentation">
                    <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab"
                        data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact"
                        aria-selected="false">Rata Rata</button>
                </li>
            </ul>
            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel"
                    aria-labelledby="home-tab">
                    <div class="card-body">
                        <h5 class="card-title">Data Atlet</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Kehadiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
                <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="card-body">
                        <h5 class="card-title">Data Pelatih</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Kehadiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
                <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel"
                    aria-labelledby="contact-tab">
                    <div class="card-body">
                        <h5 class="card-title">Rata Rata Kebugaran</h5>

                        <!-- Table with stripped rows -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Kehadiran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Brandon Jacob</td>
                                    <td>Designer</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Bridie Kessler</td>
                                    <td>Developer</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Ashleigh Langosh</td>
                                    <td>Finance</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Angus Grady</td>
                                    <td>HR</td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Raheem Lehner</td>
                                    <td>Dynamic Division Officer</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>
            </div><!-- End Bordered Tabs Justified -->

        </div>
    </div>
@endsection