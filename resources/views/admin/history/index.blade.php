@extends('layouts.index')

@section('main')
<div class="main mt-2" style="padding: 50px;">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if ($histories->count())

    <table class="admintable">
        <tr>
            <th>Nama Pengguna</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Lokasi</th>
            <th>Suhu</th>
            <th>Aksi</th>
        </tr>
        @foreach ($histories as $history)
        <tr>
            <td>{{ $history->user->fullname }}</td>
            <td>{{ $history->tanggal }}</td>
            <td>{{ $history->waktu }}</td>
            <td>{{ $history->lokasi }}</td>
            <td>{{ $history->suhu }}</td>
            <td>
                <div class="d-flex flex-row">
                    <a href="{{ route('histories.edit', $history->id) }}" class="badge bg-primary btnedit">Edit</a>
                    <form action="{{ route('histories.destroy', $history->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="badge bg-danger py-2" type="submit" style="border: 0" onclick="return confirm('are you sure ?')">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    @else
    <p>Data tidak ditemukan</p>
    @endif
    <div class="mt-3">
        {{ $histories->links() }}
    </div>
</div>
    
@endsection