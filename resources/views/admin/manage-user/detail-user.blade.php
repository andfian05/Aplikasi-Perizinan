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
                            <h5 class="card-title fw-semibold mb-5 text-center">Detail Pengguna</h5>
                            <a class="btn btn-success m-1 mb-3" href="{{ route('manage-user.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Kembali
                            </a>
                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="alert alert-dark text-white" role="alert">
                                            (*) Hanya Melihat
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama <sup class="text-secondary"
                                                    font-size="20px">* </sup></label>
                                            <input type="text" name="nama" class="form-control"
                                                value="{{ $user->nama }}" id="nama" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            <input type="text" name="username" class="form-control"
                                                value="{{ $user->username }}" id="username" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <sup class="text-secondary"
                                                    font-size="20px">* </sup></label>
                                            <input type="text" name="email" class="form-control"
                                                value="{{ $user->email }}" id="email" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Pemangku Kepentingan <sup
                                                class="text-secondary" font-size="20px">* </sup></label>
                                            <select name="role" id="role" type="text" class="form-control"
                                                aria-describedby="" disabled>
                                                <option value="{{ $user->role }}">{{ $user->role }}</option>
                                            </select>
                                        </div>
                                        @if ( $user->role == 'Mahasantri')
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Angkatan <sup class="text-danger"
                                                font-size="20px">* </sup></label>
                                            <input type="text" name="angkatan" class="form-control" id="angkatan" 
                                                value="{{ $mahasantri->angkatan }}" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas <sup
                                                class="text-danger" font-size="20px">* </sup></label>
                                            <select name="kelas" id="kelas" type="text" class="form-control" disabled>
                                                <option value="{{ $mahasantri->kelas }}">{{ $mahasantri->kelas }}</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kamar" class="form-label">Kamar <sup
                                                class="text-danger" font-size="20px">* </sup></label>
                                            <select name="kamar" id="kamar" type="text" class="form-control" disabled>
                                                <option value="{{ $mahasantri->kamar }}">{{ $mahasantri->kamar }}</option>
                                            </select>
                                        </div>
                                        @endif
                                        <div class="col-sm-7 col-xl-5">
                                            <div class="card overflow-hidden rounded-2">
                                                <div class="position-relative">
                                                    <a href="javascript:void(0)">
                                                        @empty($user->photo)
                                                            <img src="{{ asset('img/profile/no-photo.png') }}"
                                                                class="card-img-top rounded-0" alt="{{ $user->username }}">
                                                        @else
                                                            <img src="{{ asset('img/profile') }}/{{ $user->photo }}"
                                                                class="card-img-top rounded-0" alt="{{ $user->username }}">
                                                        @endempty
                                                    </a>
                                                    <a href="javascript:void(0)"
                                                        class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        data-bs-title="Add To Cart"><i class="ti ti-basket fs-4"></i>
                                                    </a>
                                                </div>
                                                <div class="card-body pt-3 p-4">
                                                    <h6 class="fw-semibold fs-4">Nama</h6>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        {{ $user->nama }}
                                                    </div>
                                                </div>
                                            </div>
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
