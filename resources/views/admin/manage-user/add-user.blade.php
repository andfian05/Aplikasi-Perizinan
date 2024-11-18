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
                            <h5 class="card-title fw-semibold mb-5 text-center">Tambah Pengguna</h5>
                            <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('manage-user.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Kembali
                            </a>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('manage-user.store') }}" method="POST" id="form1"
                                        name="form1" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="alert alert-danger" role="alert">
                                            (*) Wajib Mengisi
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama <sup class="text-danger"
                                                    font-size="20px">*</sup></label>
                                            <input type="text" name="nama" class="form-control" id="nama"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="text" name="username" class="form-control" id="username"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Pemangku Kepentingan <sup
                                                    class="text-danger" font-size="20px">* </sup></label>
                                            <select name="role" id="role" type="text" class="form-control"
                                                required onclick="show()">
                                                <option value="">--- Role ---</option>
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role }}">{{ $role }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <script>
                                            function show() {
                                                var roles = document.getElementById("form1").role.value;
                                                var konten = document.getElementById("container");
                                                if (roles == 'Mahasantri') {
                                                    konten.innerHTML = ` 
                                    
                                                        <div class="mb-3">
                                                            <label for="angkatan" class="form-label">Angkatan <sup class="text-danger"
                                                                    font-size="20px">* </sup></label>
                                                            <input type="text" name="angkatan" class="form-control" id="angkatan" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kelas" class="form-label">Kelas <sup
                                                                class="text-danger" font-size="20px">* </sup></label>
                                                            <select name="kelas" id="kelas" type="text" class="form-control" required>
                                                                <option value="">--- kelas ---</option>
                                                                <option value="DM">Digital Marketing</option>
                                                                <option value="PPL">Pengembangan Perangkat Lunak</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="kamar" class="form-label">Kamar <sup
                                                                class="text-danger" font-size="20px">* </sup></label>
                                                            <select name="kamar" id="kamar" type="text" class="form-control" required>
                                                                <option value="">--- Kamar ---</option>
                                                                <option value="1">Satu (1)</option>
                                                                <option value="2">Dua (2)</option>
                                                                <option value="3">Tiga (3)</option>
                                                                <option value="4">Empat (4)</option>
                                                                <option value="5">Lima (5)</option>
                                                                <option value="6">Enam (6)</option>
                                                            </select>
                                                        </div>
                                                    `;
                                                } else {
                                                    konten.innerHTML = ``;
                                                }
                                            }
                                        </script>

                                        <div class="container" id="container"></div>

                                        <div class="mb-3">
                                            <label for="photo" class="form-label">Foto<sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="file" name="photo" class="form-control" id="photo"
                                                required>
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Tambah
                                            Pengguna</button>
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
