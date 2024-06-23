<!-- resources/views/kota/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kota</title>
</head>
<body>
    <h1>Tambah Kota</h1>
    <form action="{{ route('kota.store') }}" method="POST">
        @csrf
        <label for="NamaKota">Nama Kota:</label>
        <input type="text" name="NamaKota" id="NamaKota">
        <br>
        <label for="NamaPemimpin">Nama Pemimpin:</label>
        <input type="text" name="NamaPemimpin" id="NamaPemimpin">
        <br>
        <label for="TglBerdiri">Tanggal Berdiri:</label>
        <input type="date" name="TglBerdiri" id="TglBerdiri">
        <br>
        <label for="JmlPenduduk">Jumlah Penduduk:</label>
        <input type="number" name="JmlPenduduk" id="JmlPenduduk">
        <br>
        <label for="LuasWilayah">Luas Wilayah:</label>
        <input type="text" name="LuasWilayah" id="LuasWilayah">
        <br>
        <label for="JenisKota">Jenis Kota:</label>
        <select name="JenisKota" id="JenisKota">
            <option value="Istimewa">Istimewa</option>
            <option value="Otonom">Otonom</option>
            <option value="Percontohan">Percontohan</option>
        </select>
        <br>
        <label for="Keunggulan">Keunggulan:</label>
        <textarea name="Keunggulan" id="Keunggulan"></textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
