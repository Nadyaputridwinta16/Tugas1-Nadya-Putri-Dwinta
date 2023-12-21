<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{  route('home') }}">Home</a>
    <form action="{{route('simpan')}}"method="POST">
        @csrf
        <label for="buah">Nama Buah</label><br>
        <input type="text" name="buah"><br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>