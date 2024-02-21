<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabor</title>
</head>
<body>
    <a href="{{route('cabor.index')}}">Cabor</a>
    <a href="{{route('atlet.index')}}">Atlet</a>
    <a href="{{route('pelatih.index')}}">Pelatih</a>

    <h1>Cabor</h1>
    <a href="{{route('cabor.create')}}">Tambah Cabor</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Cabor</th>
            <th>Action</th>
        </tr>
        @foreach ($cabors as $cabor)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$cabor->name_cabor}}</td>
                <td><a href="{{route('cabor.show', $cabor->id)}}">Detail</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
