<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelatih Detail</title>
</head>
<body>
    <a href="{{route('pelatih.index')}}">Kembali</a><br>
    <label for="name_pelatih">Nama Atlet : {{$detailPelatih->name_pelatih}}</label><br>
    <label for="cabor_pelatih">Cabor Atlet : {{$detailPelatih->cabor_pelatih}}</label><br>
    <a href="{{route('pelatih.edit', $detailPelatih->id)}}">Edit</a>
</body>
</html>
