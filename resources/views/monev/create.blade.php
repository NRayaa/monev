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
            <h5 class="card-title">General Form Elements</h5>

            <!-- General Form Elements -->
            <form action="{{route('monev.store')}}" method="post">
                @csrf
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="lokasi_monev">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="date_monev">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Cabang Olahraga</label>
                    <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="cabor_monev">
                            @foreach ($dataCabor as $cabor)
                                <option value="{{$cabor->name_cabor}}">{{$cabor->name_cabor}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 d-flex justify-content-end align-items-center">
                        <button type="submit" class="btn btn-primary">Lanjut</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>
@endsection
