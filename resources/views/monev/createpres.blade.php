<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monev Presensi</title>
</head>

<body>
    <form action="{{route('monev.storePres', $idMonev)}}" method="post">
    @csrf
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
    <input type="submit" value="Lanjut">
    </form>
</body>

</html>
