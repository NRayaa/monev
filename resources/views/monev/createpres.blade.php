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
    @for ($i = 0; $i < $totalAtlet; $i++)
        <label for="atlet_{{ $i }}_name">Nama Atlet {{ $i + 1 }}</label>
        <input type="text" name="atlet[{{ $i }}][name]" id="atlet_{{ $i }}_name" value="{{$dataAtlet->name_atlet}}" required>
        <br>
        <label for="atlet_{{ $i }}_value">Value Atlet {{ $i + 1 }}</label>
        <input type="text" name="atlet[{{ $i }}][value]" id="atlet_{{ $i }}_value" required>
        <select name="atlet[{{ $i }}][value]" id="">
            <option value="Sakit">Sakit</option>
            <option value="Hadir">Hadir</option>
            <option value="Tanpa Keterangan">Tanpa Keterangan</option>
        </select>
        <br>
        <label for="atlet_{{ $i }}_keterangan">Keterangan Atlet {{ $i + 1 }}</label>
        <input type="text" name="atlet[{{ $i }}][keterangan]" id="atlet_{{ $i }}_keterangan">
        <br><br>
    @endfor

    <h3>Presensi Pelatih</h3>
    @for ($i = 0; $i < $totalPelatih; $i++)
        <label for="pelatih_{{ $i }}_name">Nama Pelatih {{ $i + 1 }}</label>
        <input type="text" name="pelatih[{{ $i }}][name]" id="pelatih_{{ $i }}_name" value="{{$dataPelatih->name_pelatih}}"
            required>
        <br>
        <label for="pelatih_{{ $i }}_value">Value Pelatih {{ $i + 1 }}</label>
        <select name="pelatih[{{ $i }}][value]" id="">
            <option value="Sakit">Sakit</option>
            <option value="Hadir">Hadir</option>
            <option value="Tanpa Keterangan">Tanpa Keterangan</option>
        </select>
        <br>
        <label for="pelatih_{{ $i }}_keterangan">Keterangan Pelatih {{ $i + 1 }}</label>
        <input type="text" name="pelatih[{{ $i }}][keterangan]"
            id="pelatih_{{ $i }}_keterangan">
        <br><br>
    @endfor
    </form>
    {{-- <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Presensi</th>
        </tr> --}}

</body>

</html>
