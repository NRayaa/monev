<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="jquery-3.7.1.min.js"></script>
    <title>create</title>
</head>
<body>
    <form action="{{route('coba.store')}}" method="post">
        @csrf
        {{-- Create 1 --}}
        <label for="lokasi_monev">Lokasi : <input type="text" name="lokasi_monev" id="lokasi_monev"></label>
        <label for="date_monev">Tanggal : <input type="date" name="date_monev" id="date_monev"></label><br>
        <label for="cabor_monev">
            <select name="cabor_monev" id="cabor_monev">
                @foreach ($dataCabor as $cabor)
                    <option value="{{$cabor->name_cabor}}">{{$cabor->name_cabor}}</option>
                @endforeach
            </select>
        </label><br>
        {{-- create 2 --}}
        <h3>Presensi Atlet</h3>
        <input type="hidden" name="total_atlet" value="{{$totalAtlet}}">
        @foreach ($dataAtlet as $atlet)
            <h4>Atlet{{ $loop->iteration }}</h4>
            <label for="">Nama Atlet : </label>
            <input type="text" name="name_atlet{{ $loop->iteration }}" id="name_atlet" value="{{$atlet->name_atlet}}" disabled><br>
            <label for="">Presensi : </label>
            <select name="atlet_value{{ $loop->iteration }}" id="atlet_value">
                <option value="Sakit">Sakit</option>
                <option value="Hadir">Hadir</option>
                <option value="Tanpa Keterangan">Tanpa Keterangan</option>
            </select><br>
            <label for="">Keterangan : </label>
            <input type="text" name="cabor_atlet{{ $loop->iteration }}"><br>
        @endforeach

        <h3>Presensi Pelatih</h3>
        <input type="hidden" name="total_pelatih" value="{{$totalPelatih}}">
        @foreach ($dataAtlet as $atlet)
            <h4>Atlet{{ $loop->iteration }}</h4>
            <label for="">Nama Atlet : </label>
            <input type="text" name="name_atlet{{ $loop->iteration }}" id="name_atlet" value="{{$atlet->name_atlet}}" disabled><br>
            <label for="">Presensi : </label>
            <select name="atlet_value{{ $loop->iteration }}" id="atlet_value">
                <option value="Sakit">Sakit</option>
                <option value="Hadir">Hadir</option>
                <option value="Tanpa Keterangan">Tanpa Keterangan</option>
            </select><br>
            <label for="">Keterangan : </label>
            <input type="text" name="cabor_atlet{{ $loop->iteration }}"><br>
        @endforeach
        {{-- create 3 --}}
        <label for="">Rata-rata 1 : </label>
        <input type="radio" name="avrage" id="avrage" value="1">
        <input type="radio" name="avrage" id="avrage" value="2">
        <input type="radio" name="avrage" id="avrage" value="3">
        <input type="radio" name="avrage" id="avrage" value="4">
        <input type="radio" name="avrage" id="avrage" value="5"><br>
        
        <label for="">Rata-rata 2 : </label>
        <input type="radio" name="avrage2" id="avrage2" value="1">
        <input type="radio" name="avrage2" id="avrage2" value="2">
        <input type="radio" name="avrage2" id="avrage2" value="3">
        <input type="radio" name="avrage2" id="avrage2" value="4">
        <input type="radio" name="avrage2" id="avrage2" value="5"><br>
        <button type="submit">Lanjut</button>
    </form>
</body>
</html>