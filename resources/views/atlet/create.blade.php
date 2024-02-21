<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atlet Create</title>
</head>
<body>
    <a href="{{route('atlet.index')}}">Kembali</a>
    <form action="{{route('atlet.store')}}" method="post">
        @csrf
        <label for="name_atlet">Nama Atlet : <input type="text" name="name_atlet" id="name_atlet"></label><br>
        <label for="cabor_atlet">Cabor Atlet :
            <select name="cabor_atlet" id="cabor_atlet">
                <option value="">Pilih satu</option>
                @foreach ($dataCabor as $cabor)
                    <option value="{{$cabor->name_cabor}}">{{$cabor->name_cabor}}</option>
                @endforeach
            </select>
        </label><br>
        <button type="submit">Tambah Atlet</button>
    </form>
</body>
</html>
