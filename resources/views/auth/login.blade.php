@extends('auth.index')

@section('auth')
<div class="position-absolute top-50 start-50 translate-middle">
    <h3 class="text-center mb-2">Login</h3>
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <form action="/login" method="POST">
        @csrf
        <div class="form-floating mb-3">
            <input type="number" class="form-control @error('nik') is-invalid @enderror formlogin" id="floatingInput" placeholder="28282828" maxlength="16" name="nik" 
            oninput="javascript: if(this.value.length > this.maxLength) this.value = this.value.slice(0, maxLength);">
            <label for="floatingInput">NIK</label>
            @error('nik')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @else
            <p class="text-muted mt-1" style="font-size: 10pt">NIK harus 16 digit</p>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" class="form-control @error('fullname') is-invalid @enderror formlogin" id="floatingPassword" placeholder="text" name="fullname">
            <label for="floatingPassword">Nama Lengkap</label>
            @error('fullname')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="row mt-3">
            <div class="col">
                <a href="/register" class="btn">Saya Pengguna Baru</a>
            </div>
            <div class="col text-end">
                <button class="btn">Masuk</button>
            </div>
        </div>
    </form>
</div>
@endsection
