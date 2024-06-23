<!-- resources/views/kota/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Kota</title>
</head>
<body>
    <h1>Edit Kota</h1>
    <form action="{{ route('kota.update', $kota->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="NamaKota">Nama Kota:</label>
        <input type="text" name="NamaKota" id="NamaKota" value="{{ $kota->NamaKota }}">
        <br>
        <label for="NamaPemimpin">Nama Pemimpin:</label>
        <input type="text" name="NamaPemimpin" id="NamaPemimpin" value="{{ $kota->NamaPemimpin }}">
        <br>
        <label for="TglBerdiri">Tanggal Berdiri:</label>
        <input type="date" name="TglBerdiri" id="TglBerdiri" value="{{ $kota->TglBerdiri }}">
        <br>
        <label for="JmlPenduduk">Jumlah Penduduk:</label>
        <input type="number" name="JmlPenduduk" id="JmlPenduduk" value="{{ $kota->JmlPenduduk }}">
        <br>
        <label for="LuasWilayah">Luas Wilayah:</label>
        <input type="text" name="LuasWilayah" id="LuasWilayah" value="{{ $kota->LuasWilayah }}">
        <br>
        <label for="JenisKota">Jenis Kota:</label>
        <select name="JenisKota" id="JenisKota">
            <option value="Istimewa" {{ $kota->JenisKota == 'Istimewa' ? 'selected' : '' }}>Istimewa</option>
            <option value="Otonom" {{ $kota->JenisKota == 'Otonom' ? 'selected' : '' }}>Otonom</option>
            <option value="Percontohan" {{ $kota->JenisKota == 'Percontohan' ? 'selected' : '' }}>Percontohan</option>
        </select>
        <br>
        <label for="Keunggulan">Keunggulan:</label>
        <textarea name="Keunggulan" id="Keunggulan">{{ $kota->Keunggulan }}</textarea>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
