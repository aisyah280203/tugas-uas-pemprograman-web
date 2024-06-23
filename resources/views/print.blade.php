<!-- resources/views/kota/print.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kota</title>
</head>
<body>
    <h1>Daftar Kota</h1>
    <ul>
        @foreach($kotas as $kota)
            <li>{{ $kota->NamaKota }} - {{ $kota->NamaPemimpin }}</li>
        @endforeach
    </ul>
</body>
</html>
