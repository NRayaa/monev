<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monev</title>
</head>
<body>
    <h1>MONEV</h1>
    <a href="{{route('monev.create')}}">Buat Monev</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Lokasi</th>
            <th>Tanggal</th>
            <th>Action</th>
        </tr>
        @foreach ($monevs as $monev)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$monev->lokasi_monev}}</td>
                <td>{{$monev->date_monev}}</td>
                <td><a href="#">Detail</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>
