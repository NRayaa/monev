<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabor Create</title>
</head>
<body>
    <a href="{{route('cabor.index')}}">Kembali</a>
    <form action="{{route('cabor.store')}}" method="post">
        @csrf
        <label for="name_cabor">Nama Cabor : <input type="text" name="name_cabor" id="name_cabor"></label>
        <button type="submit">Tambah Cabor</button>
    </form>
</body>
</html>
