@extends('dashboard')
@section('content')
    <h4>Daftar Sewa Saya</h4>

    <table class="table table-bordered" id="dataTable">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Merek</th>
                <th scope="col">Model</th>
                <th scope="col">Nomor Plat</th>
                <th scope="col">Tarif Sewa (Harian)</th>
                <th scope="col">Tanggal Mulai</th>
                <th scope="col">Tanggal Selesai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mobil as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->merek }}</td>
                    <td>{{ $p->model }}</td>
                    <td>{{ $p->nomor_plat }}</td>
                    <td>{{ $p->tarif_sewa }}</td>
                    <td>{{ $p->tanggal_mulai }}</td>
                    <td>{{ $p->tanggal_selesai }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
