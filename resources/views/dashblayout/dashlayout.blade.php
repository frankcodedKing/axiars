<!DOCTYPE html>

<html lang="en" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Axiars Develoers">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Axiars, swap, buy non fungible tokens, send and receive crypto">
    <meta name="google-site-verification" content="4RwsTb_q_dFIGY603ezW066uisT4s33hYWt4hJ0z4mg" />
    <!-- Fav Icon  -->
    <!-- Page Title  -->
    <title>Axiars</title>
    <!-- StyleSheets  -->
    <!-- {{asset('dashb/cordash/assets/css/demo_3/style.css')}} -->


    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
        integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" type="image/png" href="{{ asset('assets/images/axicon.png') }}">

        

        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
        </script>
    
    <link rel="stylesheet" href="{{ asset('dashb/cordash/assets/dashboard/css/dashlite.css?ver=2.5.0') }}">

    <!-- <link rel="stylesheet" href="{{asset('dashb/cordash/assets/dashboard/css/dashlite.css?ver=2.5.0')}}"> -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link id="skin-default" rel="stylesheet" href="{{ asset('dashb/cordash/assets/dashboard/css/theme.css?ver=2.5.0') }}">
    <link href="{{ asset('dashb/cordash/assets/dashboard/css/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
    <!--<link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic:wght@700&display=swap" rel="stylesheet">-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap" rel="stylesheet">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>



</head>

<style>
    .offscreen {
        position: absolute;
        left: -999em;
    }

    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }
    .logo-dark {
            /* Apply a scale transformation to double the size */
            transform: scale(2);
            /* You might also want to adjust the margins if needed */
            margin: 50px;
        }

</style>

<body class="nk-body npc-crypto bg-white has-sidebar " id="darkSwitch">
@include('sweetalert::alert')
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="dashboard" class="logo-link nk-sidebar-logo">
                            <!-- <img class="logo-light logo-img" src="https://aspen-fm.com/assets/images/logo/logo.png" srcset="https://aspen-fm.com/assets/images/logo/logo.png 2x" alt="logo"> -->
                            <img class="logo-dark logo-img" src="{{ asset('assets/images/axlogo.png') }}" alt="logo-dark" style="
                            width: 100px;
                        ">
                            <!-- <span class="nio-version">Aspen-FM</span> -->
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- .nk-sidebar-element -->
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-body" data-simplebar>
                        <div class="nk-sidebar-content">
                            
                            <!-- .nk-sidebar-widget -->
                           
                            <!-- .nk-sidebar-widget -->
                            <div class="nk-sidebar-menu">
                                <!-- Menu -->
                                <ul class="nk-menu">
                                    <li class="nk-menu-heading">
                                        <h6 class="overline-title">Menu</h6>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('dash_index')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-saving"></em></span>
                                            <span class="nk-menu-text">Account Summary</span>
                                        </a>
                                    </li>
                                    <!-- <li class="nk-menu-heading">
                                        <h6 class="overline-title">Invest</h6>
                                    </li> -->
                                    <li class="nk-menu-item">
                                        <a href="{{route('collection')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                            <span class="nk-menu-text">My Collection</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="{{route('createnft')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-edit"></em></span>
                                            <span class="nk-menu-text">Create NFT</span>
                                        </a>
                                    </li>
                                    <!-- <li class="nk-menu-heading">
                                        <h6 class="overline-title">History</h6>
                                    </li> -->
                                    <!-- <li class="nk-menu-item">
                                        <a href="{{route('dash_history')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-clipboard"></em></span>
                                            <span class="nk-menu-text">Transaction History</span>
                                        </a>
                                    </li> -->
                                    <li class="nk-menu-item">
                                        <a href="{{route('marketplace')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-opt-alt"></em></span>
                                            <span class="nk-menu-text">Marketplace</span>
                                        </a>
                                    </li>
                                    <!-- <li class="nk-menu-heading">
                                        <h6 class="overline-title">Account</h6>
                                    </li>
                                    <li class="nk-menu-item">

                                        <li class="nk-menu-item">
                                            <a href="{{route('dashb_profile')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user-c"></em></span>
                                            <span class="nk-menu-text">Profile</span>
                                        </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('dashb_referrals_view')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                            <span class="nk-menu-text">Referrals</span>
                                        </a>
                                        </li>

                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{route('dash_kyc')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-user"></em></span>
                                            <span class="nk-menu-text">KYC</span>
                                        </a>
                                        </li> -->
                                        <!-- <li class="nk-menu-item">
                                            <a href="{{route('dash_logs')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                            <span class="nk-menu-text">Log Activities</span>
                                        </a>
                                        </li> -->
                                        <li class="nk-menu-item">
                                            <a href="{{route('dash_settings')}}" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                            <span class="nk-menu-text"> Account Security</span>
                                        </a>
                                        </li>


                                        <li class="nk-menu-heading">
                                            <h6 class="overline-title">Auth</h6>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="/logout" class="nk-menu-link">
                                            <span class="nk-menu-icon"><em class="icon ni ni-unlock-fill"></em></span>
                                            <span class="nk-menu-text">Log Out</span>
                                        </a>
                                        </li>

                                </ul>
                                <!-- .nk-menu -->
                            </div>
                            <!-- .nk-sidebar-menu -->
                          
                            <!-- .nk-sidebar-widget -->
                          
                            <!-- .nk-sidebar-footer -->
                        </div>
                        <!-- .nk-sidebar-content -->
                    </div>
                    <!-- .nk-sidebar-body -->
                </div>
                <!-- .nk-sidebar-element -->
            </div>
            <!-- sidebar @e -->


            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->





                
                <div class="nk-header nk-header-fluid nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ml-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="dashboard" class="logo-link">
                                    <img class="logo-light logo-img" style="width: 70px; padding-top: 6px;" src="https://aspen-fm.com/assets/images/logo/logo.png" srcset="https://aspen-fm.com/assets/images/logo/logo.png 2x" alt="logo">
                                    <!-- <img class="" src="https://aspen-fm.com/assets/images/logo/logo.png" srcset="https://aspen-fm.com/assets/images/logo/logo.png" alt="logo-dark"> -->
                                    <!-- <span class="nio-version">CoinConcord</span> -->
                                </a>
                            </div>
                        
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <!-- <div class="user-avatar sm"> -->
                                                    <!-- <em class="icon ni ni-user-alt"></em> -->
                                                <!-- </div> -->
                                                <!-- <div class="user-info d-none d-md-block">

                                                    <div class="user-status user-status-unverified"> Account Statistics</div>
                                                    <div class="user-name"> <strong> {{Auth::user()->adminmessage != null? Auth::user()->adminmessage :0 }}/4</strong> </div>
                                                </div> -->
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>
                                                            J                                                        </span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ Auth::user()->name }}</span>
                                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner user-account-info">
                                                <h6 class="overline-title-alt">Aspen FM Wallet Account</h6>
                                                <div class="user-balance">0.00 <small class="currency currency-btc">USD</small></div>

                                                <a href="#" data-toggle="modal" data-target="#receiveFunds" class="link"><span>Receive Funds</span> <em class="icon ni ni-wallet-out"></em></a>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="profile"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="settings"><em class="icon ni ni-setting-alt"></em><span>Account Settings</span></a></li>
                                                    <li><a href="logs"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="https://coinconcord.com/Main/logoutUser"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown notification-dropdown mr-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                                            <!-- <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div> -->
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>

                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">
                                                    <div class="nk-notification-item dropdown-inner">
                                                        <div class="nk-notification-icon">
                                                            <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                        </div>
                                                        <div class="nk-notification-content">
                                                            <div class="nk-notification-text">You have created a <span>Axiars</span> account</div>
                                                            <div class="nk-notification-time">Date: 15th October 2024</div>
                                                        </div>
                                                    </div>
                                                    <!-- .dropdown-inner -->



                                                </div>
                                            </div>
                                            <!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center">
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header @e -->

                <br><br><br>
        @include("flash-message")


        @yield("body")

        @yield('flash-message')


                <!-- footer @s -->
                <div class="nk-footer nk-footer-fluid">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2024 Axiars. All rights reserved
                            </div>
                            <!-- <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item"><a class="nav-link" href="terms" target="_blank">Terms</a></li>
                                    <li class="nav-item"><a class="nav-link" href="privacy" target="_blank">Privacy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="help" target="_blank">Help</a></li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->


    <script>
        if (localStorage.getItem('isDarkMode') === 'enabled') {

            document.getElementById('darkSwitch').classList.add('dark-mode');
        }
    </script>
    <script>
        function copyRef() {
            /* Get the text field */
            var copyText = document.getElementById("refData");

            /* Select the text field */
            copyText.select();
            copyText.setSelectionRange(0, 99999); /* For mobile devices */

            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.value);

            /* Alert the copied text */
            alert("Referral Link copied to clipboard!: " + copyText.value);
        }

        function engageConversion() {
            var cryptoSelect = document.getElementById("cryptoSelect");
            var usdAmt = document.getElementById('usdAmount').value;
            var cryptoVal = document.getElementById('cryptoValue');

            if (document.getElementById("cryptoSelect").value == "btc") {
                var curRate = 26172.6;
            } else if (document.getElementById("cryptoSelect").value == "eth") {
                var curRate = 1673.15;
            } else if (document.getElementById("cryptoSelect").value == "bch") {
                var curRate = 179.14;
            } else if (document.getElementById("cryptoSelect").value == "bnb") {
                var curRate = 324.9999;
            } else if (document.getElementById("cryptoSelect").value == "usdt") {
                var curRate = 1;
            } else {
                var curRate = 0;
            }

            var vResult = usdAmt / curRate;
            var roundedFig = vResult.toFixed(4);
            document.getElementById('cryptoValue').value = roundedFig;

        }
    </script>





    <!-- Modal Form -->

    <!-- MODAL DEPOSIT -->

    <div class="modal fade" tabindex="-1" id="sendFunds">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Deposit funds to account</h5>

                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">


          



























                <form action="{{ route('dashb_depositsubmit') }}" method="POST">
    @csrf

    <!-- Amount Input Section -->
    <div class="inputfile">
        <label class="my-1 me-2" for="">Amount To Deposit (in USD):</label>
        <input type="number" class="form-control" style="color: black" id="usdAmount" value="" required
            name="amount" placeholder="Amount" aria-describedby="amount"><br>
    </div>

    <!-- Crypto Selection -->
   

    <!-- ETH Address Section -->
    <p style="font-weight: 700;">Ethereum Address</p>
    <div class="codetext">
        <div class="d-flex align-items-center">
            <h4 id="ethAddress">0xe63address</h4>
            <button id="copyButton" type="button" class="btn btn-outline-primary ms-2">Copy</button>
        </div>
        <ul>
            <small>Important:</small>
            <li>Send only the required Ethereum amount to your eth address.</li>
            <li>Sending any other currency to this address may result in loss of funds.</li>
        </ul>
    </div>

    <!-- ETH Equivalent Amount -->
    <div class="mb-4">
        <label class="form-label">Amount in ETH:</label>
        <input type="text" id="ethAmount" class="form-control" readonly>
    </div>

    <!-- Submit Button -->
    <button type="submit" style="width:30%;background: green; color:white; border-radius:10px; border:none;padding:10px;">
        Submit
    </button>
</form>





            
         
                </div>



         
            </div>
        </div>
    </div>


    <!-- IF ADDRESS HERR -->

   

            <!-- IF HERER -->
            

    <!-- MODAL WITHDRAW -->
    <div class="modal fade" tabindex="-1" id="receiveFunds">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Receive Funds To Account</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">

                <form action="{{ route('userdashb_withdrawal_post') }}" method="post">

        @csrf

        <div class="card" style="width:80%;margin:auto;">
            <div class="card-body">

               
                <div class="">

                    <div class="mb-2">
                    <label class="form-label">Enter Amount:</label>

                        <input type="text" class="form-control" id="amount" value="" required name="amount"
                            placeholder="Enter Withdraw Amount" aria-describedby="amount" style="background: white;"><br>

                    </div>
                    

                    <!-- <div class="mb-4">
                    <label class="form-label">Select Account to withdraw from:</label>
                        <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;">
                        <select class="form-control" name="from" id="">
                        <option value="dividend">Dividend</option>
                            <option value="referral">Referral Bonus</option>
                      </select> 
                    </div> -->


                    <input type="text" class="form-control" id="methodAccount" required value="" name="address"
                        placeholder="Your Ethereum Address" aria-describedby="amount" style="background: black;"><br>
                    <br>

                </div>
<!-- 
                <div class="mb-4 btc-display2">
                    <p style="color: black;">Address Type*</p>
                    <select name="ercaddresstype" id="address" style="cursor: pointer;">
                        <option value="">select </option>
                        <option value="legacy">ERC20</option>

                    </select>
                </div> -->

                <div class="nothingday"></div>
                {{-- <a href="#" class="btn btn-primary">Withdraw</a> --}}
                <button type="submit" class="btn btn-primary" style="color:white; border-radius:5px; border:none;padding:10px;"> Withdraw  </button>
            </div>
        </div>

    </form>

                    <hr/>
                    <div class="currentInfo"></div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Powered By Axiars Systems</span>
                </div>
            </div>
        </div>
    </div>


    <!-- compoun funds -->


    <div class="modal fade" tabindex="-1" id="compoundFunds">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Compound your Earnings</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">

                <form action="{{ route('userdashb_compound_post') }}" method="post">

        @csrf

        <div class="card" style="width:80%;margin:auto;">
            <div class="card-body">

               
                <div class="">

                    <div class="mb-2">
                    <label class="form-label">Enter Amount:</label>

                        <input type="text" class="form-control" id="amount" value="" required name="amount"
                            placeholder="Enter Amount" aria-describedby="amount" style="background: white;"><br>

                    </div>
                  

                    <div class="mb-4">
                    <label class="form-label">Select Account to compound from:</label>
                        <!-- <input type="text" value="BTC" class="form-control" id="mainval" name="method" readonly style="background: white;"> -->
                        <select class="form-control" name="from" id="">
                        <option value="dividend">Dividend</option>
                            <option value="referral">Referral Bonus</option>
                      </select> 
                    </div>


                  

                </div>

               
                <div class="nothingday"></div>
                {{-- <a href="#" class="btn btn-primary">Withdraw</a> --}}
                <button type="submit" class="btn btn-success" style="color:white; border-radius:5px; border:none;padding:10px;"> Compound  </button>
            </div>
        </div>

    </form>

                    <hr/>
                    <div class="currentInfo"></div>
                </div>
                <div class="modal-footer bg-light">
                    <span class="sub-text">Powered By Axiars Systems</span>
                </div>
            </div>
        </div>
    </div>

    

   








<!-- UPLOAD SCRIPT -->



<script>



        function removeImg() {
            const textSection = document.getElementById("text-section");
            const previewContainer = document.getElementById("dragdrop");
            const removeBtn = document.getElementById("remove-btn");
            textSection.style.display = "";
            removeBtn.style.display = "none";
            previewContainer.style.backgroundImage = "url()";
        }

        document.addEventListener("DOMContentLoaded", () => {
            const dropArea = document.getElementById("dragdrop");
            const fileInput = document.getElementById("media");
            const previewContainer = document.getElementById("dragdrop");
            const textSection = document.getElementById("text-section");
            const removeBtn = document.getElementById("remove-btn");

            dropArea.addEventListener("click", () => {
                fileInput.click();
            });
            // Prevent default drag behaviors
            ["dragenter", "dragover", "dragleave", "drop"].forEach((eventName) => {
                dropArea.addEventListener(eventName, (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                });
            });

            // Highlight drop area when a file is dragged over it
            ["dragenter", "dragover"].forEach((eventName) => {
                dropArea.addEventListener(eventName, () => {
                    dropArea.classList.add("highlight");
                });
            });

            ["dragleave", "drop"].forEach((eventName) => {
                dropArea.addEventListener(eventName, () => {
                    dropArea.classList.remove("highlight");
                });
            });

            // Handle dropped files
            dropArea.addEventListener("drop", (e) => {
                const files = e.dataTransfer.files;
                handleFiles(files);
            });

            // Handle file input change
            fileInput.addEventListener("change", (e) => {
                const files = e.target.files;
                handleFiles(files);
            });

            function handleFiles(files) {
                if (!files || files.length === 0) return;

                [...files].forEach((file) => {
                    if (file.type.startsWith("image/")) {
                        const reader = new FileReader();
                        reader.onload = () => {
                            const img = new Image();
                            // img.src = reader.result;
                            // img.classList.add("img-preview");
                            // previewContainer.appendChild(img);
                            previewContainer.style.backgroundImage = "url("+reader.result+")";
                            previewContainer.style.backgroundSize = "cover"

                            textSection.style.display = "none";
                            removeBtn.style.display="block"
                        };
                        reader.readAsDataURL(file);
                    } else {
                        console.log(`${file.name} is not a valid image file.`);
                    }
                });
            }
        });

    </script>






<!-- JavaScript to handle copy and real-time ETH conversion -->
<script>
    // Click-to-Copy ETH Address Functionality
    document.getElementById("copyButton").addEventListener("click", function() {
        var ethAddress = document.getElementById("ethAddress").innerText;
        navigator.clipboard.writeText(ethAddress).then(function() {
            alert("ETH address copied: " + ethAddress);
        }).catch(function(err) {
            alert("Failed to copy address: " + err);
        });
    });

    // Real-time ETH Conversion Functionality
    async function fetchEthPrice() {
        try {
            let response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=ethereum&vs_currencies=usd');
            let data = await response.json();
            return data.ethereum.usd;
        } catch (error) {
            console.error("Error fetching ETH price:", error);
        }
    }

    document.getElementById("usdAmount").addEventListener("input", async function() {
        let usdAmount = parseFloat(this.value);
        if (!isNaN(usdAmount)) {
            let ethPrice = await fetchEthPrice();
            let ethAmount = (usdAmount / ethPrice).toFixed(6);
            document.getElementById("ethAmount").value = ethAmount;
        } else {
            document.getElementById("ethAmount").value = '';
        }
    });
</script>



    






<!-- {{asset('dashb/cordash/assets/css/demo_3/style.css')}} -->
    <script src="{{asset('dashb/cordash/assets/dashboard/js/bundle.js?ver=2.5.0')}}"></script>
    <script src="{{asset('dashb/cordash/assets/dashboard/js/scripts.js?ver=2.5.0')}}"></script>
    <script src="https://www.cryptohopper.com/widgets/js/script"></script>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  


</body>

</html>