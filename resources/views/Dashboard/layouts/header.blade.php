<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

<div class="d-flex align-items-center justify-content-between">
  
  <a class="navbar-brand fs-4" href="#page-top">Cour<span style="color : red">sate</span></a> 
    <span class="d-none d-lg-block"></span>
  </a>
  <i class="bi bi-list toggle-sidebar-btn"></i>
</div><!-- End Logo -->



<nav class="header-nav ms-auto">
  <ul class="d-flex align-items-center">

    <li class="nav-item d-block d-lg-none">
      <a class="nav-link nav-icon search-bar-toggle " href="#">
        <i class="bi bi-search"></i>
      </a>
    </li><!-- End Search Icon-->





    <li class="nav-item dropdown pe-3">

      <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">

        <span class="d-none d-md-block dropdown-toggle ps-2 fs-5">{{ Auth::user()->name }}</span>
      </a><!-- End Profile Iamge Icon -->

      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" dir="rtl">
        <li class="dropdown-header">
          <h6>{{ Auth::user()->name }}</h6>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>

        <li>
          <a class="dropdown-item d-flex align-items-center" href="{{route('profile.edit')}}">
            <i class="bi bi-person"></i>
              <span>الحساب الشخصي</span>
          </a>
        </li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <a class="nav-link text-center" :href="route('logout')"
                    onclick="event.preventDefault();
                                this.closest('form').submit();">
                {{ __('Log Out') }}
           </a>
        </form>
          
        </li>

      </ul><!-- End Profile Dropdown Items -->
    </li><!-- End Profile Nav -->

  </ul>
</nav><!-- End Icons Navigation -->

</header><!-- End Header -->
<!--Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true" dir="rtl">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">تسجيل الخروج</h5>
            </div>
            <div class="modal-body">
                هل أنت متأكد من تسجيل الخروج؟
            </div>
            <div class="modal-footer">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
                    <button onclick=" this.closest('form').submit();" href="{{route('logout')}}" class="btn btn-warning">تسجيل الخروج</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Logout Modal -->
