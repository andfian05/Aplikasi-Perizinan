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
                            <h5 class="card-title fw-semibold mb-5 text-center">Tambah Perizinan</h5>
                            <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('perizinan.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Kembali
                            </a>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('perizinan.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="alert alert-danger" role="alert">
                                            (*) Wajib Mengisi
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl_keluar" class="form-label">Tanggal Keluar <sup
                                                    class="text-danger" font-size="20px">*</sup></label>
                                            <input type="date" name="tgl_keluar" class="form-control" id="tgl_keluar"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam_keluar" class="form-label">Jam Keluar <sup
                                                    class="text-danger" font-size="20px">* </sup></label>
                                            <input type="time" name="jam_keluar" class="form-control" id="jam_keluar"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tgl_masuk" class="form-label">Tanggal Masuk <sup
                                                    class="text-danger" font-size="20px">* </sup></label>
                                            <input type="date" name="tgl_masuk" class="form-control" id="tgl_masuk"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="jam_masuk" class="form-label">Jam Masuk <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="time" name="jam_masuk" class="form-control" id="jam_masuk"
                                                required>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Tambah
                                            Perizinan</button>
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
