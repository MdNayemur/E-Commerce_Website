@extends('layouts.adminlayout')

    @section('body')
 <div class="d-flex align-items-center justify-content-center bg-br-primary ht-100v">

<div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white rounded shadow-base">
  <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> Admin <span class="tx-info">plus</span> <span class="tx-normal">]</span></div>
  <div class="tx-center mg-b-40">The Admin Template For Perfectionist</div>

     <!-- Validation Errors -->
     <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

         <!-- Full Name -->
         <div class="form-group">

            <x-input id="fname" class="form-control" placeholder="Enter Your Full Name" type="text" name="fname" :value="old('fname')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="mt-4 form-group">

            <x-input id="email" class="form-control" placeholder="Enter Email" type="email" name="email" :value="old('email')" required />
        </div>
        <div class="mt-4 form-group">
        <x-input id="role" class="form-control" placeholder="Enter role" type="hidden" name="role" :value="1" required />

         </div>
      

        <!-- Password -->
        <div class="mt-4 form-group">


            <x-input id="password" placeholder="Enter Password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4 form-group">

            <x-input id="password_confirmation" placeholder="Enter Confirm Password" class="form-control"
                            type="password"
                            name="password_confirmation" required />
        </div>
        <button type="submit" class="btn btn-info btn-block">Sign Up</button>
        <div class="flex items-center justify-end mt-4 form-group">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
           
        </div>
       
    </form>
  
</div><!-- login-wrapper -->
</div><!-- d-flex -->

    @endsection