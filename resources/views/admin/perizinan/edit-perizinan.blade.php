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


                            <h5 class="card-title fw-semibold mb-5 text-center">Edit Perizinan</h5>
                            <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('perizinan.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Kembali
                            </a>

                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('perizinan.update', $perizinan->id) }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')


                                        <div class="alert alert-info" role="alert">
                                            (*) Hanya Opsional
                                        </div>

                                        <div class="mb-3">
                                            <label for="tgl_keluar" class="form-label">Tanggal Keluar <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            <input type="date" name="tgl_keluar" class="form-control"
                                                value="{{ old('tgl_keluar') ? old('tgl_keluar') : $perizinan->tgl_keluar }}"
                                                id="tgl_keluar">

                                        </div>

                                        <div class="mb-3">
                                            <label for="jam_keluar" class="form-label">Jam Keluar <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            <input type="time" name="jam_keluar" class="form-control"
                                                value="{{ old('jam_keluar') ? old('jam_keluar') : $perizinan->jam_keluar }}"
                                                id="jam_keluar">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Tanggal Masuk <sup
                                                    class="text-secondary" font-size="20px">* </sup></label>
                                            <input type="date" name="tgl_masuk" class="form-control"
                                                value="{{ old('tgl_masuk') ? old('tgl_masuk') : $perizinan->tgl_masuk }}"
                                                id="tgl_masuk">
                                        </div>

                                        <div class="mb-3">
                                            <label for="jam_masuk" class="form-label">Jam Masuk <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="time" name="jam_masuk" class="form-control"
                                                value="{{ old('jam_masuk') ? old('jam_masuk') : $perizinan->jam_masuk }}"
                                                id="jam_masuk">
                                        </div>

                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status <sup class="text-secondary"
                                                    font-size="20px">* </sup></label>
                                            <select name="status" id="status" type="text" class="form-control"
                                                aria-describedby="">
                                                <@if ($perizinan->status == 'Aktif')
                                                    <option value="Non Aktif">Non Aktif</option>
                                                    <option value="{{ $perizinan->status }}" selected>Aktif</option>
                                                @elseif ($perizinan->status == 'Non Aktif')
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="{{ $perizinan->status }}" selected>Non Aktif</option>
                                                @else
                                                    <option value="Aktif">Aktif</option>
                                                    <option value="Non Aktif">Non Aktif</option>
                                                    @endif
                                            </select>
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Update
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
