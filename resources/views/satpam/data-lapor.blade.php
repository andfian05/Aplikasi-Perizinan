<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('satpam.layout.header')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        {{-- Sidebar.blade.php --}}
        @include('satpam.layout.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                {{-- Navbar.blade.php --}}
                @include('satpam.layout.navbar')
            </header>

            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-5 text-center">Data Pelapor</h5>
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="container-fluid">
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                @foreach ($perizinans as $perizinan)
                                                    <div class="col-md-4">
                                                        <div class="card">
                                                            @empty($perizinan->mahasantri->photo)
                                                                <img src="{{ asset('Templeate/src/assets/images/profile/user-1.jpg') }}"
                                                                    class="card-img-top"
                                                                    alt="{{ $perizinan->mahasantri->nama }}">
                                                            @else
                                                                <img src="{{ asset('img/profile') }}/{{ $perizinan->mahasantri->photo }}"
                                                                    class="card-img-top"
                                                                    alt="{{ $perizinan->mahasantri->nama }}">
                                                            @endempty
                                                            <div class="card-body">
                                                                <p class="card-text">{{ $perizinan->mahasantri->nama }}
                                                                </p>
                                                                <a href="{{ url('security/pelaporan/' . $perizinan->id . '/report') }}"
                                                                    class="btn btn-primary">Terima
                                                                    Laporan</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer.blade.php --}}
    @include('satpam.layout.footer')

</body>

</html>
