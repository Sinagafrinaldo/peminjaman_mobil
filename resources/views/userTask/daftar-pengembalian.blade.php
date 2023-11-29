@extends('dashboard')
@section('content')
    <h4>Daftar Pengembalian Saya</h4>

    <table class="table table-bordered" id="dataTable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">No Plat</th>
                <th scope="col">Tanggal Kembali</th>
                <th scope="col">Jumlah Hari</th>
                <th scope="col">Biaya Sewa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengembalians as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nomor_plat }}</td>
                    <td>{{ $p->tanggal_kembali }}</td>
                    <td>{{ $p->jumlah_hari }}</td>
                    <td>{{ $p->biaya_sewa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
