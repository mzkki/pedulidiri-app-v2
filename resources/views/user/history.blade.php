@extends('layouts.index')

@section('main')
    
<div class="main mt-2" style="padding: 50px; padding-left:100px;padding-right:100px">
    @if ($histories->count())
    <table>
        <tr>
            <td>Tanggal</td>
            <td>Waktu</td>
            <td>Lokasi</td>
            <td>Suhu</td>
        </tr>        
        @foreach ($histories as $history)
        <tr>
            <td>{{ $history->tanggal }}</td>
            <td>{{ $history->waktu }}</td>
            <td>{{ $history->lokasi }}</td>
            <td>{{ $history->suhu }}</td>
        </tr>
        @endforeach
    </table>
    @else
    <p>Data Tidak Ditemukan</p>
    @endif
    <div class="nav justify-content-end mt-3">
        <a href="history/create" class="btn">Isi Catatan Perjalanan</a>
    </div>
</div>
@endsection