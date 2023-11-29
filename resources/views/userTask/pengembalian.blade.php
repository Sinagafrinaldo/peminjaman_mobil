@extends('dashboard')

@section('content')
    <h2>Pengembalian Mobil</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="/proses-pengembalian" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomor_plat" class="form-label">Nomor Plat Mobil</label>
            <select class="form-select @error('nomor_plat') is-invalid @enderror" id="nomor_plat" name="nomor_plat" required>
                @foreach($mobil as $m)
                    <option value="{{ $m->nomor_plat }}">{{ $m->merek }} - {{ $m->nomor_plat }}</option>
                @endforeach
            </select>
            @error('nomor_plat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" id="tanggal_kembali" name="tanggal_kembali" required>
            @error('tanggal_kembali')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jumlah_hari" class="form-label">Jumlah Hari</label>
            <input type="number" class="form-control @error('jumlah_hari') is-invalid @enderror" id="jumlah_hari" name="jumlah_hari" required>
            @error('jumlah_hari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Kembalikan Mobil</button>
    </form>
@endsection
