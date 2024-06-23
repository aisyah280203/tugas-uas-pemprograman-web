<!-- resources/views/kota/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kota</title>
</head>
<body>
    <h1>Daftar Kota</h1>
    <a href="{{ route('kota.create') }}">Tambah Kota</a>
    <a href="{{ route('kota.print') }}">Print PDF</a>
    <ul>
        @foreach($kotas as $kota)
            <li>
                {{ $kota->NamaKota }} - <a href="{{ route('kota.edit', $kota->id) }}">Edit</a>
                <form action="{{ route('kota.destroy', $kota->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
