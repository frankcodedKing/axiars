@extends('layouts.customlayout')
@section('body')



<div class="page-loading active text-indigo">
    <div class="page-loading-inner">
      <div class="page-spinner"></div><span></span>
    </div>
    
  </div>
  <div class="d-flex justify-content-center">
     
    <div id="google_translate_element"></div>
    
    </div>
  
  

     
  <!--beginMain-->
  <div class="d-flex flex-column flex-root">
    <!--beginAuthentication - Sign-in -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
      <!--beginAside-->
      <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative d-none d-xl-block">
        <!--beginWrapper-->
        <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
          <!--beginHeader-->
          <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
            <!--beginLogo-->
            <a href="" class="py-9 pt-lg-20">
              <img alt="Logo" src="https://bs-abadelb.com/storage/app/public/photos/Tq7LTKTMLMS7cX4I6422Rfd0ulnLgqRn1Ov2Mv00.png" style="height:auto; max-width:30%;"/>
            </a>
            <!--endLogo-->
            <!--beginTitle-->
            <h1 class="fw-bolder text-white fs-2qx pb-5 pb-md-10">Swift Money Transfer</h1>
            <!--endTitle-->
            <!--beginDescription-->
            <p class="fw-bold fs-2 text-white">Swift and Secure Money Transfer to any bank account will become a breeze with Banc Online S-abadel.
            </p>
            <!--endDescription-->
          </div>
          <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-300px" style="background-image: url('{{ asset('bsassets/public/dashboard/media/illustrations/sport.png') }}')"></div>

          <!--endHeader-->
        </div>
        <!--endWrapper-->
      </div>
      <div class="d-flex flex-column flex-lg-row-fluid py-10 ">
  <div class="d-flex flex-center flex-column flex-column-fluid">
   <div class="text-center">
                 <a href="/">
                   <img src="https://bs-abadelb.com/storage/app/public/photos/Tq7LTKTMLMS7cX4I6422Rfd0ulnLgqRn1Ov2Mv00.png"
                        alt="Logo" class="w-50">
                         </a>
                                        </div>
                                        
                                         
    <div class="w-lg-600px w-100 w-100 p-10 p-lg-15 mx-auto">




                  <form method="POST" action="{{ route('login') }}">
                    @csrf

                   

                     <div class="form-group" style="margin-top: 5px;">
                      <label for="exampleInputEmail1">Email address</label>
                      <input id="email" type="email" 
                      class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email"
                      value="{{ old('email') }}" required autocomplete="email" id="email">

                               
                    </div>
                    <br>
                  

                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input id="password" type="password" placeholder="Password"
                      class="form-control @error('password') is-invalid @enderror"
                      name="password" required autocomplete="new-password">

              <br>
              <p>Forgot your password?<strong><a href="reset"> Recover Password </a></strong></p>


                   <div style="text-align: center;">
                   <button type="submit" class="btn btn-success btn-lg" style="width: 25%; justify-content: center;">
                     Login 
                    </button>
                   </div>

                    <br>
                    <p style="text-align: center;"><strong>OR</strong></p>
                    <!-- <br> -->
                    <p style="text-align: center;">Do not have an account. <strong><a href="register">Sign up here</a></strong></p>

                  </form>


  
           
        
                  </div>
   </div>
  </div>


  <!-- body -->

  <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
    
  </div></div>
    </div>
    <!--end::Authentication - Sign-in-->
  </div>
  



<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- </body> -->
</main>
 @endsection

