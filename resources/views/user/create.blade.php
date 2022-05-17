@extends('layouts.index')

@section('main')
    <div class="main mt-2" style="padding-left: 150px; padding-right:200px; padding-top: 50px">
        <div class="row mb-3">
            <label for="tanggal" class="col-sm-2">Tanggal</label>
            <div class="col-sm-10">
                <input type="date" class="formel form-control" id="tanggal" name="tanggal">
            </div>
        </div>
        <div class="row mb-3">
            <label for="waktu" class="col-sm-2">Waktu</label>
            <div class="col-sm-10">
                <input type="time" class="formel form-control" id="waktu" name="waktu">
            </div>
        </div>
        <div class="row mb-3">
            <label for="lokasi" class="col-sm-2">Lokasi</label>
            <div class="col-sm-10">
                <input type="text" class="formel form-control" id="lokasi" name="lokasi">
            </div>
        </div>
        <div class="row mb-3">
            <label for="suhu" class="col-sm-2">suhu</label>
            <div class="col-sm-10">
                <input type="number" step="0.1" class="formel form-control" id="suhu" name="suhu">
            </div>
        </div>

        <div class="nav justify-content-end mt-3 mb-4">
            <button class="btn" type="submit">Simpan</button>
        </div>
    </div>
@endsection