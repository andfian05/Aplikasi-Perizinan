@extends('mahasantri.layout.index')
@section('content')

<body>
    <main>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand me-lg-5 me-0" href="index.html">
                    <img src="{{asset('icon/PeTIK Jombang Putih.png')}}" class="logo-image img-fluid"
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
                            <h4 class="section-title">Input Keterangan Izin</h4>
                        </div>

                        <form action="{{ route('mahasantri.storeIzin') }}" method="POST" class="custom-form contact-form" role="form">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="namalengkap" id="namalengkap" class="form-control"
                                            placeholder="Nama Lengkap" value="{{ $mahasantri->nama }}" disabled>
                                        <label for="floatingInput">Nama Lengkap</label>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="kamar" id="kamar" pattern="[^ @]*@[^ @]*"
                                            class="form-control" placeholder="Kamar" value="{{ $mahasantri->kamar }}" disabled>
                                        <label for="floatingInput">Kamar</label>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-12">
                                    <div class="form-floating">
                                        <input type="text" name="kelas" id="kelas" class="form-control"
                                            placeholder="Kelas" value="{{ $mahasantri->kelas }}" disabled>
                                        <label for="floatingInput">Kelas</label>
                                    </div>

                                    <div class="form-floating">
                                        <textarea class="form-control" id="keterangan" name="keterangan"
                                            placeholder="Keterangan Izin"></textarea>
                                        <label for="floatingTextarea">Keterangan Izin</label>
                                    </div>
                                </div>

                                <div class="text-center mb-3 pb-2">
                                    <button type="submit" class="btn custom-btn smoothscroll mt-3">Kirim Data</button>
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
