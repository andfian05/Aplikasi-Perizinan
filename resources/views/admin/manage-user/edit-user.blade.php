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
                            <h5 class="card-title fw-semibold mb-5 text-center">Edit Pengguna</h5>
                            <a class="btn btn-success btn-sm-2 mb-3" href="{{ route('manage-user.index') }}">
                                <i class="fa-solid fa-circle-chevron-left"></i>&nbsp;Kembali
                            </a>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('manage-user.update', $user->id) }}" method="POST"
                                        id="form1" name="form1" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <div class="alert alert-info" role="alert">
                                            (*) Hanya Opsional
                                        </div>
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama <sup class="text-primary"
                                                    font-size="20px">* </sup></label>
                                            <input type="text" name="nama" class="form-control" id="nama"
                                                value="{{ old('nama') ? old('nama') : $user->nama }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username <sup class="text-primary"
                                                    font-size="20px">* </sup></label>
                                            <input type="text" name="username" class="form-control" id="username"
                                                value="{{ old('username') ? old('username') : $user->username }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password <sup class="text-primary"
                                                    font-size="20px">* </sup></label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                value="{{ old('password') ? old('password') : $user->password }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email <sup class="text-primary"
                                                    font-size="20px">* </sup></label>
                                            <input type="email" name="email" class="form-control" id="email"
                                                value="{{ old('email') ? old('email') : $user->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Pemangku Kepentingan <sup
                                                    class="text-danger" font-size="20px">* </sup></label>
                                            <select name="role" id="role" type="text" class="form-control"
                                                required onclick="show()">
                                                @foreach ($roles as $role)
                                                    @if ($user->role == $role)
                                                        <option value="{{ $role }}" selected>{{ $role }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $role }}">{{ $role }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>

                                        @if ($user->role == 'Mahasantri')
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Angkatan <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="text" name="angkatan" value="{{   old('angkatan') ? old('angkatan') : $mahasantri->angkatan   }}" class="form-control" id="angkatan" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas <sup
                                                    class="text-danger" font-size="20px">* </sup></label>
                                            <select name="kelas" id="kelas" type="text" class="form-control" required>
                                                @if ($mahasantri->kelas == "DM")
                                                    <option value="{{ $mahasantri->kelas }}" selected>Digital Marketing</option>
                                                    <option value="PPL">Pengembangan Perangkat Lunak</option>
                                                @elseif ($mahasantri->kelas == "PPL")
                                                    <option value="DM">Digital Marketing</option>
                                                    <option value="{{ $mahasantri->kelas }}" selected>Pengembangan Perangkat Lunak</option>
                                                @else
                                                    <option value="DM">Digital Marketing</option>
                                                    <option value="PPL">Pengembangan Perangkat Lunak</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="kamar" class="form-label">Kamar <sup
                                                    class="text-danger" font-size="20px">* </sup></label>
                                            <select name="kamar" id="kamar" type="text" class="form-control" required>
                                                @if ($mahasantri->kamar != NULL)
                                                    <option value="{{ $mahasantri->kamar }}" selected>{{ $kmhs }}</option>
                                                    @foreach ($kamars as $kamar)
                                                        <option value="{{ $kamar['val'] }}">{{ $kamar['ket'] }}</option>
                                                    @endforeach
                                                @else
                                                    @foreach ($kamars as $kamar)
                                                        <option value="{{ $kamar['val'] }}">{{ $kamar['ket'] }}</option>
                                                    @endforeach
                                                @endif
                                            </select>
                                        </div>
                                        @endif

                                        <div class="mb-3">
                                            <label for="foto" class="form-label">Foto <sup class="text-primary"
                                                    font-size="20px">* </sup></label>
                                            <input type="file" name="photo" class="form-control" id="foto"
                                                value="{{ old('photo') ? old('photo') : $user->photo }}">

                                            @empty($user->photo)
                                                <img class="mt-2 img-circle elevation-2 img-thumbnail shadow-lg"
                                                    src="{{ asset('img/profile/no-photo.png') }}"
                                                    alt="{{ $user->username }}" width="10%">
                                            @else
                                                <img class="mt-2 img-circle elevation-2 img-thumbnail shadow-lg"
                                                    src="{{ asset('img/profile') }}/{{ $user->photo }}"
                                                    alt="{{ $user->username }}" width="10%">
                                            @endempty
                                        </div>

                                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Update
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
