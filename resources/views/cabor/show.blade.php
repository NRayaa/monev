@extends('layouts.layout')
@section('crumb', 'Cabor')
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
            <a class="nav-link collapsed" href="{{route('monev.index')}}">
                <i class="bi bi-book"></i>
                <span>Monev</span>
            </a>
        </li><!-- End Monev Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('cabor.index') }}">
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
    <section class="section">
        <div class="col-lg-12">

            <!-- Default Card -->
            <div class="card ">
              <div class="card-body">
                <h5 class="card-title ">Cabang Olahraga : {{$detailCabor->name_cabor}}</h5>
              </div>
            </div><!-- End Default Card -->

          </div>
        <div class="row">
            <div class="col-lg-6">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Data Atlet Cabor : {{$detailCabor->name_cabor}}</h5>

                    <!-- Table Atlet Cabor -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Name</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($atletCabor as $atlet)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$atlet->name_atlet}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- End Table Atlet Cabor -->

                  </div>
                </div>

              </div>

              <div class="col-lg-6">

                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Data Pelatih Cabor : {{$detailCabor->name_cabor}}</h5>

                    <!-- Table with stripped rows -->
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Nama Pelatih</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pelatihCabor as $pelatih)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$pelatih->name_pelatih}}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <!-- End Table with stripped rows -->

                  </div>
                </div>

              </div>
        </div>
    </section>
@endsection
