<!doctype html>
<html lang="en" data-bs-theme="auto" dir="rtl">
<head>
    <script src="js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Template</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/starter-template/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
   
    <link href="{{asset('Webasesst/dist/css/bootstrap.min.css')}}" rel="stylesheet" />
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
    </style>
</head>
<body>
<div class="col-lg-8 mx-auto p-4 py-md-5">
    <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
        <a class="navbar-brand fs-4" href="#page-top">Cour<span style="color: red">sate</span></a>
    </header>
    <h2 class="m-5">تفاصيل الكورس</h2>
    <main>
       
        <div class="mb-3">
            <div class="">
                <img src="{{ Storage::url($catigory->image) }}" class="card-img-top" alt="...">
                
            </div>
        </div>
        <h3 class="text-body-emphasis "><i class="bi bi-briefcase-fill px-2"></i>الأختصاص:{{$catigory->name}}</h3>
        <h3><i class="bi bi-person-circle px-2"></i>المدرب:{{$catigory->trainer->name}}</h3>
        <h3> <i class="bi bi-clock-history px-2"></i>المدة:{{$catigory->duration}}</h3>
        <h3><i class="bi bi-card-text px-2"></i>Description:</h3>
        <p class="fs-5 col-md-8">كتابة التفاصيل :{{$catigory->description}}</p>
        
        <div class="container-fulid border-top m-5 pt-5">
          <h3 class="text-center">الدروس</h3>
          <div class="row">
            @foreach ($lessons as $lesson)
                
            @endforeach
            <div class="card m-5" style="width: 18rem;">
              <img src="{{ Storage::url($lesson->image) }}" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> {{$lesson->name}}</h5>
                <p class="card-text">{{$lesson->description}}.</p>
                
              </div>
            </div>
         
            </div>
          </div>
              </div>
    </main>
   
    <footer class="pt-5 my-5 text-body-secondary border-top">

    </footer>
</div>
<script src="{{asset('Webasesst/dist/js/bootstrap.bundle.min.js')}}"></script>


</body>
</html>
