<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pelatih Edit</title>
</head>
<body>
    <a href="{{route('pelatih.show', $detailPelatih->id)}}">Kembali</a>
    <form action="{{route('pelatih.update', $detailPelatih->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name_pelatih">Nama Pelatih : <input type="text" name="name_pelatih" id="name_pelatih" value="{{$detailPelatih->name_pelatih}}"></label><br>
        <label for="cabor_atlet">Cabor Pelatih :
            <select name="cabor_pelatih" id="cabor_pelatih">
                @foreach ($dataCabor as $cabor)
                @if ($cabor->name_cabor === $detailPelatih->cabor_pelatih)
                    <option value="{{ $cabor->name_cabor }}" selected>{{ $cabor->name_cabor }}</option>
                @else
                    <option value="{{ $cabor->name_cabor }}">{{ $cabor->name_cabor }}</option>
                @endif
            @endforeach
            </select>
        </label><br>
        <button type="submit">Edit Pelatih</button>
    </form>
    <form action="{{route('pelatih.destroy', $detailPelatih->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
