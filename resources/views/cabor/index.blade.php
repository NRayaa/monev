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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-6">
                    <h5 class="card-title">Data Cabang Olahraga</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <a href="{{ route('cabor.create') }}" type="button" class="btn btn-primary"><i class="bi bi-plus me-1"></i> Tambah</a>
                </div>
            </div>
            <!-- Table with stripped rows -->
            <table class="table datatable datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Cabang Olahraga</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cabors as $cabor)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $cabor->name_cabor }}</td>
                            <td><a href="{{ route('cabor.show', $cabor->id) }}" class="btn btn-warning"><i
                                        class="bi bi-search me-1"></i> Detail</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
@endsection
