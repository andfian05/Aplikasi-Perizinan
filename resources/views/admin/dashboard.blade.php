<!doctype html>
<html lang="en">

{{-- Header.blade.php --}}
@include('admin.layout.header')


<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">


        {{-- Sidebar.blade.php --}}
        @include('admin.layout.sidebar')

        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                {{-- Navbar.blade.php --}}
                @include('admin.layout.navbar')
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <!--  Row 1 -->
                <div class="row">
                    <div class="col-lg-8 col-12 mx-auto">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="card overflow-hidden">
                                    <div class="card-body p-4">
                                        <h5 class="card-title mb-9 fw-semibold">Manage Users</h5>
                                        <div class="row align-items-center">
                                            <div class="col-8">

                                                <div class="d-flex align-items-center mb-3">
                                                    <span
                                                        class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-arrow-up-left text-success"></i>
                                                    </span>
                                                    <p class="text-dark me-1 fs-3 mb-0">
                                                        @if ($user == '')
                                                            0
                                                        @else
                                                            {{ $user }}
                                                        @endif
                                                    </p>
                                                    <p class="fs-3 mb-0">Pengguna</p>
                                                </div>
                                                <div class="d-flex align-items-center">

                                                </div>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <!-- Monthly Earnings -->


                                <div class="card overflow-hidden">
                                    <div class="card-body p-4">
                                        <h5 class="card-title mb-9 fw-semibold">Perizinan</h5>
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span
                                                        class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-arrow-up-left text-success"></i>
                                                    </span>
                                                    <p class="text-dark me-1 fs-3 mb-0">
                                                        @if ($perizinan == '')
                                                            0
                                                        @else
                                                            {{ $perizinan }}
                                                        @endif
                                                    </p>
                                                    <p class="fs-3 mb-0">Data</p>
                                                </div>
                                                <div class="d-flex align-items-center">

                                                </div>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card overflow-hidden">
                                    <div class="card-body p-4">
                                        <h5 class="card-title mb-9 fw-semibold">Detail Info Izin </h5>
                                        <div class="row align-items-center">
                                            <div class="col-8">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span
                                                        class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                                                        <i class="ti ti-arrow-up-left text-success"></i>
                                                    </span>
                                                    <p class="text-dark me-1 fs-3 mb-0">
                                                        @if ($detail_perizinan == '')
                                                            0
                                                        @else
                                                            {{ $detail_perizinan }}
                                                        @endif
                                                    </p>
                                                    <p class="fs-3 mb-0">Responden</p>
                                                </div>
                                                <div class="d-flex align-items-center">

                                                </div>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>




                {{-- <div class="row">
          <div class="col-sm-6 col-xl-3">
            <div class="card overflow-hidden rounded-2">
              <div class="position-relative">
                <a href="javascript:void(0)"><img src="{{asset('Templeate/src/assets/images/products/s4.jpg')}}"
                class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)"
                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                        class="ti ti-basket fs-4"></i></a>
            </div>
            <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Boat Headphone</h6>
                <div class="d-flex align-items-center justify-content-between">


                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
                <a href="javascript:void(0)"><img src="{{asset('Templeate/src/assets/images/products/s5.jpg')}}"
                        class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)"
                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                        class="ti ti-basket fs-4"></i></a> </div>
            <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">MacBook Air Pro</h6>
                <div class="d-flex align-items-center justify-content-between">


                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
                <a href="javascript:void(0)"><img src="{{asset('Templeate/src/assets/images/products/s7.jpg')}}"
                        class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)"
                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                        class="ti ti-basket fs-4"></i></a> </div>
            <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Red Valvet Dress</h6>
                <div class="d-flex align-items-center justify-content-between">


                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="card overflow-hidden rounded-2">
            <div class="position-relative">
                <a href="javascript:void(0)"><img src="{{asset('Templeate/src/assets/images/products/s11.jpg')}}"
                        class="card-img-top rounded-0" alt="..."></a>
                <a href="javascript:void(0)"
                    class="bg-primary rounded-circle p-2 text-white d-inline-flex position-absolute bottom-0 end-0 mb-n3 me-3"
                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Add To Cart"><i
                        class="ti ti-basket fs-4"></i></a> </div>
            <div class="card-body pt-3 p-4">
                <h6 class="fw-semibold fs-4">Cute Soft Teddybear</h6>
                <div class="d-flex align-items-center justify-content-between">


                </div>
            </div>
        </div>
    </div>
    </div> --}}
                <div class="py-6 px-6 text-center">
                    <p class="mb-0 fs-4">Design and Developed by <a href="https://www.linkedin.com/in/fianfi/" target="_blank"
                            class="pe-1 text-primary text-decoration-underline">Andika Alifian</a></p>
                </div>
            </div>
        </div>
    </div>



    {{-- Footer.blade.php --}}
    @include('admin.layout.footer')


</body>

</html>
