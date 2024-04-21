@extends('dashblayout.dashlayout')

<!-- Body here -->





        <!-- BODY THEN ENDS HERE -->





@section('body')



<div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
    <div>
    </div>    
<div class="container-fluid d-flex flex-stack flex-wrap flex-sm-nowrap">
<div class="d-flex flex-column align-items-start justify-content-center flex-wrap me-2">
  <h1 class="text-dark fw-bolder my-1 fs-2">Welcome {{ Auth::user()->name }}, 👋🏼</h1>
  <p class="text-dark">Hi, What would you like to do?</p>
</div>
<!--end::Info-->
<!--begin::Actions-->
<div class="d-flex align-items-center flex-nowrap text-nowrap py-1 mb-10">
  <button id="kt_bank_account_button" class="btn btn-white text-dark me-4"><svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256C432 264.8 424.8 272 416 272h-176V448c0 8.844-7.156 16.01-16 16.01S208 456.8 208 448V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99S240 55.16 240 64v176H416C424.8 240 432 247.2 432 256z"></path></svg><!-- <i class="fal fa-plus"></i> --> Cash Top Up</button>
  <div id="kt_bank_account" class="bg-white drawer drawer-end" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_bank_account_button" data-kt-drawer-close="#kt_bank_account_close">
    <div class="card w-100">
      <div class="card-header pe-5 border-0">
        <div class="card-title">
          <div class="d-flex justify-content-center flex-column me-3">
            <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Bank Account</div>
          </div>
        </div>
        <div class="card-toolbar">
          <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_bank_account_close">
            <span class="svg-icon svg-icon-2">
              <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"></path></svg><!-- <i class="fal fa-times"></i> -->
            </span>
          </div>
        </div>
      </div>
      <div class="card-body text-wrap">
                    <div class="d-flex flex-column">
          <div class="btn-wrapper text-center mb-3">
            <div class="symbol symbol-100px symbol-circle me-5 mb-10">
              <div class="symbol-label fs-1 text-dark">
                <svg class="svg-inline--fa fa-building-columns fa-2x" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="building-columns" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M496.2 133.7C505.1 139.3 512 149.6 512 160.8C512 178 498 192 480.8 192H31.16C13.95 192 .0003 178 .0003 160.8C.0003 149.6 6.035 139.3 15.8 133.7L248.1 2.08C253-.6932 258.1-.6932 263.9 2.08L496.2 133.7zM477.7 160L256 34.39L34.34 160H205.4C201.9 152.7 200 144.6 200 136C200 105.1 225.1 80 256 80C286.9 80 312 105.1 312 136C312 144.6 310.1 152.7 306.6 160H477.7zM256 160C269.3 160 280 149.3 280 136C280 122.7 269.3 112 256 112C242.7 112 232 122.7 232 136C232 149.3 242.7 160 256 160zM64 224H96V352H176V224H208V352H304V224H336V352H416V224H448V352C456.8 352 464 359.2 464 368C464 376.8 456.8 384 448 384H64C55.16 384 48 376.8 48 368C48 359.2 55.16 352 64 352V224zM472 416C480.8 416 488 423.2 488 432C488 440.8 480.8 448 472 448H40C31.16 448 24 440.8 24 432C24 423.2 31.16 416 40 416H472zM496 480C504.8 480 512 487.2 512 496C512 504.8 504.8 512 496 512H16C7.164 512 0 504.8 0 496C0 487.2 7.164 480 16 480H496z"></path></svg><!-- <i class="fal fa-university fa-2x"></i> -->
              </div>
            </div>
            <p class="text-dark fs-1 fw-bolder">Havex Credit Union</p>
            <p class="text-dark fs-6 fw-bold">Oscar Esplà 37, 03007, Alicante, Spain</p>
          </div>
          <div class="bg-light px-6 py-5 mb-10 rounded">
            <p class="text-dark fs-6 fw-bolder">Account Details</p>
            <li class="d-flex align-items-center py-2">
              <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Account Name:freddy jermane <svg class="svg-inline--fa fa-clone castro-copy fs-5" data-clipboard-text="John Doe" aria-labelledby="svg-inline--fa-title-7jUawgoeKt8i" data-prefix="fal" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><title id="svg-inline--fa-title-7jUawgoeKt8i">Copy</title><path fill="currentColor" d="M64 480H288C305.7 480 320 465.7 320 448V400C320 391.2 327.2 384 336 384C344.8 384 352 391.2 352 400V448C352 483.3 323.3 512 288 512H64C28.65 512 0 483.3 0 448V224C0 188.7 28.65 160 64 160H112C120.8 160 128 167.2 128 176C128 184.8 120.8 192 112 192H64C46.33 192 32 206.3 32 224V448C32 465.7 46.33 480 64 480zM160 64C160 28.65 188.7 0 224 0H448C483.3 0 512 28.65 512 64V288C512 323.3 483.3 352 448 352H224C188.7 352 160 323.3 160 288V64zM224 320H448C465.7 320 480 305.7 480 288V64C480 46.33 465.7 32 448 32H224C206.3 32 192 46.33 192 64V288C192 305.7 206.3 320 224 320z"></path></svg><!-- <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="John Doe" title="Copy"></i> --></span>
            </li>
            <li class="d-flex align-items-center py-2">
              <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Account Number: {{ Auth::user()->account_number }} <svg class="svg-inline--fa fa-clone castro-copy fs-5" data-clipboard-text="02361522" aria-labelledby="svg-inline--fa-title-NJ8mM5o2vvjU" data-prefix="fal" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><title id="svg-inline--fa-title-NJ8mM5o2vvjU">Copy</title><path fill="currentColor" d="M64 480H288C305.7 480 320 465.7 320 448V400C320 391.2 327.2 384 336 384C344.8 384 352 391.2 352 400V448C352 483.3 323.3 512 288 512H64C28.65 512 0 483.3 0 448V224C0 188.7 28.65 160 64 160H112C120.8 160 128 167.2 128 176C128 184.8 120.8 192 112 192H64C46.33 192 32 206.3 32 224V448C32 465.7 46.33 480 64 480zM160 64C160 28.65 188.7 0 224 0H448C483.3 0 512 28.65 512 64V288C512 323.3 483.3 352 448 352H224C188.7 352 160 323.3 160 288V64zM224 320H448C465.7 320 480 305.7 480 288V64C480 46.33 465.7 32 448 32H224C206.3 32 192 46.33 192 64V288C192 305.7 206.3 320 224 320z"></path></svg><!-- <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="02361522" title="Copy"></i> --></span>
            </li>
            <li class="d-flex align-items-center py-2">
              <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Sort code: 388130 <svg class="svg-inline--fa fa-clone castro-copy fs-5" data-clipboard-text="388130" aria-labelledby="svg-inline--fa-title-DH14O6fEvfx5" data-prefix="fal" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><title id="svg-inline--fa-title-DH14O6fEvfx5">Copy</title><path fill="currentColor" d="M64 480H288C305.7 480 320 465.7 320 448V400C320 391.2 327.2 384 336 384C344.8 384 352 391.2 352 400V448C352 483.3 323.3 512 288 512H64C28.65 512 0 483.3 0 448V224C0 188.7 28.65 160 64 160H112C120.8 160 128 167.2 128 176C128 184.8 120.8 192 112 192H64C46.33 192 32 206.3 32 224V448C32 465.7 46.33 480 64 480zM160 64C160 28.65 188.7 0 224 0H448C483.3 0 512 28.65 512 64V288C512 323.3 483.3 352 448 352H224C188.7 352 160 323.3 160 288V64zM224 320H448C465.7 320 480 305.7 480 288V64C480 46.33 465.7 32 448 32H224C206.3 32 192 46.33 192 64V288C192 305.7 206.3 320 224 320z"></path></svg><!-- <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="388130" title="Copy"></i> --></span>
            </li>
                          
                                      
                                            <li class="d-flex align-items-center py-2">
              <span class="bullet me-5 bg-primary bullet-vertical"></span> <span>Payment Reference: 1234567890 <svg class="svg-inline--fa fa-clone castro-copy fs-5" data-clipboard-text="1234567890" aria-labelledby="svg-inline--fa-title-IoV3Jt4DyflJ" data-prefix="fal" data-icon="clone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><title id="svg-inline--fa-title-IoV3Jt4DyflJ">Copy</title><path fill="currentColor" d="M64 480H288C305.7 480 320 465.7 320 448V400C320 391.2 327.2 384 336 384C344.8 384 352 391.2 352 400V448C352 483.3 323.3 512 288 512H64C28.65 512 0 483.3 0 448V224C0 188.7 28.65 160 64 160H112C120.8 160 128 167.2 128 176C128 184.8 120.8 192 112 192H64C46.33 192 32 206.3 32 224V448C32 465.7 46.33 480 64 480zM160 64C160 28.65 188.7 0 224 0H448C483.3 0 512 28.65 512 64V288C512 323.3 483.3 352 448 352H224C188.7 352 160 323.3 160 288V64zM224 320H448C465.7 320 480 305.7 480 288V64C480 46.33 465.7 32 448 32H224C206.3 32 192 46.33 192 64V288C192 305.7 206.3 320 224 320z"></path></svg><!-- <i class="fal fa-clone castro-copy fs-5" data-clipboard-text="1234567890" title="Copy"></i> --></span>
            </li>
                          </div>
        </div>
                    <div class="alert alert-primary d-flex align-items-center p-5">
          <svg class="svg-inline--fa fa-circle-info me-2 fs-2" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="circle-info" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM256 480c-123.5 0-224-100.5-224-224s100.5-224 224-224s224 100.5 224 224S379.5 480 256 480zM256 184c13.25 0 24-10.74 24-24c0-13.25-10.75-24-24-24S232 146.7 232 160C232 173.3 242.7 184 256 184zM304 352h-32V240C272 231.2 264.8 224 256 224H224C215.2 224 208 231.2 208 240S215.2 256 224 256h16v96h-32C199.2 352 192 359.2 192 368C192 376.8 199.2 384 208 384h96c8.836 0 16-7.164 16-16C320 359.2 312.8 352 304 352z"></path></svg><!-- <i class="fal fa-info-circle me-2 fs-2"></i> -->
          <div class="d-flex flex-column">
            <p class="text-dark mb-0">Payment reference helps Havex Credit Union track payments faster,<br> you must include it in wire transfer description.</p>
          </div>
        </div>
                    
          
                  </div>
    </div>
  </div>
  <button id="kt_send_money_button" class="btn btn-dark"><svg class="svg-inline--fa fa-building-columns" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="building-columns" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M496.2 133.7C505.1 139.3 512 149.6 512 160.8C512 178 498 192 480.8 192H31.16C13.95 192 .0003 178 .0003 160.8C.0003 149.6 6.035 139.3 15.8 133.7L248.1 2.08C253-.6932 258.1-.6932 263.9 2.08L496.2 133.7zM477.7 160L256 34.39L34.34 160H205.4C201.9 152.7 200 144.6 200 136C200 105.1 225.1 80 256 80C286.9 80 312 105.1 312 136C312 144.6 310.1 152.7 306.6 160H477.7zM256 160C269.3 160 280 149.3 280 136C280 122.7 269.3 112 256 112C242.7 112 232 122.7 232 136C232 149.3 242.7 160 256 160zM64 224H96V352H176V224H208V352H304V224H336V352H416V224H448V352C456.8 352 464 359.2 464 368C464 376.8 456.8 384 448 384H64C55.16 384 48 376.8 48 368C48 359.2 55.16 352 64 352V224zM472 416C480.8 416 488 423.2 488 432C488 440.8 480.8 448 472 448H40C31.16 448 24 440.8 24 432C24 423.2 31.16 416 40 416H472zM496 480C504.8 480 512 487.2 512 496C512 504.8 504.8 512 496 512H16C7.164 512 0 504.8 0 496C0 487.2 7.164 480 16 480H496z"></path></svg><!-- <i class="fal fa-institution"></i> --> Send Money</button>
  <div id="kt_send_money" class="bg-white drawer drawer-end" data-kt-drawer="true" data-kt-drawer-activate="true" data-kt-drawer-toggle="#kt_send_money_button" data-kt-drawer-close="#kt_send_money_close">
    <div class="card w-100">
      <div class="card-header pe-5 border-0">
        <div class="card-title">
          <div class="d-flex justify-content-center flex-column me-3">
            <div class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 lh-1">Send Money</div>
          </div>
        </div>
        <div class="card-toolbar">
          <div class="btn btn-sm btn-icon btn-icon-dark btn-active-light-primary" data-kt-drawer-dismiss="true" id="kt_send_money_close">
            <span class="svg-icon svg-icon-2">
              <svg class="svg-inline--fa fa-xmark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="xmark" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg=""><path fill="currentColor" d="M315.3 411.3c-6.253 6.253-16.37 6.253-22.63 0L160 278.6l-132.7 132.7c-6.253 6.253-16.37 6.253-22.63 0c-6.253-6.253-6.253-16.37 0-22.63L137.4 256L4.69 123.3c-6.253-6.253-6.253-16.37 0-22.63c6.253-6.253 16.37-6.253 22.63 0L160 233.4l132.7-132.7c6.253-6.253 16.37-6.253 22.63 0c6.253 6.253 6.253 16.37 0 22.63L182.6 256l132.7 132.7C321.6 394.9 321.6 405.1 315.3 411.3z"></path></svg><!-- <i class="fal fa-times"></i> -->
            </span>
          </div>
        </div>
      </div>
      <div class="card-body text-wrap">
        <div class="btn-wrapper text-center mb-3">
          <div class="symbol symbol-100px symbol-circle me-5 mb-10">
            <div class="symbol-label fs-1 text-dark">
              <svg class="svg-inline--fa fa-arrow-down-arrow-up fa-2x" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-down-arrow-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 352c-4.094 0-8.188 1.562-11.31 4.688L144 425.4V48C144 39.16 136.8 32 128 32S112 39.16 112 48v377.4l-68.69-68.69c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62l96 96c6.25 6.25 16.38 6.25 22.62 0l96-96c6.25-6.25 6.25-16.38 0-22.62C232.2 353.6 228.1 352 224 352zM427.3 132.7l-96-96c-6.25-6.25-16.38-6.25-22.62 0l-96 96c-6.25 6.25-6.25 16.38 0 22.62s16.38 6.25 22.62 0L304 86.63V464c0 8.844 7.156 16 16 16s16-7.156 16-16V86.63l68.69 68.69C407.8 158.4 411.9 160 416 160s8.188-1.562 11.31-4.688C433.6 149.1 433.6 138.9 427.3 132.7z"></path></svg><!-- <i class="fal fa-arrow-down-arrow-up fa-2x"></i> -->
            </div>
          </div>
          <p class="text-dark fs-6">Swift and Secure Money Transfer </p>
        </div>
        <div class="pb-5 mt-10 position-relative zindex-1">
          <!--begin::Item-->
          <a href="/userdashb_tranfer">
            <div class="d-flex flex-stack mb-6">
              <div class="d-flex align-items-center me-2">
                <div class="symbol symbol-45px me-5">
                  <span class="symbol-label bg-light-primary text-dark">
                    <svg class="svg-inline--fa fa-user" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM224 32c52.94 0 96 43.06 96 96c0 52.93-43.06 96-96 96S128 180.9 128 128C128 75.06 171.1 32 224 32zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304zM413.3 480H34.66C33.2 480 32 478.8 32 477.3C32 399.4 95.4 336 173.3 336h101.3C352.6 336 416 399.4 416 477.3C416 478.8 414.8 480 413.3 480z"></path></svg><!-- <i class="fal fa-user"></i> -->
                  </span>
                </div>
                <div>
                  <p class="fs-5 text-gray-800 text-hover-primary fw-bolder mb-0">Local Transfer</p>
                  <div class="fs-7 text-gray-800 fw-semibold">Easily send money Locally</div>
                  <div class="fs-7 text-gray-600 fw-semibold">
                                            0% Handling charges
                     </div>
                  </div>
                </div>
                <p class="btn btn-icon btn-light btn-sm">
                  <svg class="svg-inline--fa fa-arrow-right text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M443.7 266.8l-165.9 176C274.5 446.3 269.1 448 265.5 448c-3.986 0-7.988-1.375-11.16-4.156c-6.773-5.938-7.275-16.06-1.118-22.59L393.9 272H16.59c-9.171 0-16.59-7.155-16.59-15.1S7.421 240 16.59 240h377.3l-140.7-149.3c-6.157-6.531-5.655-16.66 1.118-22.59c6.789-5.906 17.27-5.469 23.45 1.094l165.9 176C449.4 251.3 449.4 260.7 443.7 266.8z"></path></svg><!-- <i class="fal fa-arrow-right text-dark"></i> -->
                </p>
              </div>
          </a>
        
          <a href="/userdashb_tranfer">
            <div class="d-flex flex-stack mb-6">
              <div class="d-flex align-items-center me-2">
                <div class="symbol symbol-45px me-5">
                  <span class="symbol-label bg-light-primary text-dark">
                    <svg class="svg-inline--fa fa-shuffle" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shuffle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M427.3 292.7c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62L457.4 368H336c-5 0-9.781-2.406-12.78-6.406l-38.41-51.19c-5.312-7.094-15.38-8.5-22.41-3.219c-7.062 5.312-8.5 15.34-3.219 22.41l38.41 51.19C306.6 392.8 320.1 400 336 400h121.4l-52.69 52.69c-6.25 6.25-6.25 16.38 0 22.62C407.8 478.4 411.9 480 416 480s8.188-1.562 11.31-4.688l80-80c6.25-6.25 6.25-16.38 0-22.62L427.3 292.7zM336 144h121.4l-52.69 52.69c-6.25 6.25-6.25 16.38 0 22.62C407.8 222.4 411.9 224 416 224s8.188-1.562 11.31-4.688l80-80c6.25-6.25 6.25-16.38 0-22.62l-80-80c-6.25-6.25-16.38-6.25-22.62 0s-6.25 16.38 0 22.62L457.4 112H336c-15.03 0-29.41 7.188-38.41 19.22l-172.8 230.4C121.8 365.6 117 368 112 368h-96C7.156 368 0 375.2 0 384s7.156 16 16 16h96c15.03 0 29.41-7.188 38.41-19.22l172.8-230.4C326.2 146.4 331 144 336 144zM16 144h96c5 0 9.781 2.406 12.78 6.406l38.41 51.19C166.3 205.8 171.2 208 176 208c3.344 0 6.719-1.031 9.594-3.188c7.062-5.312 8.5-15.34 3.219-22.41L150.4 131.2C141.4 119.2 127 112 112 112h-96C7.156 112 0 119.2 0 128S7.156 144 16 144z"></path></svg><!-- <i class="fal fa-shuffle"></i> -->
                  </span>
                </div>
                <div>
                  <p class="fs-5 text-gray-800 text-hover-primary fw-bolder mb-0">International Wire Transfer</p>
                  <div class="fs-7 text-gray-800 fw-semibold">Wire transfer is executed under 72hours, Iban<br> &amp; swiftcode are required.</div>
                  <div class="fs-7 text-gray-600 fw-semibold">
                                            0% 
                     </div>
                  </div>
                </div>
                <p class="btn btn-icon btn-light btn-sm">
                  <svg class="svg-inline--fa fa-arrow-right text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="arrow-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M443.7 266.8l-165.9 176C274.5 446.3 269.1 448 265.5 448c-3.986 0-7.988-1.375-11.16-4.156c-6.773-5.938-7.275-16.06-1.118-22.59L393.9 272H16.59c-9.171 0-16.59-7.155-16.59-15.1S7.421 240 16.59 240h377.3l-140.7-149.3c-6.157-6.531-5.655-16.66 1.118-22.59c6.789-5.906 17.27-5.469 23.45 1.094l165.9 176C449.4 251.3 449.4 260.7 443.7 266.8z"></path></svg><!-- <i class="fal fa-arrow-right text-dark"></i> -->
                </p>
              </div>
          </a>
          
          <!--end::Item-->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="post fs-6 d-flex flex-column-fluid min-vh-100" id="kt_post">
<div class="container">
  <div class="row g-xl-8">
    <div>
<div class="card bg-transparent h-md-100" wire:poll="">
    <div class="card-body p-0">
        <div class="px-9 pt-6 card-rounded w-100 bgi-no-repeat bgi-size-cover bgi-position-y-top bg-primary  h-250px ">
            <div class="d-flex flex-stack">
                
                    <div class="logged-user-i">
                      <div class="avatar-w">
                        <img alt="" src="https://e7.pngegg.com/pngimages/550/997/png-clipart-user-icon-foreigners-avatar-child-face.png" width="50" height="50" style="border-radius: 50%;">
                      </div>
                      
                    </div>
                  
                                </div>
            <div class="fw-bold fs-5 text-center text-white pt-5 ">
                 <h1>Available Balance</h1>
                <span class="fw-bolder fs-2hx d-block mt-n1">
                    <span id="main_balance">
                        €0  EUR                       </span>
                    
                </span>
            </div>
        </div>
                    <div class="shadow-xs card-rounded mx-9 mb-3 px-6 py-9 position-relative z-index-1 bg-body" style="margin-top: -85px">
        
                                            
            
                            <div class="d-flex align-items-center ">
                <div class="symbol symbol-40px me-5">
                    <span class="symbol-label">
                        <svg class="svg-inline--fa fa-shield text-dark" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="shield" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M231 7.838C247 1.065 265.1 1.066 281 7.84L457.7 82.79C479.7 92.12 496.2 113.8 496 139.1C495.5 239.2 454.7 420.7 282.4 503.2C265.7 511.1 246.3 511.1 229.6 503.2C57.26 420.7 16.49 239.2 16 139.1C15.87 113.8 32.32 92.12 54.3 82.79L231 7.838zM268.5 37.3C260.5 33.91 251.5 33.91 243.5 37.3L66.79 112.3C55.51 117 47.94 127.7 48 139.8C48.46 233.8 87.33 399.6 243.4 474.3C251.4 478.1 260.6 478.1 268.6 474.3C424.7 399.6 463.6 233.8 464 139.8C464.1 127.7 456.5 117 445.2 112.3L268.5 37.3z"></path></svg><!-- <i class="fal fa-shield text-dark"></i> -->
                    </span>
                </div>
                <div class="d-flex align-items-center flex-wrap w-100">
                    
                        <div class="mb-1 pe-3 flex-grow-1">
                            <div class="fs-4 text-dark text-hover-primary fw-bolder">Your Account Number</div>
                            <div class="text-gray-800 fw-semibold ml-3">{{ Auth::user()->account_number }}</div>
                        </div>
                        <div class="col-md-6 col-12 text-md-end">
                            <a href="/dash_history" class="btn btn-sm btn-primary text-black mb-3"><svg class="svg-inline--fa fa-wave-pulse" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="wave-pulse" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg=""><path fill="currentColor" d="M640 240v32c0 8.875-7.125 15.1-16 15.1h-124.2l-55.13 110.2c-5.875 11.87-18.63 18.75-31.75 17.62c-13.25-1.375-24.25-10.62-27.75-23.5L323.8 167.3L255.2 486.8C252.2 501 239.8 511.5 225.1 512H224c-14.25 0-26.88-9.5-30.75-23.25L135.9 288H16c-8.875 0-16-7.125-16-15.1V240c0-8.875 7.125-15.1 16-15.1H160c14.25 0 26.88 9.503 30.75 23.25l28.75 100.7L288.8 25.27c3-14.37 15.62-24.87 30.37-25.25c14.75-.5 27.88 9.375 31.75 23.62l74 271.1l26.5-52.1C456.8 230.9 467.9 224 480 224h144C632.9 224 640 231.1 640 240z"></path></svg><!-- <i class="fa fa-heart-rate"></i> --> Transactions</a>
                                        <a href="/dashb_deposits" class="btn btn-sm btn-primary text-white mb-3"><svg class="svg-inline--fa fa-money" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="money" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><g class="missing"><path fill="currentColor" d="M156.5,447.7l-12.6,29.5c-18.7-9.5-35.9-21.2-51.5-34.9l22.7-22.7C127.6,430.5,141.5,440,156.5,447.7z M40.6,272H8.5 c1.4,21.2,5.4,41.7,11.7,61.1L50,321.2C45.1,305.5,41.8,289,40.6,272z M40.6,240c1.4-18.8,5.2-37,11.1-54.1l-29.5-12.6 C14.7,194.3,10,216.7,8.5,240H40.6z M64.3,156.5c7.8-14.9,17.2-28.8,28.1-41.5L69.7,92.3c-13.7,15.6-25.5,32.8-34.9,51.5 L64.3,156.5z M397,419.6c-13.9,12-29.4,22.3-46.1,30.4l11.9,29.8c20.7-9.9,39.8-22.6,56.9-37.6L397,419.6z M115,92.4 c13.9-12,29.4-22.3,46.1-30.4l-11.9-29.8c-20.7,9.9-39.8,22.6-56.8,37.6L115,92.4z M447.7,355.5c-7.8,14.9-17.2,28.8-28.1,41.5 l22.7,22.7c13.7-15.6,25.5-32.9,34.9-51.5L447.7,355.5z M471.4,272c-1.4,18.8-5.2,37-11.1,54.1l29.5,12.6 c7.5-21.1,12.2-43.5,13.6-66.8H471.4z M321.2,462c-15.7,5-32.2,8.2-49.2,9.4v32.1c21.2-1.4,41.7-5.4,61.1-11.7L321.2,462z M240,471.4c-18.8-1.4-37-5.2-54.1-11.1l-12.6,29.5c21.1,7.5,43.5,12.2,66.8,13.6V471.4z M462,190.8c5,15.7,8.2,32.2,9.4,49.2h32.1 c-1.4-21.2-5.4-41.7-11.7-61.1L462,190.8z M92.4,397c-12-13.9-22.3-29.4-30.4-46.1l-29.8,11.9c9.9,20.7,22.6,39.8,37.6,56.9 L92.4,397z M272,40.6c18.8,1.4,36.9,5.2,54.1,11.1l12.6-29.5C317.7,14.7,295.3,10,272,8.5V40.6z M190.8,50 c15.7-5,32.2-8.2,49.2-9.4V8.5c-21.2,1.4-41.7,5.4-61.1,11.7L190.8,50z M442.3,92.3L419.6,115c12,13.9,22.3,29.4,30.5,46.1 l29.8-11.9C470,128.5,457.3,109.4,442.3,92.3z M397,92.4l22.7-22.7c-15.6-13.7-32.8-25.5-51.5-34.9l-12.6,29.5 C370.4,72.1,384.4,81.5,397,92.4z"></path><circle fill="currentColor" cx="256" cy="364" r="28"><animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="r" values="28;14;28;28;14;28;"></animate><animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;1;1;0;1;"></animate></circle><path fill="currentColor" opacity="1" d="M263.7,312h-16c-6.6,0-12-5.4-12-12c0-71,77.4-63.9,77.4-107.8c0-20-17.8-40.2-57.4-40.2c-29.1,0-44.3,9.6-59.2,28.7 c-3.9,5-11.1,6-16.2,2.4l-13.1-9.2c-5.6-3.9-6.9-11.8-2.6-17.2c21.2-27.2,46.4-44.7,91.2-44.7c52.3,0,97.4,29.8,97.4,80.2 c0,67.6-77.4,63.5-77.4,107.8C275.7,306.6,270.3,312,263.7,312z"><animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="1;0;0;0;0;1;"></animate></path><path fill="currentColor" opacity="0" d="M232.5,134.5l7,168c0.3,6.4,5.6,11.5,12,11.5h9c6.4,0,11.7-5.1,12-11.5l7-168c0.3-6.8-5.2-12.5-12-12.5h-23 C237.7,122,232.2,127.7,232.5,134.5z"><animate attributeType="XML" repeatCount="indefinite" dur="2s" attributeName="opacity" values="0;0;1;1;0;0;"></animate></path></g></svg><!-- <i class="fa fa-money"></i> --> Top up balance</a>
                                                   
                                      </div>
                </div>
            </div>
                        </div>
                </div>
</div>
</div><div class="row mr-3 ml-3 mt-2 mb-5">
    <div class="col-md-4  ">
        <div class="card card-stats rounded  ml-5">
          <div class="card-body">
            <div class="row ">
              <div class="col">
                <h4 class="font-weight-bolder mb-1"> Transcation Limit</h4>
                <p class="text-dark mb-1">Your current transcation limit</p>
                <p class="text-dark h3">€500,000,00 </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card card-stats rounded mr-2 ml-2">
          <div class="card-body">
            <div class="row mt-2">
                
              <div class="col">
                <h4 class="font-weight-bolder mb-1">Pending Transaction </h4>
                <p class="text-dark mb-1">Total pending transactins currently</p>
                <p class="text-dark h3">€ 0.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mt-3">
        <div class="card card-stats rounded mr-4 ">
          <div class="card-body">
            <div class="row mt-2">
              <div class="col">
                <h4 class="font-weight-bolder mb-1">Transaction Volume</h4>
                <p class="text-dark mb-1">Total Volume of transactions made</p>
                <p class="text-dark h3">€ 0.00</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
</div>

                    <div class="card card-flush rounded-4 mt-4">
            <div class="card-header align-items-center py-5 gap-2 gap-md-5" style="display:inline;">
                <h3>Recent Transactions</h3>
            </div>
            <div class="card-body pt-0">
                <div class="table-responsive">
                    <table class="table align-middle table-row-bordered table-row-gray-300 gy-5 gs-7" id="kt_datatable_example_5">
                        <thead>
                            <tr class="text-start text-dark fw-bolder fs-7 text-uppercase px-7">
                                <th></th>
                                <th class="min-w-150px">Amount</th>
                                <th>Type</th>
                                <th class="min-w-50px">Status</th>
                                <th class="min-w-50px">Reference ID</th>
                                <th class="min-w-200px">Created</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <tbody class="fw-semibold text-dark fs-6">
                            
                        <tr class="cursor-pointer" id="119BANC/IARE94EX-2024">
     
     <td>
         <div class="symbol symbol-40px symbol-circle me-5">
             <div class="symbol-label fs-3 fw-bolder text-dark">
                                 
                 <svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fal" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256C432 264.8 424.8 272 416 272h-176V448c0 8.844-7.156 16.01-16 16.01S208 456.8 208 448V272H32c-8.844 0-16-7.15-16-15.99C16 247.2 23.16 240 32 240h176V64c0-8.844 7.156-15.99 16-15.99S240 55.16 240 64v176H416C424.8 240 432 247.2 432 256z"></path></svg><!-- <i class="fal fa-plus"></i> -->
                             </div>
         </div>
        
     </td>
     
     @if ($deposits)
     
     @foreach ($deposits as $deposit)
     
         <td>€{{$deposit->amount}} EUR</td>
         <td><span class="text-success">Deposit</span></td>
         
         <td>
         {!! $deposit->status > 0 ? '<span class="badge badge-pill badge-warning badge-sm">Completed</span>' : '<span class="badge badge-pill badge-warning badge-sm">Pending</span>' !!}
     
         <td>BANC/IAJKX-203984</td>
         <td>Cryptocurrency Funding</td>
         <td>Bank Transfer</td>
         <td>{{$deposit->depositDate}}</td>
         </tr>
     
     @endforeach
                            
      @else
         
                           
                                
     @endif
     



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
   </div>
</div>




</div>
<!-- Livewire Component wire-end:WFPXAQH6iUfy5N0y5sa1 -->    </div>


   
                
@endsection
