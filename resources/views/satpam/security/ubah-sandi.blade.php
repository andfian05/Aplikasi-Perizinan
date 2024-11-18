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



                            <h5 class="card-title fw-semibold mb-5 text-center">Ubah Sandi</h5>
                            
                            <div class="card">
                                <div class="card-body">
                                    <form action="" method="POST" id="form1" name="form1" enctype="multipart/form-data">
                                        @csrf

                                        <div class="alert alert-danger" role="alert">
                                            (*) Jika Diperlukan
                                        </div>

                                       
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password <sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password Baru<sup class="text-danger"
                                                    font-size="20px">* </sup></label>
                                            <input type="password" name="password" class="form-control" id="password"
                                                required>
                                        </div>
                                       

                                       

                                        

                                        


                                        <br>
                                        <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-2">Ubah Sandi</button>
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
    @include('satpam.security.layout.footer')


</body>

</html>
