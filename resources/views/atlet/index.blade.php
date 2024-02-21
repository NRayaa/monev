<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atlet</title>
</head>
<body>
    <a href="{{route('cabor.index')}}">Cabor</a>
    <a href="{{route('atlet.index')}}">Atlet</a>
    <a href="{{route('pelatih.index')}}">Pelatih</a>

    <h1>Atlet</h1>
    <a href="{{route('atlet.create')}}">Tambah Atlet</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Atlet</th>
            <th>Cabor Atlet</th>
            <th>Action</th>
        </tr>
        @foreach ($atlets as $atlet)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$atlet->name_atlet}}</td>
                <td>{{$atlet->cabor_atlet}}</td>
                <td><a href="{{route('atlet.show', $atlet->id)}}">Detail</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
