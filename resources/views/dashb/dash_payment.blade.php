

@extends('dashblayout.dashlayout')

@section('body')



<div class="page-inner col-lg-10 ">
          
            <div>
    </div>                        <div>
    </div>            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="mt-2 mb-4">
                        <h1 class="title1 ">Make Deposit</h1>
                    </div>
                    <div class="card  shadow-lg p-2 p-md-4">

                    @if(session()->has('address') && session()->has('type'))
                                @php
                                    $methacc = session('address');
                                    $method = session('type');
                                    $amount = session('amount');
                                @endphp


                        <div class="card-body">
                                    <div>
                                    <h4 class="">You are to make payment of <strong>€{{ $amount }}</strong> using your selected payment method. Screenshot and upload the proof of payment</h4>
                                    
                                    
                                    @if($method == 'USDT')

                                    <h4>
                                                                                <strong class="">Bank Transfer</strong>
                                    </h4>
                                </div>


                            
                                <div class="mt-5">
                                                                                                               
                                                    <div class="d-block">
                                                    <h5 class="">Account Name</h5>
                                                </div>
                                                <div class="mb-3 input-group">
                                                    <input type="text" class="form-control myInput readonly  " value="Jane lauren" readonly="">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled=""><svg class="svg-inline--fa fa-copy" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M384 96L384 0h-112c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48H464c26.51 0 48-21.49 48-48V128h-95.1C398.4 128 384 113.6 384 96zM416 0v96h96L416 0zM192 352V128h-144c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48h192c26.51 0 48-21.49 48-48L288 416h-32C220.7 416 192 387.3 192 352z"></path></svg><!-- <i class="fas fa-copy"></i> --></button>
                                                    </div>
                                                </div>
                                                
                                                                                                                                                <div class="d-block">
                                                    <h5 class="">Account Number or Wallet Address</h5>
                                                </div>
                                                <div class="mb-3 input-group">
                                                    <input type="text" class="form-control myInput readonly  " value="{{ $methacc }}" readonly="">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled=""><svg class="svg-inline--fa fa-copy" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M384 96L384 0h-112c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48H464c26.51 0 48-21.49 48-48V128h-95.1C398.4 128 384 113.6 384 96zM416 0v96h96L416 0zM192 352V128h-144c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48h192c26.51 0 48-21.49 48-48L288 416h-32C220.7 416 192 387.3 192 352z"></path></svg><!-- <i class="fas fa-copy"></i> --></button>
                                                    </div>
                                                </div>
                                                                                                                                                <div class="d-block">
                                                    <h5 class="">Swift Code</h5>
                                                </div>
                                                <div class="mb-3 input-group">
                                                    <input type="text" class="form-control myInput readonly  " value="3222ASD" readonly="">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled=""><svg class="svg-inline--fa fa-copy" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M384 96L384 0h-112c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48H464c26.51 0 48-21.49 48-48V128h-95.1C398.4 128 384 113.6 384 96zM416 0v96h96L416 0zM192 352V128h-144c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48h192c26.51 0 48-21.49 48-48L288 416h-32C220.7 416 192 387.3 192 352z"></path></svg><!-- <i class="fas fa-copy"></i> --></button>
                                                    </div>
                                                </div>


                                @else


                                
                                <h4>
                                                                                <strong class="">Bitcoin Transfer</strong>
                                    </h4>
                                </div>


                            
                                <div class="mt-5">
                                                                                                               
                                                   
                                                
                                                                                                                                                <div class="d-block">
                                                    <h5 class="">Bitcoin Address</h5>
                                                </div>
                                                <div class="mb-3 input-group">
                                                    <input type="text" class="form-control myInput readonly  " value="{{ $methacc }}" readonly="">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" onclick="myFunction()" type="button" id="button-addon2" disabled=""><svg class="svg-inline--fa fa-copy" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="copy" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M384 96L384 0h-112c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48H464c26.51 0 48-21.49 48-48V128h-95.1C398.4 128 384 113.6 384 96zM416 0v96h96L416 0zM192 352V128h-144c-26.51 0-48 21.49-48 48v288c0 26.51 21.49 48 48 48h192c26.51 0 48-21.49 48-48L288 416h-32C220.7 416 192 387.3 192 352z"></path></svg><!-- <i class="fas fa-copy"></i> --></button>
                                                    </div>
                                                </div>
                                                  

                                                @endif


                                                                                                                                                                                                                </div>
                                                                                                    <div>
                            <form method="POST" action="{{route('uploadKyc')}}" enctype="multipart/form-data">
                                      @csrf
                                            <div class="fv-row mb-6">
                                        <label class="form-label fs-6 fw-bolder text-dark">Upload Payment proof after payment.</label>
                                        <input class="form-control form-control-lg form-control-solid" type="file" name="kyc_file" id="file" required="" multiple="">
                                                                </div>

                                            <div class="text-center mt-10">
                                                <button type="submit" class="btn btn-lg btn-primary btn-block fw-bolder me-3 my-2">
                                                    <span>Submit Payment</span>
                                                    <!-- <span wire:loading wire:target="addTicket">Processing Request...</span> -->
                                                </button>
                                            </div>
                                        </form>
                                        
                                    </div>



                                    
     
@endif
                                                                                        
                                                        
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


@endsection