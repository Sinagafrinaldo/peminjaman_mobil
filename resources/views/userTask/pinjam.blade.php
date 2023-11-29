

@extends('dashboard')

@section('content')
    <h2>Pesan Mobil</h2>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form action="/pesan-mobil" method="POST">
        @csrf
        <div class="mb-3">
            <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_selesai" class="form-label">Tanggal Selesai</label>
            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" required>
        </div>

        <div class="mb-3">
            <label for="mobil_id" class="form-label">Pilih Mobil</label>
            <select class="form-select" id="mobil_id" name="mobil_id" required>
                @foreach($mobil as $m)
                    <option value="{{ $m->id }}">{{ $m->merek }} - {{ $m->nomor_plat }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Pesan Mobil</button>
    </form>
@endsection
