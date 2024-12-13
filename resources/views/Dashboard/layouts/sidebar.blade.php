  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" >

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" >
        <a class="nav-link" href="#">
          <i class="bi bi-grid"></i>
          <span>لوحة التحكم</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">

      <a class="nav-link collapsed" data-bs-target="#users-nav" data-bs-toggle="collapse" href="#" >
      <i class="bi bi-person-raised-hand"></i>  
        <span>الطلاب</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="users-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('students.index')}}">
              <i class="bi bi-circle"></i><span>عرض الطلاب</span>
            </a>
          </li>
          <li>
            <a href="{{route('students.create')}}">
              <i class="bi bi-circle"></i><span>إضافة طالب</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#banners-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-person-lines-fill"></i><span>المدربين</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="banners-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('trainers.index')}}">
              <i class="bi bi-circle"></i><span>عرض المدربين</span>
            </a>
          </li>
          <li>
            <a href="{{route('trainers.create')}}">
              <i class="bi bi-circle"></i><span>إضافة  مدرب</span>
            </a>
          </li>
        
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#stores-nav" data-bs-toggle="collapse" href="">
        <i class="bi bi-duffle-fill"></i><span>قوائم الكورسات </span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="stores-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{route('courses.index')}}">
              <i class="bi bi-circle"></i><span>عرض القوائم</span>
            </a>
          </li>
          <li>
            <a href="{{route('courses.create')}}">
              <i class="bi bi-circle"></i><span> إضافة قائمة</span>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#products-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-code-slash"></i></i><span>الدروس</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="products-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('lessons.index')}}">
              <i class="bi bi-circle"></i><span>عرض الدروس </span>
            </a>
          </li>
          <li>
            <a href="{{route('lessons.create')}}">
              <i class="bi bi-circle"></i><span>إضافة درس</span>
            </a>
          </li>
          
        </ul>
      </li>
   
    </ul>

  </aside><!-- End Sidebar-->
