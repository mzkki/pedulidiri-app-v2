@extends('layouts.index')

@section('main')
<div class="main mt-2" style="padding: 50px">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nama Lengkap</th>
            <th>Aksi</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration + $skipped }}</td>
            <td>{{ $user->nik }}</td>
            <td>{{ $user->fullname }}</td>
            <td>
                <div class="d-flex flex-row">
                    <a href="{{ route('users.edit', $user->nik) }}" class="badge bg-primary btnedit">Edit</a>
                    <form action="{{ route('users.destroy', $user->nik) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="badge bg-danger py-2" type="submit" style="border: 0" onclick="return confirm('are you sure ?')">Hapus</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="mt-3">
        {{ $users->links() }}
    </div>
</div>
    
@endsection