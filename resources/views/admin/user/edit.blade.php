@extends('layouts.index')

@section('main')
<div class="main mt-2" style="padding-left: 150px; padding-right:200px; padding-top: 50px">
    <form action="{{ route('users.update', $user->nik) }}" method="POST">
        @csrf
        @method('put')
        
        <div class="row mb-3">
            <label for="nik" class="col-sm-2">NIK</label>
            <div class="col-sm-10">
                <input type="number" oninput="javascript: if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength)" maxlength="16" class="formel @error('nik') is-invalid @enderror form-control" value="{{ old('nik', $user->nik) }}" name="nik">
                @error('nik')
                    <div class="invalid-feedback" style="margin-left: 90px">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="fullname" class="col-sm-2">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="formel @error('fullname') is-invalid @enderror form-control" value="{{ old('fullname', $user->fullname) }}" name="fullname">
                @error('fullname')
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