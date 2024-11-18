<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('satpam.security.layout.header')

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">


        {{-- Sidebar.blade.php --}}
        @include('satpam.security.layout.sidebar')



        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                {{-- Navbar.blade.php --}}
                @include('satpam.security.layout.navbar')
            </header>


            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">


                            <h5 class="card-title fw-semibold mb-5 text-center">Data Pelapor</h5>










                            <div class="container-fluid">
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="card-body">

                                            <!-- <div class="alert alert-secondary text-primary" role="alert">
                                                Kata Kunci Pencarian :
                                            </div> -->

                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="card">
                                                        <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                           
                                                            <p class="card-text">Nama Mahasantri</p>
                                                            <a href="#" class="btn btn-primary">Terima Laporan</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="card">
                                                        <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            
                                                            <p class="card-text">Nama Mahasantri</p>
                                                            <a href="#" class="btn btn-primary">Terima Laporan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            
                                                            <p class="card-text">Nama Mahasantri</p>
                                                            <a href="#" class="btn btn-primary">Terima Laporan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">

                                                    <div class="card">
                                                        <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            
                                                            <p class="card-text">Nama Mahasantri</p>
                                                            <a href="#" class="btn btn-primary">Terima Laporan</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="card">
                                                        <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            
                                                            <p class="card-text">Nama Mahasantri</p>
                                                            <a href="#" class="btn btn-primary">Terima Laporan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <img src="{{asset('Templeate/src/assets/images/profile/user-1.jpg')}}"
                                                            class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            
                                                            <p class="card-text">Nama Mahasantri</p>
                                                            <a href="#" class="btn btn-primary">Terima Laporan</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            



                        </div>
                    </div>
                </div>
            </div>







        </div>
    </div>


    {{-- Footer.blade.php --}}
    @include('satpam.security.layout.footer')


</body>

</html>
