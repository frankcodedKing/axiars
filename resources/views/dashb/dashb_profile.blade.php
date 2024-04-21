@extends('dashblayout.dashlayout')
<!-- <style>
    .flex{
        display: flex;
        justify-content: space-between;
        padding: 10px;
    }
    .flex input,.wid input{
        flex-basis: 60%;
        background: transparent!important;
        border: none!important;
        outline: none!important;
        color: black!important;
        font-weight: bold!important;
        display: block;
        font-size: 20px;
        
    }
.wid input{
    display: inline;
    padding: 10px;
    width: 50%;
   
}
    .flex input:focus{
        border: none;
        background: none;
    }
   .flex label{
    display: block;
   }

   .upload {
    position: absolute;
    font-size: 30px;
    bottom: 20;
    right: 17%;
    cursor: pointer;
}
.updatef{
    display: flex;
}
@media (max-width:480px){
    .updatef{
        display: block;
    }
    .upload {
    position: absolute;
    font-size: 30px;
    bottom: 20;
    right: 45%;
    cursor: pointer;
}
} -->
   <!-- /* .image-file{
    position: absolute;
    color: red!important;
    width: 10px;
    border-radius: 50%;
    color: red;
    background: red!important;

   } */ -->
   
</style>
@section('body')

<div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
  <div wire:id="07JLZ1I8wtzQJVyhmJtD">

    <div><div>
    </div>        <div class="toolbar" id="kt_toolbar">
<div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
<div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
  <h1 class="text-dark fw-bolder my-1 fs-2 mb-6">Settings</h1>
  <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x mb-5 fs-6 border-gray-300" id="tabs-icons-text" role="tablist">
    <li class="nav-item">
      <a class="nav-link text-dark  active " id="tabs-icons-text-1-tab" href="" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-dark " id="tabs-icons-text-2-tab" href="/dash_settings" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Security</a>
    </li>
    
    <li class="nav-item" data-bs-toggle="modal" data-bs-target="#resetpassword">
      <a class="nav-link text-dark " id="tabs-icons-text-2-tab" href="#" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Upload profile picture</a>
    </li>

    <li class="nav-item" data-bs-toggle="modal" data-bs-target="#resetpin">
      <a class="nav-link text-dark " id="tabs-icons-text-2-tab" href="#" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false">Change Transaction Pin</a>
    </li>
  </ul>
</div>
<div class="d-flex flex-column align-items-end justify-content-end flex-wrap me-2">
  
  <img src="https://bs-abadelb.com/storage/app/public/photos/FAMBDEScreenshot (81).png1713509882" style="height: 100px; width: 100px;
                            
  border-radius:40px;
  border: solid 5px;
  border-color: white;
  
  " alt="">
</div>
</div>



  <div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">
  <div class="container">
      <div>
        <div>
          <div class="card mb-10">
        
            <div class="card-body">

            <form method="POST" action="{{route('dashb_profile_save')}}" enctype="multipart/form-data">
                                    @csrf
                             <div class="row fv-row">
                              
                  <div class="col-xl-12 mb-6">
                    <label class="form-label fw-bolder text-dark fs-6">Full Name</label>
                    
                    <input class="form-control form-control-lg form-control-solid" type="text" name="lastname" autocomplete="off" value="{{Auth::user()->name}}" required="" readonly="">
                                      </div>
                </div>
                
                 <div class="fv-row mb-6">
                  <label class="form-label fs-6 fw-bolder text-dark">Account Number</label>
                  <input class="form-control form-control-lg form-control-solid" type="email" name="" value="08778670612 " required="" readonly="">
                                  </div>
                <div class="fv-row mb-6">
                  <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                  <input class="form-control form-control-lg form-control-solid" type="email" name="email" autocomplete="email" value="franksopulu04@gmail.com " required="" readonly="">
                                  </div>

                            
                              <div class="fv-row mb-6">
                                <label class="form-label fs-6 fw-bolder text-dark">Dirth of birth</label>
                                <input class="form-control form-control-lg form-control-solid" type="date" name="birthday" value="{{Auth::user()->birthday}}" autocomplete="date" required="" >
                                                </div>
                <div class="fv-row mb-6">
                  <label class="form-label fs-6 fw-bolder text-dark">Phone</label>
                  <div class="input-group mb-3">
                   
                    <input class="form-control form-control-lg form-control-solid" type="tel" name="phone" autocomplete="phone" value="" required="" placeholder="123456789" readonly="">
                  </div>
                                  </div>


 <div class="fv-row mb-6">
                  <label class="form-label fs-6 fw-bolder text-dark">Address</label>
                  <div class="input-group mb-3">
                   
                    <input class="form-control form-control-lg form-control-solid" type="tel" name="address" value="" >
                  </div>
                                  </div>

                                
              </form>
            </div>
          </div>
        </div>


      </div>
  </div>
</div>
</div>
</div>
</div>
<div>
  <div wire:ignore.self="" class="modal fade" id="resetpassword" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header border-0">
                  <h3 class="modal-title">Upload Profile</h3>
                  <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                      <span class="svg-icon svg-icon-1">
                          <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"></path></svg><!-- <i class="fal fa-times"></i> -->
                      </span>
                  </div>
              </div>
              <div class="modal-body">
                  <form action="https://bs-abadelb.com/dashboard/updateprofilephoto" method="post" class="mb-10" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="JNUJDbwvHAYFAhzfwZkD2ft2YzxPtR9ifl8757P7">                      <div class="fv-row mb-6 form-floating">
                          <input type="file" name="photo" class="form-control form-control-lg form-control-solid" required="">
                          <label class="form-label fw-bolder text-dark fs-6 mb-0" for="new_password">Profile Picture</label>
                                                  </div>
                      
                      <div class="text-center">
                          <button type="submit" class="btn btn-primary btn-block">
                              <span>Upload Profile Picture</span>
                             
                          </button>
                      </div>
                  </form>
                  
              </div>
          </div>
      </div>
  </div>




  <div wire:ignore.self="" class="modal fade" id="resetpin" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <h3 class="modal-title">Reset Transaction Pin</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1">
                        <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"></path></svg><!-- <i class="fal fa-times"></i> -->
                    </span>
                </div>
            </div>
            <div class="modal-body">
                <form action="https://bs-abadelb.com/dashboard/changepin" method="post" class="mb-10">
                  <input type="hidden" name="_token" value="JNUJDbwvHAYFAhzfwZkD2ft2YzxPtR9ifl8757P7">                  <input type="hidden" name="_method" value="PUT">                    <div class="fv-row mb-6 form-floating">
                        <input type="password" name="pin" class="form-control form-control-lg form-control-solid" required="">
                        <label class="form-label fw-bolder text-dark fs-6 mb-0" for="new_password">Digit Transaction Pin </label>
                                                </div>

                      <div class="fv-row mb-6 form-floating">
                             <input type="password" name="password" class="form-control form-control-lg form-control-solid" required="">
                           <label class="form-label fw-bolder text-dark fs-6 mb-0" for="new_password"> Password </label>
                                                                          </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">
                            <span>Change Transaction Pin</span>
                           
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>


    <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
      <!--begin::Container-->
      <div class="container-fluid d-flex flex-column flex-md-row flex-stack">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
          <span class="text-muted fw-bold me-2">2023 ©</span>
          <a href="/" target="_blank" class="text-gray-800 text-hover-primary">Banc Online S-abadel</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
       
        <!--end::Menu-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Footer-->
  </div>



</div></div>



                <!-- Break -->

                <!-- Break -->

                <!-- Break -->

                <!-- Break -->
@endsection