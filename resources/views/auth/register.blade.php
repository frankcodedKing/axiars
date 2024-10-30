@extends('layouts.customlayout')

@section('body')
 


    <!-- Responsive Login Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">


                    <form method="POST" action="{{ route('register') }}">
                   @csrf

                    <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Username</label> -->
                     <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter username">
                     
                   </div>
                   <br>

                   <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Name</label> -->
                     <input id="name" class="form-control"  type="text"
                     class="form-control @error('name') is-invalid @enderror" name="name"
                     placeholder="Enter Name" value="{{ old('name') }}" required
                     autocomplete="name">
                 @error('name')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror

                     
                   </div>
                   <br>

                    <div class="form-group" style="margin-top: 5px;">
                     <!-- <label for="exampleInputEmail1">Email address</label> -->
                     <input id="email" type="email" 
                     class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Email"
                     value="{{ old('email') }}" required autocomplete="email" id="email">

                 @error('email')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror                      
                   </div>
                   <br>
                    
                   <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Phone</label> -->
                     <input id="phone" class="form-control" type="phone"
                     placeholder="Phone Number" class="form-control" name="phone" required
                     autocomplete="phone">
                   </div>
<br>
                   <div class="form-group">
                     <!-- <label for="exampleInputPassword1">Password</label> -->
                     <input id="password" type="password" placeholder="Password"
                     class="form-control @error('password') is-invalid @enderror"
                     name="password" required autocomplete="new-password">

                 @error('password')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
                 @enderror                    </div>
                   <br>
                  
                   <div class="form-group">
                     <!-- <label for="exampleInputPassword1">Confirm Password</label> -->
                     <input id="password-confirm" type="password" class="form-control"
                     placeholder="Confirm Password" name="password_confirmation" required
                     autocomplete="new-password">                    </div>
                   <br>
                
                <div class="form-group">
                     <!-- <label for="exampleInputEmail1">Refferal id</label> -->
                     <input type="text" class="form-control" name="refid" id="exampleInputEmail1" value="@php
                     if (isset($_GET['refid'])) {
                         echo $_GET['refid'];
                     }
                 @endphp"
                         placeholder="Referral ID" />
                   </div>

                   <br>

                   <!-- <div class="form-group">
                     <label for="exampleInputEmail1">Account Type</label>
                     <br>
                     <select id="account" class="form-control" name="account">
                         <option value="individual">Individual</option>
                         <option value="joint">Joint</option>
                        
                     </select><br><br>
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                   </div>
                   
<br> -->
                   <button type="submit" class="btn btn-primary btn-lg" style="width: 50%;">
                    Sign up
                   </button>
                 </form>
                        




                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>


      @endsection
