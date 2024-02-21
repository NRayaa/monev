<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Average</title>
</head>
<body>
    <form action="{{route('monev.store')}}" method="post">
        @csrf
        <label for="">Rata-rata 1 : </label>
        <input type="radio" name="avrage" id="avrage" value="1">
        <input type="radio" name="avrage" id="avrage" value="2">
        <input type="radio" name="avrage" id="avrage" value="3">
        <input type="radio" name="avrage" id="avrage" value="4">
        <input type="radio" name="avrage" id="avrage" value="5"><br>
        
        <label for="">Rata-rata 2 : </label>
        <input type="radio" name="avrage2" id="avrage2" value="1">
        <input type="radio" name="avrage2" id="avrage2" value="2">
        <input type="radio" name="avrage2" id="avrage2" value="3">
        <input type="radio" name="avrage2" id="avrage2" value="4">
        <input type="radio" name="avrage2" id="avrage2" value="5"><br>
        <button type="submit">Lanjut</button>
    </form>
</body>
</html>