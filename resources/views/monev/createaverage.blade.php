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
            <h5 class="card-title">Rata Rata</h5>

            <!-- Default Table -->
            <form action="{{route('monev.storeAverage', $idMonev)}}" method="post">
                @csrf
            @for ($i = 1; $i <= 2; $i++)
                <input type="hidden" name="name_average[{{ $i }}]" value="avrage{{ $i }}">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" colspan="5">Rata-rata kesehatan badan para atlet (1-5)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="avrage[{{ $i }}]"
                                        id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        1 (Satu)
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="avrage[{{ $i }}]"
                                        id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        2 (Dua)
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="avrage[{{ $i }}]"
                                        id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        3 (Tiga)
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="avrage[{{ $i }}]"
                                        id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        4 (Empat)
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="avrage[{{ $i }}]"
                                        id="gridRadios2" value="option2">
                                    <label class="form-check-label" for="gridRadios2">
                                        5 (Lima)
                                    </label>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            @endfor
            <!-- End Default Table Example -->
            <div class="row mb-3">
                <div class="col-12 d-flex justify-content-end align-items-center">
                    <button type="submit" class="btn btn-primary">Selesai</button>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
