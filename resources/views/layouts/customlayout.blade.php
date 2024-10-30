

<!doctype html>
<html lang="en">
  <head>




    <meta charset="UTF-8">
    
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
   
    <title>Axiars</title>

    <style>

html, body {
    height: 100%;
    margin: 0;
}

body {
    display: flex;
    flex-direction: column;
}

footer {
    margin-top: auto;  /* Pushes the footer to the bottom */
}


    </style>


  </head>




  
<body>
    <div id="header">
        <nav class="navbar navbar-expand-lg navbar-light nav-pad">
            <a href="/">
                <img src="{{ asset('assets/images/axlogo.png') }}" alt="" class="logo">
            </a>
        
            <!-- Hamburger Menu Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <!-- Navbar Links and Other Content -->
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto ml-4">
                    <li class="nav-item mx-2"><a class="text-dark font-weight-bold nav-link" href="/drops.html">Drops</a></li>
                    <li class="nav-item mx-2"><a class="text-dark font-weight-bold nav-link" href="/stats.html">Stats</a></li>
                    <li class="nav-item mx-2"><a class="text-dark font-weight-bold nav-link" href="/create.html">Create</a></li>
                </ul>
        
                <!-- Search Box in the center (optional on small screens) -->
                <span class="mx-auto">
                    <div class="search-box">
                        <span class="icon">
                            <i class="fa fa-search"></i>
                        </span>
                        <input type="text" name="search" id="search" class="search" placeholder="Search" />
                        <span class="right"> </span>
                    </div>
                </span>
        
                <!-- User, ETH Info, and Cart Buttons -->
                <span class="navbar-text">
                    <a class="btn main-btn" href="/login">

                    <i class="px-2 fa fa-credit-card"></i>
                        Login  <span class="text-muted px-2"> </span>

                        <!-- <i class="px-2 fa fa-credit-card"></i>
                        1.439 ETH <span class="text-muted px-1">|</span>
                        0.2 WETH -->
                    </a>
                    <a class="btn main-btn" href="/account.html">
                        <!-- <img src="https://i.seadn.io/s/raw/files/d41a9f52c66cc36c269d49f4b6c76651.jpg?auto=format&dpr=1&w=1920" /> -->

                        <img src="https://axieslaravel.themesflat.co/images/avatar/avt-2.jpg" />
                        <!-- https://axieslaravel.themesflat.co/images/avatar/avt-2.jpg -->
                    </a>
                    <a class="btn main-btn">
                        <i class="px-2 fa fa-shopping-cart"></i>
                    </a>
                </span>
            </div>
        </nav>


        
    </div>







    
    <br>
    <br>
  


        <!-- Body Section Start-->

        <!-- Body Section Start-->

        <!-- Body Section Start-->



        @yield("body")




            <!-- Body Section End -->

            <!-- Body Section End -->

            <!-- Body Section End -->





    <br>

    <br>
    

    <!-- Footer Section -->
<footer class="bg-dark text-white pt-4 pb-2">
    <div class="container">
        <div class="row">
            <!-- Footer Column 1: Logo and About Text -->
            <div class="col-lg-6 col-md-6 col-sm-12">
                <a href="/" class="text-white text-decoration-none">
                    <img src="{{ asset('assets/images/axlogo.png') }}" alt="Logo" class="logo" style="width: 150px;">
                </a>
                <p class="mt-3">Your favorite NFT marketplace, bringing the digital world closer to you.</p>
            </div>

            <!-- Footer Column 2: Links (Terms and Privacy) -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li>
                        <a href="/terms.html" class="text-white text-decoration-none">Terms of Service</a>
                    </li>
                    <li>
                        <a href="/policy.html" class="text-white text-decoration-none">Privacy Policy</a>
                    </li>
                </ul>
            </div>

            <!-- Footer Column 3: Contact and Social Links -->
            <div class="col-lg-3 col-md-6 col-sm-12">
                <h5>Contact Us</h5>
                <ul class="list-unstyled">
                    <li><a href="mailto:info@axiars.com" class="text-white text-decoration-none">info@axiars.com</a></li>
                    <li><a href="#" class="text-white text-decoration-none"><i class="fa fa-facebook px-2"></i> Facebook</a></li>
                    <li><a href="#" class="text-white text-decoration-none"><i class="fa fa-twitter px-2"></i> Twitter</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom Text -->
        <div class="row mt-3">
            <div class="col text-center">
                <p class="mb-0">&copy; 2024 www.axiars.com All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>





</html>