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
            <a class="nav-link collapsed" href="{{ route('cabor.index') }}">
                <i class="bi bi-collection"></i>
                <span>Cabor</span>
            </a>
        </li><!-- End Cabor Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('pelatih.index') }}">
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
    <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tambah Pelatih</h5>

                <!-- Tambah Cabang Olahraga Form -->
                <form class="row g-3 needs-validation" novalidate action="{{ route('pelatih.store') }}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Nama Pelatih</label>
                        <input type="text" class="form-control" id="validationCustom01" required name="name_pelatih">
                        <div class="invalid-feedback">
                            Mohon untuk diisi nama pelatih!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label class="col-sm-12 col-form-label">Pilih Cabor</label>
                        <div class="col-sm-12">
                            <select class="form-select" aria-label="Default select example" name="cabor_pelatih">
                                @foreach ($dataCabor as $cabor)
                                    <option value="{{$cabor->name_cabor}}">{{$cabor->name_cabor}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Tambah Pelatih</button>
                    </div>
                </form><!-- End Custom Styled Validation -->

            </div>
        </div>

    </div>
@endsection
