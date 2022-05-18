<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="text-center">
                <img src="/image/logo2.png" width="150" height="150" style="margin-right: 10px" class="rounded float-end" alt="...">
            </div>
        </div>
        <div class="col-sm-9">
            <div class="header">
                <h3>
                    PEDULI DIRI
                    @can('admin')
                    ( Admin )
                    @endcan
                </h3>
                <p>Aplikasi Catatan Perjalanan</p>
            </div>
            <div class="link">
                <nav class="nav">
                    <a class="nav-link nav-first" href="/home">Home</a> |
                    <a class="nav-link" href="{{ route('history.index') }}">Catatan Perjalanan</a> |
                    <a class="nav-link" href="{{ route('history.create') }}">Isi Data</a> |
                    @can('admin')
                    <a class="nav-link" href="{{ route('histories.index') }}">Data Catatan</a> |
                    <a class="nav-link" href="{{ route('users.index') }}">Data Pengguna</a> |
                    @endcan
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link btn-logout">Log Out</button>
                    </form>
                </nav>
            </div>

            @yield('main')

        </div>
    </div>
</div>
