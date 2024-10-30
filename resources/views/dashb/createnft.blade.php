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











                                    <!-- <div class="mb-4"></div> -->


<div class="container-max">
    <div class="col-lg-12 my-5">
        <div class="row">
            <div class="col-lg-5">

            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- <form method="POST" action="{{ route('storeNFT') }}" enctype="multipart/form-data"> -->

               
                <form method="POST" action="{{ route('storeUpload') }}" enctype="multipart/form-data">
                    @csrf

                    <h3 class="font-weight-bold">Create an NFT</h3>
                <p>Once your item is minted you will not be able to change any of its information.</p>
                <div>
                    <button class="remove-img-btn" id="remove-btn" onclick="removeImg()">
                        <i class="fa fa-trash"></i>
                    </button>
                    <div class="dragdrop justify-content-center mainbox" id="dragdrop">
                        <section class="text-center" id="text-section">
                            <input id="media" name="image" type="file" tabindex="-1" style="display: none;"
                                accept="image/*">
                            <i class="fa fa-upload mb-3" style="font-size: 26px;"></i>
                            <p class="mb-0" style="font-size: 16px;font-weight: 600;">Drag and drop media</p>
                            <p class="mb-0" style="font-size: 14px;font-weight: 600;color: #007aff;">Browse files</p>
                            <p class="mb-0" style="font-size: 14px;">Max size: 50MB</p>
                            <p class="mb-0" style="font-size: 14px;">JPG, PNG, GIF, SVG, MP4</p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5" style="margin-top: 150px;">
                
                    <div class="form-group mt-0">
                        <h6 class="font-weight-bold">Name *</h6>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group mt-4" style="display: none;">
                        <h6 class="font-weight-bold">Supply *</h6>
                        <input type="hidden" class="form-control" name="supply" value="1" required>
                    </div>

                    <div class="form-group mt-4">
                        <h6 class="font-weight-bold">Price * ($)</h6>
                        <input type="number" class="form-control" name="price" min="0" step="0.01" required>
                    </div>

                    <div class="form-group mt-4">
                        <h6 class="font-weight-bold">Description *</h6>
                        <textarea type="text" class="form-control" name="description" required></textarea>
                    </div>
                    <div class="form-group mt-4">
                        <h6 class="font-weight-bold">Traits</h6>
                        <p>Traits describe attributes of your item. They appear as filters inside your collection page
                            and are also listed out inside your item page.</p>
                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-white btn-primary">Upload</button>
                    </div>
                </form>
            </div>
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
