@extends('dashboard')

@section('content')
    <div class="container">
        <h4>Selamat Datang di Peminjaman Mobil</h4>
        
        <div class="my-4">
            <a href="/tambah" class="btn btn-primary">Tambah Data Mobil</a>
        </div>

        <div class="my-4">
            <a href="/pinjam" class="btn btn-success">Pinjam Mobil</a>
        </div>

        <div class="my-4">
            <a href="/daftar-sewa-user" class="btn btn-info">Daftar Sewa Saya</a>
        </div>

        <div class="my-4">
            <a href="/pengembalian" class="btn btn-warning">Pengembalian Mobil</a>
        </div>

        <div class="my-4">
            <a href="/daftar-pengembalian" class="btn btn-secondary">Daftar Pengembalian Mobil</a>
        </div>

        <div class="mb-3">
            <form action="cari-mobil" method="GET" class="form-inline">
                <input type="text" class="form-control mr-2" name="query" placeholder="Cari mobil...">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
        </div>

        <table class="table table-bordered" id="dataTable">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Model</th>
                    <th scope="col">Nomor Plat</th>
                    <th scope="col">Tarif Sewa / Hari</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mobil as $m)
                    <tr>
                        <td>{{ $m->id }}</td>
                        <td>{{ $m->merek }}</td>
                        <td>{{ $m->model }}</td>
                        <td>{{ $m->nomor_plat }}</td>
                        <td>{{ $m->tarif_sewa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
