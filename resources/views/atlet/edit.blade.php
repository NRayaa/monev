<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Atlet Edit</title>
</head>
<body>
    <a href="{{route('atlet.show', $detailAtlet->id)}}">Kembali</a>
    <form action="{{route('atlet.update', $detailAtlet->id)}}" method="post">
        @csrf
        @method('PUT')
        <label for="name_atlet">Nama Atlet : <input type="text" name="name_atlet" id="name_atlet" value="{{$detailAtlet->name_atlet}}"></label><br>
        <label for="cabor_atlet">Cabor Atlet :
            <select name="cabor_atlet" id="cabor_atlet">
                @foreach ($dataCabor as $cabor)
                @if ($cabor->name_cabor === $detailAtlet->cabor_atlet)
                    <option value="{{ $cabor->name_cabor }}" selected>{{ $cabor->name_cabor }}</option>
                @else
                    <option value="{{ $cabor->name_cabor }}">{{ $cabor->name_cabor }}</option>
                @endif
            @endforeach
            </select>
        </label><br>
        <button type="submit">Edit Atlet</button>
    </form>
    <form action="{{route('atlet.destroy', $detailAtlet->id)}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
