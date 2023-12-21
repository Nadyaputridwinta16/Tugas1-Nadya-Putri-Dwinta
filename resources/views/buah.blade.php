<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width: 50%; margin: auto;">
<h1>List Buah</h1>
    <h2>Jumlah buah pada list sebanyak : {{$jumlah}}</h2>
    <a href="{{ route('add') }}">Tambah data</a>
    <ul>
        @foreach ($buah as $b)
        <li>
            {{$b->nama}}
            <a href ="{{ route('edit', $b->id) }}"><button>Edit</button></a>
            <form action ="{{ route('hapus') }}" method="POST">
                @method('delete')
                @csrf
                <input type="hidden" name="id" value="{{ $b->id }}">
                <button type="submit">Hapus</button>
            </form>
        </li>
        @endforeach
    </ul>
</div>
</body>
</html>