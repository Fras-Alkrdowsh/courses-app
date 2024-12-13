<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link href="{{asset('login/css/login.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Register</title>
</head>
<body>
       
    <section class="vh-100">
        
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                class="img-fluid" alt="Sample image">
            </div>
            
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
           

     


  

              <form method="POST" action="{{ route('register') }}">
                @csrf
              
               
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0"><a class="navbar-brand fs-4 text-center lead fw-normal mb-0 me-3 " href="#page-top">Register in Cour<span style="color : red">sate</span></a></p>
                </div>
      
                <!-- Email input -->
                <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="Enter your email" placeholder="Enter your full name">
                </div>
                <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Your Email Address </label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="Enter your email" placeholder="Enter Your university major">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Your Phone Number </label>
                 <input type="text" name="phone"  class="form-control" id="Enter your email" placeholder="Enter Your university major">
             </div>
               
                <!-- Password input -->
                     <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                  <input type="password"
                  name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Password Confirmation</label>
                     <input type="password"
                     name="password_confirmation" class="form-control" id="Enter your email" placeholder="name@example.com">
                 </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button   data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Register     <i class="bi bi-arrow-right"></i></button>
                
                </div>
      
              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
           In JPU 2024
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
</body>

  
</html>