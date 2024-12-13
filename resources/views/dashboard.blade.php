<!doctype html>
<html lang="ar" dir="rtl" data-bs-theme="auto">

  <head>

  <script src="{{asset('Webasesst/js/color-modes.js')}}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>     Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel-rtl/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="{{asset('Webasesst/dist/css/bootstrap.rtl.min.css')}}" rel="stylesheet" />


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

    
    <!-- Custom styles for this template -->
    <link href="{{asset('Webasesst/dist/css/carousel.rtl.css')}}" rel="stylesheet" />
   
  </head>
  <body>
 
  

      
<header data-bs-theme="dark">
  <nav class="navbar navbar-expand-md navbar-dark fixed-top  bg-dark border-bottom border-body">
   


    <div class="container-fluid text-dark">
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="تبديل التنقل">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
       
        <button class="btn btn-primary" style=" direction: none;">
  <form method="POST" action="{{ route('logout') }}">
    @csrf

    <x-responsive-nav-link :href="route('logout')"
            onclick="event.preventDefault();
                        this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-responsive-nav-link>
</form>
  </button>
      
       
      </div>
      <a class="navbar-brand text-center fs-4" href="#page-top">Cour<span style="color : red">sate</span></a> 
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('Webasesst/image/3.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" aria-hidden="true" focusable="false">
        
        <div class="container">
          <div class="carousel-caption text-start text-white">
            <h1>هندسة البرمجيات.</h1>
            <p class="opacity-75">تعلم أفضل الممارسات في هندسة البرمجيات من خلال دوراتنا التي تغطي تطوير البرمجيات، وإدارة المشاريع، واختبار البرمجيات، مما يمنحك المهارات اللازمة لبناء تطبيقات عالية الجودة.
              </p>
            <p><a class="btn btn-lg btn-primary" href="#">سجل اليوم</a></p>
          </div>
        </div>
        
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Webasesst/image/1.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" aria-hidden="true" focusable="false">
        <div class="container">
          <div class="carousel-caption">
            <h1>  الشبكات.</h1>
            <p>استكشف أساسيات الشبكات من خلال دوراتنا التي تشمل تصميم الشبكات، وإدارة الشبكات، وأمان الشبكات، مما يساعدك على فهم كيفية عمل الإنترنت والبنية التحتية للشبكات.
              .</p>
              <p><a class="btn btn-lg btn-primary" href="#">سجل اليوم</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{ asset('Webasesst/image/2.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" aria-hidden="true" focusable="false">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1> الذكاء الاصطناعي  .</h1>
            <p>نغمس في عالم الذكاء الاصطناعي مع دوراتنا التي تغطي تعلم الآلة، والتعلم العميق، وتحليل البيانات، مما يمكّنك من بناء نماذج ذكية تحل المشكلات المعقدة.
              .</p>
              <p><a class="btn btn-lg btn-primary" href="#">سجل اليوم</a></p>
          </div>
        </div>
      </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">السابق</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">التالي</span>
    </button>
</div>



  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container-fluid">
  <h2 class="text-center text-center text-bg-light p-3 mb-5">بعض كورساتنا المتوفرة</h2>
</div>


  <div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
     @foreach ($catigory as $item)
         
      <div class="col-lg-4">
        <img src="{{ Storage::url($item->image) }}" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></img>
        <h2 class="fw-normal">{{$item->name}}</h2>
        <p>{{$item->description}}</p>
        <p><a class="btn btn-secondary" href="{{ route('dashboard.show', $item->id) }}">عرض التفاصيل</a></p>
      </div><!-- /.col-lg-4 -->
      @endforeach

    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">


    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1"> الابتكار في تصميم البرمجيات وتجربة المستخدم

           <span class="text-body-secondary"> سيذهل عقلك. </span></h2>
        <p class="lead">وجه الإنسان هو جزء معقَّد ومتميِّز للغاية من جسمه. وفي الواقع، إنه أحد أكثر أنظمة الإشارات المتاحة تعقيداً لدينا؛ فهو يتضمَّن أكثر من 40 عضلة مستقلة هيكلياً ووظيفياً، بحيث يمكن تشغيل كل منها بشكل مستقل عن البعض الآخر؛ وتشكِّل أحد أقوى مؤشرات العواطف.</p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('Webasesst/image/4.png') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" aria-hidden="true" focusable="false">
      </div>
      
     
    </div>
    <a class="btn btn-primary" href="{{ route('dashboard.test') }}">اختبر نفسك</a>
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">  ثورة التكنولوجيا التي تعيد تشكيل مستقبلنا. <span class="text-body-secondary"> شاهد بنفسك. </span></h2>
        <p class="lead">عندما نضحك أو نبكي، فإننا نعرض عواطفنا، مما يسمح للآخرين بإلقاء نظرة خاطفة على أذهاننا أثناء "قراءة" وجوهنا بناءً على التغييرات في مكوّنات الوجه الرئيسة، مثل: العينين والحاجبين والجفنين والأنف والشفتين.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="{{ asset('Webasesst/image/5.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" aria-hidden="true" focusable="false">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">الشبكات الحديثة <span class="text-body-secondary">   </span></h2>
        <p class="lead">أساس التواصل في عصر المعلومات </p>
      </div>
      <div class="col-md-5">
        <img src="{{ asset('Webasesst/image/6.jpg') }}" alt="" style="width: 100%; height: 100%; object-fit: cover;" aria-hidden="true" focusable="false">
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
   
  </footer>
  
 
</main>

<script src="{{asset('Webasesst/dist/js/bootstrap.bundle.min.js')}}"></script>


    </body>
</html>
