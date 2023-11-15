@extends('backend.master_auth');
<style>
   .img-fluid{
   max-width:100%;
   height:auto;
   }
</style>
<body>
   <main>
      <div class="container">
         <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-lg-5 col-md-6 d-flex flex-column align-items-center justify-content-center">
                     <div class="py-3" style="background: #104382;text-align:center;width: 100%;">
                        <a href="{{url('/admin')}}" class="logo align-items-center w-auto">
                        <img src="{{asset('Backend/images/bg.jpg')}}" alt="" class="img-fluid adminlogo" style="max-height: 59px;">
                        </a>
                     </div>
                     <!-- End Logo -->
                     <div class="card mb-3">
                        <div class="card-body">
                           <h4>
                              @if (Session::has('error'))
                              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                 <strong>{{Session::get('error')}}</strong>
                                 <button type="button" class="close" onclick="close()" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                                 </button>
                              </div>
                              @endif
                           </h4>
                           <div class="pt-4 pb-2">
                              <h5 class="card-title text-center pb-0 fs-4">Login to Admin Account</h5>
                              <!-- <p class="text-center small">Enter your username & password to login</p> -->
                           </div>
                           <form class="row g-3 needs-validation" novalidate method="post" action="{{route('admin.signin')}}">
                              @csrf
                              <div class="col-12">
                                 <label for="yourUsername" class="form-label">Email</label>
                                 <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" name="email" class="form-control" id="yourUsername" required>
                                    <div class="invalid-feedback">Please enter your email.</div>
                                 </div>
                              </div>
                         
                              <div class="col-12">
                                 <label for="yourPassword" class="form-label">Password</label>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                       <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
                                    <div class="input-group-append">
                                       <span class="input-group-text" onclick="password_show_hide();">
                                       <i class="fas fa-eye" id="show_eye"></i>
                                       <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                       </span>
                                    </div>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                 </div>
                              </div>
                              <div class="col-12">
                                 <button class="btn btn-primary w-100" type="submit" style="">Login</button>
                              </div>
                              <div class="col-12">
                                 <!-- <p class="small mb-0">Don't have account? <a href="{{url('admin/register')}}">Create an account</a></p> -->
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </div>
   </main>
   <!-- End #main -->
   <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
   <script type="text/javascript">
      function close()
      {
        alert('sas');
      }
      
   </script>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <script>
      function password_show_hide() {
        var x = document.getElementById("password");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
          x.type = "text";
          show_eye.style.display = "none";
          hide_eye.style.display = "block";
        } else {
          x.type = "password";
          show_eye.style.display = "block";
          hide_eye.style.display = "none";
          
        }
      }   
      
   </script>