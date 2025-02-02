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
                                <div class="nk-block-head-sub"><span>Welcome!  </span>
                                </div>


                                <div class="nk-block-between-md g-4">
                                    <div class="nk-block-head-content">
                                        <h2 class="nk-block-title fw-normal">{{ Auth::user()->name }}</h2>
                                        <div class="nk-block-des">
                                            <!-- <p>At a glance summary of your account. Have fun!</p> -->
                                        </div>

                                    </div>
                                    <!-- .nk-block-head-content -->
                                    <!-- <div class="nk-block-head-content">
                                        <ul class="nk-block-tools gx-3">
                                            
                                            <li><a href="#" data-toggle="modal" data-target="#sendFunds" class="btn btn-white btn-primary"><span>Deposit </span></a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#receiveFunds" class="btn btn-dark"><span>Withdraw </span> </a></li>
                                            <li class="opt-menu-md dropdown">
                                                <a href="#" class="btn btn-white btn-light btn-icon" data-toggle="dropdown"><em class="icon ni ni-setting"></em></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <ul class="link-list-opt no-bdr">

                                                        <li><a href="settings"><em class="icon ni ni-notify"></em><span>Change Password</span></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div> -->
                                    <!-- .nk-block-head-content -->
                                </div>
                                <!-- .nk-block-between -->
                            </div>
                            <!-- .nk-block-head -->
                            <div class="nk-block">

                                <!-- WARNING -->


                                <div class="row gy-gs">
                                    <div class="col-lg-8">
                                        <div class="nk-block">
                                            
                                            <!-- .nk-block-head -->


                                            <div class="nk-block">
    <div class="card card-bordered text-light is-dark h-100">
        <div class="card-inner">
            <div class="nk-wg7 d-flex justify-content-between align-items-center">
                <!-- Account Balance Section -->
                <div class="nk-wg7-stats">
                    <div class="nk-wg7-title" style="color: antiquewhite;">Account Balance</div>
                    <div class="number-lg amount">
                        $ {{ number_format($funds->currentprofit + $funds->balance + $funds->bonus, 2, '.', ',') }}
                    </div>
                </div>

                <!-- Buttons Section -->
                <ul class="list-inline d-flex mb-0" style="gap: 20px; list-style: none; padding-left: 0; margin-top: 10px;">
                    <li>
                        <a href="#" data-toggle="modal" data-target="#sendFunds" class="btn btn-white btn-primary">
                            <span>Deposit</span>
                        </a>
                    </li>
                    <li>
                        <a href="createnft" data-toggle="#" data-target="#" class="btn btn-white">
                            <span>Mint</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#receiveFunds" class="btn btn-white">
                            <span>Withdraw</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- .nk-wg7 -->
        </div>
        <!-- .card-inner -->
    </div>
    <!-- .card -->
</div>












                                            
                                            <!-- .nk-block -->
                                        </div>
                                        <!-- .nk-block -->
                                    
                                </div>



                                <div class="col-lg-4">
                                        <div class="nk-block">
                                            
                                            <!-- .nk-block-head -->



                                            <div class="nk-block">
                                                <div class="card card-bordered text-dark is-light h-100">
                                                    <div class="card-inner">
                                                        <div class="nk-wg7">
                                                            <div class="nk-wg7-stats">
                                                            <div class="nk-wg7-title" style="color: black;">Ethereum Balance</div>

@php
    // Fetch the real-time ETH price
    $response = Http::get('https://api.coingecko.com/api/v3/simple/price', [
        'ids' => 'ethereum',
        'vs_currencies' => 'usd'
    ]);
    
    $ethPrice = $response->successful() ? $response->json()['ethereum']['usd'] : 2000; // Default value if API fails
    
    $totalBalanceUSD = $funds->currentprofit + $funds->balance + $funds->bonus;
    $totalBalanceETH = $totalBalanceUSD / $ethPrice;
@endphp

<div class="number-lg amount">
    <img src="{{ asset('assets/images/eth-logo.png') }}" alt="ETH" style="width: 35px; vertical-align: middle;"/> 
    {{ number_format($totalBalanceETH, 4, '.', ',') }} eth
</div>

                                                                </div>



                                                            </div>




                                                           
                                                        </div>
                                                        <!-- .nk-wg7 -->
                                                    </div>
                                                    <!-- .card-inner -->
                                                </div>
                                                <!-- .card -->
                                            </div>
                                            <!-- .nk-block -->
                                        </div>
                                        <!-- .nk-block -->
                                    
                                </div>



                                <!-- .row -->
                            </div>
                            <!-- .nk-block -->
                       


















<div class="nk-block nk-block-lg">
    <div class="row gy-gs">
        <div class="col-md-6">
            <div class="card-head">
                <div class="card-title mb-0">
                    <h5 class="title">Recent Transactions</h5>
                </div>
                <div class="card-tools">
                    <ul class="card-tools-nav">
                        <!-- Optional: Add link to view all transactions -->
                    </ul>
                </div>
            </div>
            <!-- .card-head -->
            <div class="tranx-list card card-bordered">
                <!-- Loop through transactions -->
                @if ($txns && $txns->count() > 0)
                    @foreach ($txns as $txn)
                        <div class="tranx-item">
                            <div class="tranx-col">
                                <div class="tranx-info">
                                    <div class="tranx-data">
                                        <div class="tranx-label">
                                            {{ ucfirst($txn->txn_type) }} <em class="tranx-icon sm icon ni ni-shield-check-fill"></em>
                                        </div>
                                        <div class="tranx-date">{{ Carbon\Carbon::parse($txn->created_at)->diffForHumans() }}</div>
                                    </div>
                                </div>
                            </div>
                            <div class="tranx-col">
                                <div class="tranx-amount">
                                    <div class="number">$ {{ number_format($txn->amount, 2) }}</div>
                                    <!-- If you want to add some status, you can -->
                                    <div class="number-sm"><span style="color: green;">Success</span></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No transactions yet</p>
                @endif
                <!-- .tranx-item -->
            </div>
            <!-- .tranx-list -->
        </div>
        <!-- .col -->
    </div>
    <!-- .row -->
</div>























                        
                          
                            <!-- .nk-block -->
                            <div class="nk-block">
                                <div class="card card-bordered">
                                    <div class="card-inner card-inner-lg">
                                        <div class="align-center flex-wrap flex-md-nowrap g-4">
                                            <div class="nk-block-image w-120px flex-shrink-0">

                                            

                                            <img class="rounded-circle" src="https://axieslaravel.themesflat.co/images/box-item/img-collection10.jpg" alt="logo">

                                                <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                                    <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                                                    <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                                    <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                    <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="green" />
                                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="green" />
                                                    <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                                    <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                    <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                    <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                    <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                    <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                </svg> -->
                                            </div>
                                            <div class="nk-block-content">
                                                <div class="nk-block-content-head px-lg-4">
                                                    <h5>Create Your own NFT</h5>
                                                    <p class="text-soft">Buy and sell top performing NFTs from top artists on our platform. Terms and Conditions apply. </p>
                                                </div>
                                            </div>
                                            <div class="nk-block-content flex-shrink-0">
                                                <a href="/createnft" class="btn btn-lg btn-outline-primary">Create Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .card-inner -->
                                </div>
                                <!-- .card -->
                            </div>
                            <!-- .nk-block -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->


                

                
@endsection
