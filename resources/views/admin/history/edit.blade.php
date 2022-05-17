@extends('layouts.index')

@section('main')
<div class="main mt-2" style="padding-left: 150px; padding-right:200px; padding-top: 50px">
    <form action="{{ route('histories.update', $history->id) }}" method="POST">
        @csrf
        @method('put')
        <input type="hidden" name="user_id" value="{{ $history->user->id }}">
        <div class="row mb-3">
            <label for="tanggal" class="col-sm-2">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="formel @error('tanggal') is-invalid @enderror form-control" id="tanggal" name="tanggal" value="{{ old('tanggal',$history->tanggal) }}">
                @error('tanggal')
                    <div class="invalid-feedback" style="margin-left: 90px">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="waktu" class="col-sm-2">Waktu</label>
            <div class="col-sm-10">
                <input type="time" class="formel @error('waktu') is-invalid @enderror form-control" id="waktu" name="waktu" value="{{ old('waktu',$history->waktu) }}">
                @error('waktu')
                    <div class="invalid-feedback" style="margin-left: 90px">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="lokasi" class="col-sm-2">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="formel @error('lokasi') is-invalid @enderror form-control" id="lokasi" name="lokasi" value="{{ old('lokasi',$history->lokasi) }}">
                @error('lokasi')
                    <div class="invalid-feedback" style="margin-left: 90px">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="suhu" class="col-sm-2">suhu</label>
            <div class="col-sm-10">
                <input type="number" step="0.1" class="formel @error('suhu') is-invalid @enderror form-control" id="suhu" name="suhu" value="{{ old('suhu',$history->suhu) }}">
                @error('suhu')
                    <div class="invalid-feedback" style="margin-left: 90px">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="nav justify-content-end mt-3 mb-4">
            <button class="btn" type="submit">Perbarui</button>
        </div>
    </form>
</div>
    
@endsection