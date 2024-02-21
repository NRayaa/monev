<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Average</title>
</head>
<body>
    <form action="{{route('monev.storeAverage', $idMonev)}}" method="post">
        @csrf
        @for ($i = 1; $i <= 2; $i++)
            <input type="hidden" name="name_average[{{ $i }}]" value="avrage{{ $i }}"><br>
            <label for="">Rata-rata {{ $i }} : </label>
            <input type="radio" name="avrage[{{ $i }}]" id="avrage" value="1">1
            <input type="radio" name="avrage[{{ $i }}]" id="avrage" value="2">2
            <input type="radio" name="avrage[{{ $i }}]" id="avrage" value="3">3
            <input type="radio" name="avrage[{{ $i }}]" id="avrage" value="4">4
            <input type="radio" name="avrage[{{ $i }}]" id="avrage" value="5">5<br>
        @endfor
        <button type="submit">Lanjut</button>
    </form>
</body>
</html>