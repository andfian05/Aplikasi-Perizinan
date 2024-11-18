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


                            <h5 class="card-title fw-semibold mb-5 text-center">Data Perizinan</h5>

                            <a class="btn btn-secondary m-1 mb-3" href="{{ route('perizinan.create') }}">
                                <i class="fa-solid fa-plus"></i>&nbsp;Tambah Perizinan
                            </a>
                            <!-- <a class="btn btn-danger m-1 mb-3" href="">
                                <i class="fa-solid fa-file-pdf"></i>&nbsp; PDF
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
                                Kata Kunci Pencarian : Status
                            </div> --}}



                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="table-responsive" id="no-more-tables">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center">No</th>
                                                        <th scope="col">Tgl.Keluar</th>
                                                        <th scope="col">Jam.Keluar</th>
                                                        <th scope="col">Tgl.Masuk</th>
                                                        <th scope="col">Jam.Masuk</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    @php $no = 1 + (($perizinans->currentPage()-1) * $perizinans->perPage()); @endphp
                                                    @foreach ($perizinans as $perizinan)
                                                        <tr>
                                                            <td scope="row" data-title="No" class="text-center">
                                                                {{ $no++ }}</td>
                                                            <td data-title="Tgl.Keluar">
                                                                {{ date('j F Y', strtotime($perizinan->tgl_keluar)) }}
                                                            </td>
                                                            <td data-title="Jam.Keluar">
                                                                {{ date('H:i', strtotime($perizinan->jam_keluar)) }}
                                                            </td>
                                                            <td data-title="Tgl.Masuk">
                                                                {{ date('j F Y', strtotime($perizinan->tgl_masuk)) }}
                                                            </td>
                                                            <td data-title="Jam.Masuk">
                                                                {{ date('H:i', strtotime($perizinan->jam_masuk)) }}</td>
                                                            <td data-title="Status">
                                                                @if ($perizinan->status_perizinan == 0)
                                                                    <i class="fa-solid fa-xmark"
                                                                        style="color: #ea0606;
                                                                    font-size: 2rem;"></i>
                                                                @else
                                                                    <i class="fa-solid fa-check"
                                                                        style="color: #82d616;
                                                                    font-size: 2rem;"></i>
                                                                @endif
                                                            </td>
                                                            <th class="d-flex justify-content-center">
                                                                @if ($perizinan->status_perizinan == 0)
                                                                    <form
                                                                        action="{{ route('perizinan.active', $perizinan->id) }}"
                                                                        method="post">
                                                                        <input type="hidden"
                                                                            value="{{ $perizinan->id }}" name="id">
                                                                        @csrf
                                                                        <button class="btn btn-sm me-2"
                                                                            style="background-color: #17c1e8;">
                                                                            <i class="text-light"
                                                                                style="font-size: .8rem;">Aktifkan</i>
                                                                        </button>
                                                                    </form>
                                                                @else
                                                                @endif
                                                                <a class="btn btn-primary btn-sm me-2"
                                                                    href="{{ route('perizinan.show', $perizinan->id) }}"><i
                                                                        class="fa-sharp fa-solid fa-magnifying-glass"></i>
                                                                    Detail</a>
                                                                <form method="POST"
                                                                    action="{{ route('perizinan.destroy', $perizinan->id) }}"
                                                                    style="display: inline-block;">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger btn-sm"
                                                                        onclick="return confirm('Delete?')"><i
                                                                            class="fa-solid fa-trash"></i>
                                                                        Delete</button>
                                                                </form>
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
