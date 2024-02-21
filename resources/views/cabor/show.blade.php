<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabor Detail</title>
</head>
<body>
    <a href="{{route('cabor.index')}}">Kembali</a><br>
    <a href="{{route('cabor.edit', $detailCabor->id)}}">Edit</a>

    <label for="name_cabor">Nama Cabor : {{$detailCabor->name_cabor}}</label><br>
    <h2>Atlet</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Atlet</th>
        </tr>
        @foreach ($atletCabor as $atlet)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$atlet->name_atlet}}</td>
            </tr>
        @endforeach
    </table>
    <h2>Pelatih</h2>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Pelatih</th>
        </tr>
        @foreach ($pelatihCabor as $pelatih)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pelatih->name_pelatih}}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>
