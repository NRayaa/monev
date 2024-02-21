<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelatih</title>
</head>
<body>
    <a href="{{route('cabor.index')}}">Cabor</a>
    <a href="{{route('atlet.index')}}">Atlet</a>
    <a href="{{route('pelatih.index')}}">Pelatih</a>

    <h1>Pelatih</h1>
    <a href="{{route('pelatih.create')}}">Tambah Pelatih</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Pelatih</th>
            <th>Cabor Pelatih</th>
            <th>Action</th>
        </tr>
        @foreach ($pelatihs as $pelatih)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$pelatih->name_pelatih}}</td>
                <td>{{$pelatih->cabor_pelatih}}</td>
                <td><a href="{{route('pelatih.show', $pelatih->id)}}">Detail</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
