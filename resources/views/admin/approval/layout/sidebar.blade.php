<!-- Sidebar Start -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="" class="text-nowrap logo-img mt-3">
          <img src="{{asset('icon/Petik_YBM2.png')}}" class="rounded mx-auto d-block" width="180" alt="">
        </a>
        <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
          <i class="ti ti-x fs-8"></i>
        </div>
      </div>
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
        <ul id="sidebarnav">
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Home</span>
          </li>

          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin" aria-expanded="false">
              <span>
                <i class="ti ti-layout-dashboard"></i>
              </span>
              <span class="hide-menu">Dashboard</span>
            </a>
          </li>

          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Global</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('manage-user.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-article"></i>
              </span>
              <span class="hide-menu">Manage Users</span>
            </a>
          </li>
          
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('perizinan.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-file-description"></i>
              </span>
              <span class="hide-menu">Perizinan</span>
            </a>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('detail-perizinan.index') }}" aria-expanded="false">
              <span>
                <i class="ti ti-cards"></i>
              </span>
              <span class="hide-menu">Detail Info Izin</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Aprovel</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('approval.index') }}" aria-expanded="false">
              <span>
                <i class="fa-solid fa-user-shield fa-3"></i>
              </span>
              <span class="hide-menu">Hak Perizinan</span>
            </a>
          </li>
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Data Pelengkap</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link" href="{{ route('admin.editPass') }}" aria-expanded="false">
              <span>
                
                <i class="ti ti-layout fa-pen-to-square"></i>
              </span>
              <span class="hide-menu">Ubah Sandi</span>
            </a>
          </li>
          
          
          
        {{-- <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title me-3">
              <h6 class="fw-semibold fs-4 mb-6 text-dark w-85 mt-3">ResikRek Application</h6>
              
            </div>
            <div class="unlimited-access-img">
              <img src="{{asset('Templeate/src/assets/images/backgrounds/rocket.png')}}" alt="" class="img-fluid">
            </div>
          </div>
        </div> --}}

        <div class="unlimited-access hide-menu position-relative mb-7 mt-5 rounded">
          <div class="d-flex">
            <div class="unlimited-access-title me-3">
              <h6 class="fw-semibold fs-4 mb-6 text-dark w-85 mt-3">Perizinan 
                Application</h6>
              
            </div>
            <div class="unlimited-access-img">
              {{-- <img src="{{asset('Templeate/src/assets/images/backgrounds/rocket.png')}}" alt="" class="img-fluid"> --}}
              &nbsp;<img src="{{asset('Templeate - 2/Undraw1.svg')}}" alt="" height="210px" width="160px" class="img-fluid position-relative">
              {{-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js">
              </script>
              <lottie-player src="{{asset('Templeate - 2/Jet.json')}}"
                  background="transparent" speed="2" height="50px" width="50px" class="text-center" loop autoplay>
              </lottie-player> --}}
              
            </div>
          </div>
        </div>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
  <!--  Sidebar End -->