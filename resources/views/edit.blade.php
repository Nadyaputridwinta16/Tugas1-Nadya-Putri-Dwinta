<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<a href="{{  route('home') }}">Home</a>
    <form action="{{ route('update') }}"method="POST">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ $buah->id }}">
        <label for="buah">Nama Buah</label><br>
        <input type="text" name="buah" value="{{ $buah->nama }}"><br>
        <button type="submit">Edit</button>
    </form>
</body>
</html>