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


                            <h5 class="card-title fw-semibold mb-5 text-center">Data Aprovel</h5>

                            <!-- <a class="btn btn-secondary m-1 mb-3" href="/add-aprovel">
                                <i class="fa-solid fa-plus"></i>&nbsp;Tambah Aprovel
                            </a> -->




                            {{-- <form method="GET" class="input-group mb-3">


                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;
                                        Search Data</span>
                                    <input type="text" class="form-control"
                                        placeholder="Pencarian Data [Ketik Data + (Enter)]  -  Reset Pencarian [Hapus Data + (Enter)]"
                                        aria-label="" aria-describedby="cari" name="cari" id="cari"
                                        value="">


                                </div>


                            </form>


                            <div class="alert alert-secondary text-primary" role="alert">
                                Kata Kunci Pencarian : Nama
                            </div> --}}



                            <div class="card">
                                <div class="card-body">
                                    <form>

                                        <div class="table-responsive" id="no-more-tables">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center">No</th>
                                                        <th scope="col">Nama</th>
                                                        <th scope="col">Kelas</th>
                                                        <th scope="col">Kamar</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    @php $no = 1 @endphp
                                                    @foreach ($mahasantris as $mahasantri)
                                                        <tr>
                                                            <td scope="row" data-title="No" class="text-center">
                                                                {{ $no++ }}</td>
                                                            <td data-title="Nama">{{ $mahasantri->nama }}</td>
                                                            <td data-title="Kelas">{{ $mahasantri->kelas }}</td>
                                                            <td data-title="Kamar">{{ $mahasantri->kamar }}</td>
                                                            <td data-title="Kamar">
                                                                @if ($mahasantri->status_akun == 0)
                                                                    <i class="fa-solid fa-xmark" style="color: #ea0606;
                                                                    font-size: 2rem; text-align: center;"></i>
                                                                @else
                                                                    <i class="fa-solid fa-check" style="color: #82d616;
                                                                    font-size: 2rem; text-align: center;"></i>
                                                                @endif
                                                            </td>
                                                            <th class="d-flex justify-content-center">
                                                                @if ($mahasantri->status_akun == 0)
                                                                    <a class="btn btn-primary btn-sm me-2"
                                                                        href="{{ url('admin/approval/approve/'.$mahasantri->id) }}">
                                                                        <i class="fa-solid fa-check"></i> Ya, Diizinkan
                                                                    </a>
                                                                @else
                                                                    <a class="btn btn-danger btn-sm me-2"
                                                                        href="{{ url('admin/approval/non-approve/'.$mahasantri->id) }}">
                                                                        <i class="fa-solid fa-xmark"></i> Tidak Diizinkan
                                                                    </a>
                                                                @endif
                                                            </th>
                                                        </tr>
                                                    @endforeach
                                                </tbody>

                                            </table>

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
