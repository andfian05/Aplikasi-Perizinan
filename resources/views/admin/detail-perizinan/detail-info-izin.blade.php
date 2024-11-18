<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.detail-perizinan.layout.header')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">

        {{-- Sidebar.blade.php --}}
        @include('admin.detail-perizinan.layout.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                {{-- Navbar.blade.php --}}
                @include('admin.detail-perizinan.layout.navbar')
            </header>

            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-5 text-center">Detail Izin</h5>
                            <a class="btn btn-success m-1 mb-3" href="{{ route('detail-perizinan.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Kembali
                            </a>

                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="alert alert-dark text-white" role="alert">
                                            (*) Hanya Melihat
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama Lengkap <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            <input type="text" name="nama" class="form-control"
                                                value="{{ $detail_perizinan->mahasantri['nama'] }}" id="nama"
                                                disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam_masuk" class="form-label">Tanggal & Jam Kedatangan Mahasantri <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="text" name="jam_masuk" class="form-control" id="jam_keluar"
                                                value="{{ date('j F Y, H:i', strtotime($detail_perizinan->updated_at)) }}"
                                                disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            @php
                                                $jam = date('H:i:s', strtotime($detail_perizinan->updated_at));
                                                $tanggal = date('j n Y', strtotime($detail_perizinan->updated_at));
                                                $tanggal_masuk = date('j n Y', strtotime($detail_perizinan->tanggal_masuk));
                                            @endphp
                                            @if ($tanggal_masuk >= $tanggal && $detail_perizinan->waktu_masuk >= $jam)
                                                <input type="text" name="status" class="form-control" id="status"
                                                    value="Hadir" disabled>
                                            @else
                                                <input type="text" name="status" class="form-control" id="status"
                                                    value="Terlambat" disabled>
                                            @endif
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- Footer.blade.php --}}
    @include('admin.layout.footer')


</body>

</html>
