<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.manage-user.layout.header')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">


        {{-- Sidebar.blade.php --}}
        @include('admin.manage-user.layout.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                {{-- Navbar.blade.php --}}
                @include('admin.manage-user.layout.navbar')
            </header>

            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-5 text-center">Detail Perizinan</h5>
                            <a class="btn btn-success m-1 mb-3" href="{{ route('perizinan.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Kembali
                            </a>
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="alert alert-dark text-white" role="alert">
                                            (*) Hanya Melihat
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl_keluar" class="form-label">Tanggal Keluar <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            <input type="text" name="tgl_keluar" class="form-control"
                                                value="{{ date('j F Y', strtotime($perizinan->tgl_keluar)) }}" id="tgl_keluar" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam_keluar" class="form-label">Jam Keluar <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            <input type="time" name="jam_keluar" class="form-control"
                                                value="{{ $perizinan->jam_keluar }}" id="jam_keluar" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Tanggal Masuk <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            <input type="text" name="tgl_masuk" class="form-control"
                                                value="{{ date('j F Y', strtotime($perizinan->tgl_masuk)) }}" id="tgl_masuk" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam_masuk" class="form-label">Jam Masuk <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="time" name="jam_masuk" class="form-control"
                                                value="{{ $perizinan->jam_masuk }}" id="jam_keluar" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="status_perizinan" class="form-label">Status <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            @if ($perizinan->status_perizinan == 1)
                                                <input type="text" name="status_perizinan" class="form-control"
                                                    value="Aktif" id="status_perizinan" disabled>
                                            @else
                                                <input type="text" name="status_perizinan" class="form-control"
                                                    value="Tidak Aktif" id="status_perizinan" disabled>
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
