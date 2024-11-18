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
                @include('admin.manage-user.layout.navbar')
            </header>

            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-5 text-center">Data Informasi Izin</h5>
                            <a class="btn btn-danger m-1 mb-3" href="{{ route('detail-perizinan.pdf') }}">
                                <i class="fa-solid fa-file-pdf"></i>&nbsp; PDF
                            </a>

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
                                Kata Kunci Pencarian :
                            </div> --}}

                            <div class="card">
                                <div class="card-body">
                                    <form>
                                        <div class="table-responsive" id="no-more-tables">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" class="text-center">No</th>
                                                        <th scope="col">Nama Lengkap</th>
                                                        <th scope="col">Tanggal & Jam Kedatangan Mahasantri</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    @php $no = 1 + (($detail_perizinans->currentPage()-1) * $detail_perizinans->perPage()); @endphp
                                                    @foreach ($detail_perizinans as $detail_perizinan)
                                                        <tr>
                                                            <td scope="row" data-title="No" class="text-center">
                                                                {{ $no++ }}</td>
                                                            <td data-title="Nama">
                                                                {{ $detail_perizinan->mahasantri['nama'] }}</td>
                                                            <td data-title="Jam.Masuk">
                                                                {{ date('j F Y, H:i', strtotime($detail_perizinan->updated_at)) }}
                                                            </td>
                                                            <td data-title="Status">
                                                                @php
                                                                    $jam = date('H:i:s', strtotime($detail_perizinan->updated_at));
                                                                    $tanggal = date('j n Y', strtotime($detail_perizinan->updated_at));
                                                                    $tanggal_masuk = date('j n Y', strtotime($detail_perizinan->tanggal_masuk));
                                                                @endphp
                                                                @if ($tanggal_masuk >= $tanggal && $detail_perizinan->waktu_masuk >= $jam)
                                                                    <button class="btn btn-sm"
                                                                        style="background-color: #17e828;">
                                                                        <i class="text-light"
                                                                            style="font-size: .8rem;">Hadir</i>
                                                                    </button>
                                                                @else
                                                                    <button class="btn btn-sm"
                                                                        style="background-color: #e81717;">
                                                                        <i class="text-light"
                                                                            style="font-size: .8rem;">Terlambat</i>
                                                                    </button>
                                                                @endif
                                                            </td>
                                                            <th class="d-flex justify-content-center">
                                                                <a class="btn btn-primary btn-sm me-2"
                                                                    href="{{ route('detail-perizinan.show', $detail_perizinan->id) }}"><i
                                                                        class="fa-sharp fa-solid fa-magnifying-glass"></i>
                                                                    Detail</a>
                                                                <form method="POST"
                                                                    action="{{ route('detail-perizinan.destroy', $detail_perizinan->id) }}"
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
                                            {!! $detail_perizinans->appends(Request::except('page'))->render() !!}
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
