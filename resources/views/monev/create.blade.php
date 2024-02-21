<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Monev Create</title>
</head>
<body>
    <a href="{{route('monev.index')}}">Kemabli</a>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
    <form action="{{route('monev.store')}}" method="post">
        @csrf
        <label for="lokasi_monev">Lokasi : <input type="text" name="lokasi_monev" id="lokasi_monev"></label><br>
        <label for="date_monev">Tanggal : <input type="date" name="date_monev" id="date_monev"></label><br>
        <label for="cabor_monev">
            <select name="cabor_menu" id="cabor_menu">
                @foreach ($dataCabor as $cabor)
                    <option value="{{$cabor->name_cabor}}">{{$cabor->name_cabor}}</option>
                @endforeach
            </select>
        </label><br>
        <button type="submit">Lanjut</button>
    </form>
</body>
</html>
