@extends('dashblayout.dashlayout')

<style>
  
 
    .Qr-code {
        display: flex;
        justify-content: space-around;
                      
        
        padding: 30px;
        position: absolute;
        flex-wrap: wrap;
        height: 100%;
        width: 80%;
        background: white;
        
        top: 7%;  
        overflow: hidden;
    }
    .Qr-code p {
        color: black;
    }
    .Qr-code h3 {
        color: black;
        font-size: 16px;
        border-bottom: 1px solid;
    }
    .Qr-code img {
        width: 170px;
        height: 170px;
    }
    
    @media (max-width:480px) {
       
       
        .Qr-code img {
            width: 140px;
            height: 140px;
        }
        .Qr-code {
            display: block;
            margin: 0;
          
            padding-top: 40px;
            left: 0;
            width: 100%;
        }
        .Qr-code ul {
            padding: 10px;
            width: 80%;
        }
        .Qr-code h3 {
            font-size: 3vw;
        }
     
    }
</style>




@section('body')

   

 <!-- content @s -->
 <div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="nk-block-head">
                                


                             
                                <!-- .nk-block-between -->
                            </div>
                            <!-- .nk-block-head -->
                            <div class="nk-block">

                                <!-- WARNING -->


                                <div class="row gy-gs">
                                    <div class="col-lg-8">
                                        <div class="nk-block">
                                            
                                            <!-- .nk-block-head -->



                                            <!-- .nk-block -->
                                        </div>
                                        <!-- .nk-block -->
                                    
                                </div>



                                <!-- .row -->
                            </div>
                            <!-- .nk-block -->
                       

  
    <!-- .tranx-item -->

  
 
    <!-- .tranx-item -->



    <!-- end erher -->
                                            
                                          
                                            <!-- .tranx-item -->
                                         
                                            <!-- .tranx-item -->


                                        </div>
                                        <!-- .tranx-list -->

                                        <!-- strt ahere -->


                                    </div>
                                    <!-- .col -->















                                    <div class="mb-4"></div>
    <div class="container-max">
        <div class="col-lg-12 mb-5">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <h3 class="mb-3 font-weight-bold">List for sale</h3>
                    <div class="mb-4">
                        <h5 class="mb-4 mt-5 font-weight-bold">Choose a type of sale</h5>
                    </div>
                    <div class="mb-4">
                        <h5 class="mb-4 font-weight-bold">Set a price</h5>

                        <p>Starting price</p>
                        <input type="text" class="form-control" name="" id="">
                    </div>
                    <div class="mb-4">
                        <h5 class="mb-4 font-weight-bold">Duration</h5>
                        <input type="text" class="form-control" name="" id="">
                    </div>
                    <div class="mb-4">
                        <h5 class="mb-4 font-weight-bold">Summary</h5>
                        <div class="flex">
                            <div>Listing price</div>
                            <div>0.0765 ETH</div>
                        </div>
                        <hr>
                        <div class="flex">
                            <div>OpenSea fee</div>
                            <div>0.5% </div>
                        </div>
                        <hr>
                        <div class="flex">
                            <div>Creator earnings</div>
                            <div>0%</div>
                        </div>
                        <hr>
                        <div class="flex mb-4">
                            <div class="h4 text-dark font-weight-bold">Total potential earnings</div>
                            <div class="h4 text-dark font-weight-bold">0.0746 ETH</div>
                        </div>

                        <button class="btn btn-primary btn-block">Complete Listing</button>
                    </div>
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <a class="card" href="/collection">
                        <img src="https://axieslaravel.themesflat.co/images/box-item/card-item8.jpg" alt="">
                        <span class="p-3">
                            <h5 class="font-weight-bold h6">Food NFT #4</h5>
                            <h5 class="font-weight-bold h6 text-muted">Shivaji</h5>
                        </span>
                    </a>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>

    </div>







                                   
                                    <!-- .col -->
                                </div>
                                <!-- .row -->
                            </div>












                        </div>
                    </div>
                </div>
                <!-- content @e -->


                

                
@endsection
