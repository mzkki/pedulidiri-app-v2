@extends('layouts.index')

@section('main')
<div class="main mt-2" style="height: 100%">
    Selamat datang <b>{{ auth()->user()->fullname }}</b> di aplikasi peduli diri.
</div>
@endsection