<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cabor Edit</title>
</head>
<body>
    <a href="{{route('cabor.show', $detailCabor->id)}}">Kembali</a>
    <form action="{{route('cabor.update', $detailCabor->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name_cabor">Nama Cabor : <input type="text" name="name_cabor" id="name_cabor" value="{{$detailCabor->name_cabor}}"></label>
        <button type="submit">Tambah Cabor</button>
    </form>
    <form action="{{route('cabor.destroy', $detailCabor->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
