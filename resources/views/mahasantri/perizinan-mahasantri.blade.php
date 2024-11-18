@extends('mahasantri.layout.index')
@section('content')

    <body>
        <main>
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand me-lg-5 me-0" href="index.html">
                        <img src="{{ asset('icon/PeTIK Jombang Putih.png') }}" class="logo-image img-fluid"
                            alt="Perizinan Mahasantri">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-auto">
                            <div class="ms-4 mb-2">
                                <a href="{{ route('mahasantri.editPass') }}" class="btn custom-btn custom-border-btn smoothscroll">Ubah
                                    Sandi</a>
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

            <section class="contact-section section-padding pt-0" id="section_2">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-12 mx-auto">
                            <div class="section-title-wrap mb-5">
                                <h4 class="section-title">Informasi Izin</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 mb-4 mb-lg-0">
                            <div class="custom-block d-flex">
                                <div class="">
                                    <div class="custom-block-icon-wrap">
                                        <div class="section-overlay"></div>
                                    </div>
                                </div>
                                <div class="custom-block-info">
                                    <h5 class="mb-5">
                                        <a href="#">
                                            Tanggal Keluar
                                        </a>
                                    </h5>
                                    <p class="mb-0">
                                        @empty($status)
                                            Belum Melakukan Perizinan, Silakan Lapor
                                        @else
                                            {{-- {{ $status->tgl_keluar }} --}}
                                            {{ date('F j, Y', strtotime($status->tgl_keluar)) }},
                                            {{ date('g:i a', strtotime($status->jam_keluar)) }}
                                        @endempty
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="custom-block d-flex">
                                <div class="">
                                    <div class="custom-block-icon-wrap">
                                        <div class="section-overlay"></div>
                                    </div>
                                </div>
                                <div class="custom-block-info">
                                    <h5 class="mb-5">
                                        <a href="#">
                                            Tanggal Masuk
                                        </a>
                                    </h5>
                                    <p class="mb-0">
                                        @empty($status)
                                            Belum Melakukan Perizinan, Silakan Lapor
                                        @else
                                            {{ date('F j, Y', strtotime($status->tgl_masuk)) }},
                                            {{ date('g:i a', strtotime($status->jam_masuk)) }}
                                        @endempty
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="text-center mb-3 pb-2">
                <a href="{{ route('mahasantri.createIzin') }}" class="btn custom-btn smoothscroll mt-3">Mengisi Keterangan Izin</a>
            </div>
            <br><br>
        </main>
    @endsection
