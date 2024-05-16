<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <title>Construction</title>
    <link rel="stylesheet" href="{{asset('/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/mystyle.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/signup.css">
    <link rel="stylesheet" href="{{asset('/')}}/css/social-icon.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,562;0,600;0,700;1,400;1,500;1,562;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

@include('frontend.layouts.include.header')

<section class="signup-section">
    <div id="first-step" class="first-signup-block">
        <div class="col-md-4 signup-block">
            <div class="col">
                <a href="#" class="fb btn">
                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                </a>
                <a href="#" class="google btn"><i class="fa fa-google fa-fw">
                    </i> Login with Google+
                </a>
            </div>
            <div class="vl">
                <span class="vl-innertext">or</span>
            </div>

            <div class="d-flex input-box">
                <div class="col-md-12 col-sm-12">
                    <label>Email</label>
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <input type="text" name="" value="" maxlength="150" size="45"/>
                </div>

                <span class="notification-message">
                      <i class="fa fa-bullhorn" aria-hidden="true"></i>
                      We noticed you’re using a yopmail.com address. Would you like to use your work email instead?
                  </span>

                <span class="validation-message">
                      <i class="fa fa-exclamation-circle" aria-hidden="true"></i> This email is already in use. Want to log in?
                  </span>
            </div>


            <div class="input-box">
                <div class="col-md-12 col-sm-12">
                    <input id="continueWithEmail" onclick="hideFirstStep()" class="create-account-btn" type="button"
                           value="Continue with Email"/>
                </div>
            </div>
        </div>
    </div>
    <div id="section-step">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="col-md-4 signup-block">
                <h2>Complete your free account setup</h2>
                <h6>username@gmail.com</h6>

                <div class="d-flex input-box d-flow-row">
                    <div class="col-md-6 col-sm-6 po-relative">
                        <label>First Name</label>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="first_name" value="{{old('first_name')}}" maxlength="150" size="45"/>
                    </div>

                    <div class="col-md-6 col-sm-6 po-relative">
                        <label>Last Name</label>
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" name="last_name" value="{{old('last_name')}}" maxlength="150" size="45"/>
                    </div>
                </div>

                <div class="d-flex input-box d-flow-row">
                    <div class="col-md-6 col-sm-6 po-relative">
                        <label>Email</label>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="text" name="email" value="{{old('email')}}" maxlength="150" size="45"/>
                    </div>

                    <div class="col-md-6 col-sm-6 po-relative">
                        <label>Mobile</label>
                        <i class="fa fa-cell" aria-hidden="true"></i>
                        <input type="text" name="mobile" value="{{old('mobile')}}" maxlength="150" size="45"/>
                    </div>
                </div>

                <div class="d-flex input-box d-flow-row">
                    <div class="col-md-6 col-sm-12">
                        <label>Create Password</label>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="password" maxlength="150" size="45"/>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label>Confirm Password</label>
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="password_confirmation" maxlength="150" size="45"/>
                    </div>
                </div>

                <div class="d-flex input-box">
                    <div class="col-md-12 col-sm-12">
                        <label>Address</label>
                        <textarea type="text" name="" placeholder="name" maxlength="150" size="45"
                                  class="form-control"> </textarea>
                    </div>
                </div>

                <div class="d-flex input-box">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Select Country</label>
                            <select class="form-control" name="country" id="exampleFormControlSelect1">
                                <option>India</option>
                                <option>USA</option>
                                <option>UK</option>
                                <option>New Zealand</option>
                                <option>Australia</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="d-flex input-box">
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Type:</label>
                            <select class="form-control" name="user_type" id="exampleFormControlSelect1">
                                <option value="2">Bidder</option>
                                <option value="3">Work as a Home Owner</option>
                            </select>
                        </div>
                    </div>
                </div>


                <div class="d-flex input-box btn-container">
                    <div class="col-md-12 col-sm-12">
                        <h4>I want to:</h4>
                        <div class="btn-block">
                            <button onclick="showInput()" id="project" class="signup-btn-option">Hire for a Project
                            </button>
                            <button onclick="showUserInput()" id="freelancer" class="signup-btn-option">Work as a Home
                                Owner
                            </button>
                        </div>

                        <div class="input-box username-box" id="username">
                            <label>Username</label>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <input type="text" name="user_name" value="" maxlength="150" size="45"/>
                        </div>
                    </div>
                </div>

                <div class="input-box">
                    <div class="col-md-12 col-sm-12">
                        {{--                    <label class="checkbox-style">Yes! Send me genuinely useful emails every now and then to help me get--}}
                        {{--                        the most out of construction.--}}
                        {{--                        <input type="checkbox" checked="checked">--}}
                        {{--                        <span class="checkmark"></span>--}}
                        {{--                    </label>--}}

                        <label class="checkbox-style">Yes! Send me genuinely useful emails every now and then to help me
                            get
                            the most out of construction.
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div>

                <div class="input-box">
                    <div class="col-md-12 col-sm-12">
                        <button class="create-account-btn">Create My Account</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

@include('frontend.layouts.include.footer')
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('/')}}/js/jquery.min.js"></script>
<script src="{{asset('/')}}/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}/js/script.js"></script>
</body>
</html>

{{--<x-guest-layout>--}}
{{--    <form method="POST" action="{{ route('register') }}">--}}
{{--        @csrf--}}

{{--        <!-- Name -->--}}
{{--        <div>--}}
{{--            <x-input-label for="name" :value="__('Name')" />--}}
{{--            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />--}}
{{--            <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Email Address -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Confirm Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--            <x-text-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password_confirmation" required autocomplete="new-password" />--}}

{{--            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">--}}
{{--                {{ __('Already registered?') }}--}}
{{--            </a>--}}

{{--            <x-primary-button class="ms-4">--}}
{{--                {{ __('Register') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}
