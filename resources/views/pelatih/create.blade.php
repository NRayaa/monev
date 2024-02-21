<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelatih Create</title>
</head>
<body>
    <a href="{{route('pelatih.index')}}">Kembali</a>
    <form action="{{route('pelatih.store')}}" method="post">
        @csrf
        <label for="name_pelatih">Nama Pelatih : <input type="text" name="name_pelatih" id="name_pelatih"></label><br>
        <label for="cabor_pelatih">Cabor Pelatih :
            <select name="cabor_pelatih" id="cabor_pelatih">
                <option value="">Pilih satu</option>
                @foreach ($dataCabor as $cabor)
                    <option value="{{$cabor->name_cabor}}">{{$cabor->name_cabor}}</option>
                @endforeach
            </select>
        </label><br>
        <button type="submit">Tambah Pelatih</button>
    </form>
</body>
</html>
