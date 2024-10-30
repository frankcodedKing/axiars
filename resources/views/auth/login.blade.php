@extends('layouts.customlayout')
@section('body')







    <!-- Responsive Login Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Input -->
    <div class="form-group">
        <label for="email">Email</label>
        <input id="email" type="email" 
            class="form-control @error('email') is-invalid @enderror" 
            name="email" 
            placeholder="Enter Email" 
            value="{{ old('email') }}" 
            required autocomplete="email">
        
        <!-- Display email error -->
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <!-- Password Input -->
    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" type="password" 
            placeholder="Password"
            class="form-control @error('password') is-invalid @enderror" 
            name="password" 
            required autocomplete="current-password">
        
        <!-- Display password error -->
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <!-- Registration Link -->
    <p>No account yet? <strong><a href="{{ route('register') }}">Register</a></strong></p>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary btn-block">Login</button>
</form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>








                               @endsection
