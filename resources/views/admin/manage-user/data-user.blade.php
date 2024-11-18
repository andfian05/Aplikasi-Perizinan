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
                            <h5 class="card-title fw-semibold mb-5 text-center">Data Pengguna</h5>
                            <a class="btn btn-secondary m-1 mb-3" href="{{ route('manage-user.create') }}">
                                <i class="fa-solid fa-plus"></i>&nbsp;Tambah Pengguna
                            </a>
                            <a class="btn btn-danger m-1 mb-3" href="{{ route('manage-user.pdf') }}">
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
                            </form> --}}


                            {{-- <div class="alert alert-secondary text-primary" role="alert">
                                Kata Kunci Pencarian : Nama, dan Role
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
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Role</th>
                                                        <th scope="col" class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    @php $no = 1 + (($users->currentPage()-1) * $users->perPage()); @endphp
                                                    @foreach ($users as $user)
                                                        <tr>
                                                            <td scope="row" data-title="No" class="text-center">
                                                                {{ $no++ }}</td>
                                                            <td data-title="Nama">{{ $user->nama }}</td>
                                                            <td data-title="Username">{{ $user->username }}</td>
                                                            <td data-title="Email">{{ $user->email }}</td>
                                                            <td data-title="Role">{{ $user->role }}</td>
                                                            <th class="d-flex justify-content-center">
                                                                <a class="btn btn-primary btn-sm me-2"
                                                                    href="{{ route('manage-user.show', $user->id) }}"><i
                                                                        class="fa-sharp fa-solid fa-magnifying-glass"></i>
                                                                    Detail</a>
                                                                <a class="btn btn-success btn-sm me-2"
                                                                    href="{{ route('manage-user.edit', $user->id) }}"><i
                                                                        class="fa-solid fa-pencil"></i>
                                                                    Update</a>
                                                                <form method="POST"
                                                                    action="{{ route('manage-user.destroy', $user->id) }}"
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
