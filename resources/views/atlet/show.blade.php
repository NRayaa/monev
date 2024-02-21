<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atlet Detail</title>
</head>
<body>
    <a href="{{route('atlet.index')}}">Kembali</a><br>
    <label for="name_atlet">Nama Atlet : {{$detailAtlet->name_atlet}}</label><br>
    <label for="cabor_atlet">Cabor Atlet : {{$detailAtlet->cabor_atlet}}</label><br>
    <a href="{{route('atlet.edit', $detailAtlet->id)}}">Edit</a>
</body>
</html>
