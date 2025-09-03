{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, viewport-fit=cover">
    <!-- font -->
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Icons -->
    <link rel="stylesheet" href="fonts/font-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet"type="text/css" href="css/nouislider.min.css"/>
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet"type="text/css" href="css/styles.css"/>

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="images/logo/168.png" />
    <link rel="apple-touch-icon-precomposed" href="images/logo/168.png" />
    <title>Sign In</title>
    <script>
        if (localStorage.toggled === "dark-theme") {
            document.documentElement.classList.add('dark-theme');
        }
    </script>

</head>

<body>
    <!-- preloade -->
    <div class="preload preload-container">
        {{-- <div class="logo-img">
            <img src="images/logo/logo-dark2.png" alt="">
        </div> --}}
        <div class="spinner-circle lg success">
            <span class="spinner-circle1 spinner-child"></span>
            <span class="spinner-circle2 spinner-child"></span>
            <span class="spinner-circle3 spinner-child"></span>
            <span class="spinner-circle4 spinner-child"></span>
            <span class="spinner-circle5 spinner-child"></span>
            <span class="spinner-circle6 spinner-child"></span>
            <span class="spinner-circle7 spinner-child"></span>
            <span class="spinner-circle8 spinner-child"></span>
            <span class="spinner-circle9 spinner-child"></span>
        </div>
    </div>
    <!-- /preload -->
    <div class="header fixed-top">
        <div class="left">
            <a href="javascript:void(0);" class="icon back-btn">
                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.88986 12.2951L1.60986 7.00008L6.88986 1.70508" stroke="#121927" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
        <h3>Sign In</h3>
    </div>
    <div class="app-content style-4 signIn-area">
        <div class="tf-container">
            <div class="logo-account mt-20">
                <img class="logo-white" src="images/logo/logo-light.png" alt="" style="width: auto">
            </div>
            <p class="mt-16 mb-20 body-2 text-dark-4">Fill credentials to sign in your account or sign in with Google account.</p>
                   @if ($errors->any())
  <ul class="alert alert-danger light" role="alert">
    @foreach ($errors->all() as $error)
        
    <li >{{ $error }}</li>
     
    @endforeach
  </ul>
  @endif

  <form method="POST" action="{{ route('login') }}">
        @csrf
                <div class="mt-32 form-field">
                    <h6 class="label">Email</h6>
                    <fieldset class="input-icon mt-12">
                        <span class="icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.5">
                                <path d="M14.1665 17.0834H5.83317C3.33317 17.0834 1.6665 15.8334 1.6665 12.9167V7.08341C1.6665 4.16675 3.33317 2.91675 5.83317 2.91675H14.1665C16.6665 2.91675 18.3332 4.16675 18.3332 7.08341V12.9167C18.3332 15.8334 16.6665 17.0834 14.1665 17.0834Z" stroke="#121927" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14.1668 7.5L11.5585 9.58333C10.7002 10.2667 9.29183 10.2667 8.43349 9.58333L5.8335 7.5" stroke="#121927" stroke-width="1.25" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>                            
                        </span>
                        <input type="text" placeholder="Type your email" class="form-control" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                    </fieldset>
                </div>
                <div class="mt-20">
                    <h6 class="label">Password</h6>
                    <fieldset class="mt-16 input-icon">
                        <div class="box-view-hide">
                            <span class="icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.5">
                                    <path d="M5 8.33341V6.66675C5 3.90841 5.83333 1.66675 10 1.66675C14.1667 1.66675 15 3.90841 15 6.66675V8.33341" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.99984 15.4167C11.1504 15.4167 12.0832 14.4839 12.0832 13.3333C12.0832 12.1827 11.1504 11.25 9.99984 11.25C8.84924 11.25 7.9165 12.1827 7.9165 13.3333C7.9165 14.4839 8.84924 15.4167 9.99984 15.4167Z" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.1665 18.3333H5.83317C2.49984 18.3333 1.6665 17.4999 1.6665 14.1666V12.4999C1.6665 9.16659 2.49984 8.33325 5.83317 8.33325H14.1665C17.4998 8.33325 18.3332 9.16659 18.3332 12.4999V14.1666C18.3332 17.4999 17.4998 18.3333 14.1665 18.3333Z" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>                                
                            </span>
                            <input type="password" placeholder="Type your password" class="form-control password-field" name="password">
                            <div class="show-pass">
                                <span class="icon-pass icon-view">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.1083 7.8916L7.8916 12.1083C7.34994 11.5666 7.0166 10.8249 7.0166 9.99993C7.0166 8.34993 8.34993 7.0166 9.99993 7.0166C10.8249 7.0166 11.5666 7.34994 12.1083 7.8916Z" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.8499 4.8084C13.3915 3.7084 11.7249 3.1084 9.99987 3.1084C7.0582 3.1084 4.31654 4.84173 2.4082 7.84173C1.6582 9.01673 1.6582 10.9917 2.4082 12.1667C3.06654 13.2001 3.8332 14.0917 4.66654 14.8084" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.0166 16.2751C7.9666 16.6751 8.97493 16.8917 9.99993 16.8917C12.9416 16.8917 15.6833 15.1584 17.5916 12.1584C18.3416 10.9834 18.3416 9.0084 17.5916 7.8334C17.3166 7.40006 17.0166 6.99173 16.7083 6.6084" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.9252 10.5833C12.7085 11.7583 11.7502 12.7166 10.5752 12.9333" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.8915 12.1084L1.6665 18.3334" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M18.3334 1.66675L12.1084 7.89175" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </span>
                                <span class="icon-pass icon-hide">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.1083 7.8916L7.8916 12.1083C7.34994 11.5666 7.0166 10.8249 7.0166 9.99993C7.0166 8.34993 8.34993 7.0166 9.99993 7.0166C10.8249 7.0166 11.5666 7.34994 12.1083 7.8916Z" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.8499 4.8084C13.3915 3.7084 11.7249 3.1084 9.99987 3.1084C7.0582 3.1084 4.31654 4.84173 2.4082 7.84173C1.6582 9.01673 1.6582 10.9917 2.4082 12.1667C3.06654 13.2001 3.8332 14.0917 4.66654 14.8084" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.0166 16.2751C7.9666 16.6751 8.97493 16.8917 9.99993 16.8917C12.9416 16.8917 15.6833 15.1584 17.5916 12.1584C18.3416 10.9834 18.3416 9.0084 17.5916 7.8334C17.3166 7.40006 17.0166 6.99173 16.7083 6.6084" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12.9252 10.5833C12.7085 11.7583 11.7502 12.7166 10.5752 12.9333" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.8915 12.1084L1.6665 18.3334" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M18.3334 1.66675L12.1084 7.89175" stroke="#121927" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>   
                                </span>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="mt-20 d-flex justify-content-between">
                    <div class="box-check-remember">
                        <input class="tf-switch-check" id="remember_me" type="checkbox">
                        <label for="checkRemember" class="body-2 text-dark-4">Remember Me</label>
                    </div>
                    <a href="forgot-pass.html" class="button-1 text-primary">Forgot Password?</a>
                </div>
                <button class="mt-40 tf-btn primary" type="submit">Sign In</button>
            </form>

            <div class="auth-line body-2 text-dark-4">or continue with</div>
            <div class="d-flex gap-16 justify-content-center">
               
                <a href="{{route('auth.google')}}" class="btn-social-icon w-100">
                    <img class="img-icon" src="images/logo/google.png" alt="img">
                </a>
              
            </div>
            
            <p class="mt-35 text-center body-2 text-dark-4">Don’t have account? <a href="register" class="text-primary button-1">Sign Up</a></p>
        </div>

    </div>

   
    
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/lazysize.min.js"></script>
    <script type="text/javascript" src="js/jquery.nice-select.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>
</html>