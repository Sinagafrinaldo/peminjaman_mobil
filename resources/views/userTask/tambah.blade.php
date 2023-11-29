@extends('dashboard')
@section('content')
<body>

    <h2>Tambah Mobil Baru</h2>

    <form action="/proses_tambah" method="post">
        @csrf 

        <label for="merek">Merek:</label>
        <input type="text" id="merek" name="merek" required>
        <br>
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required>
        <br>
        <label for="nomor_plat">Nomor Plat:</label>
        <input type="text" id="nomor_plat" name="nomor_plat" required>
        <br>
        <label for="tarif_sewa">Tarif Sewa per Hari (Rp):</label>
        <input type="number" id="tarif_sewa" name="tarif_sewa" required>

        <br>
        <button type="submit">Tambah Mobil</button>
    </form>

</body>
@endsection