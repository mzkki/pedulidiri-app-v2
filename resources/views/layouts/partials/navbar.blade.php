<div class="container">
    <div class="row">
        <div class="col-sm-3">
            {{-- <div class="text-center"> --}}
            <img src="https://source.unsplash.com/150x150" class="rounded float-end" alt="...">
            {{-- </div> --}}
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
                    <a class="nav-link" href="/history">Catatan Perjalanan</a> |
                    <a class="nav-link" href="/history/create">Isi Data</a> |
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
