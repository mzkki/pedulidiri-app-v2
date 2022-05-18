@extends('layouts.index')

@section('main')
<div class="base-filter d-flex flex-row bd-highlight mt-2 mb-2">
    <div class="bd-highlight">Urutkan Berdasarkan</div>
    <form action="{{ route('histories.index') }}" method="GET" class="d-flex">
        <div class="mx-2 bd-highlight">
            <select name="filter" id="filter" class="filter">
                <option selected>Pilih User</option>
                @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->fullname }}</option>
                @endforeach
            </select>
        </div>
        <div class="nav justify-content-end bd-highlight">
            <button class="btn-filter" type="submit">Urutkan</button>
        </div>
    </form>
</div>
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
