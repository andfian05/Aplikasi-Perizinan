@extends('mahasantri.layout.index')
@section('content')

    <body>
        <main>

            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand me-lg-5 me-0" href="index.html">
                        <img src="{{ asset('icon/PeTIK Jombang Putih.png') }}" class="logo-image img-fluid"
                            alt="Perizinan Mahasantri" width="200px" height="200px">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <div class="ms-4 mb-2">
                                <a href="{{ route('mahasantri.perizinan') }}" class="btn custom-btn custom-border-btn smoothscroll">Kembali</a>
                            </div>
                            <div class="ms-4">
                                <a href="#" role="button" class="btn custom-btn custom-border-btn smoothscroll"
                                    onclick="event.preventDefault(); document.getElementById('logout').submit()">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout" action="{{ route('logout') }}" method="post" style="display: none;">
                                    @csrf</form>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>


            <section class="hero-section">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-12">
                            <div class="text-center mb-5 pb-2">
                                <h1 class="text-white mb-6 mt-5" style="margin-bottom: 9.5rem">Perizinan Mahasantri</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="contact-section section-padding pt-0">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Ubah Sandi</h4>
                            </div>
                            <div class="alert alert-danger" role="alert">
                                (*) Jika Diperlukan
                            </div>

                            <form action="{{ route('mahasantri.updatePass') }}" method="POST" class="custom-form contact-form" role="form">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="form-floating">
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Password" value="{{ $mahasantri->password }}" disabled>
                                            <label for="floatingInput">Password Lama <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password_baru" name="password_baru" id="password_baru" class="form-control"
                                                placeholder="Password_Baru" required>
                                            <label for="floatingInput">Password Baru <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                        </div>
                                    </div>
                                    <div class="text-center mb-3 pb-2">
                                        <button type="submit" class="btn custom-btn smoothscroll mt-3">Simpan
                                            Perubahan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <br><br>

        </main>
    @endsection
