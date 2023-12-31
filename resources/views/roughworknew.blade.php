<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        body {
            padding-top: 90px;
        }

        .panel-login {
            border-color: #ccc;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
            box-shadow: 0px 2px 3px 0px rgba(0, 0, 0, 0.2);
        }

        .panel-login>.panel-heading {
            color: #00415d;
            background-color: #fff;
            border-color: #fff;
            text-align: center;
        }

        .panel-login>.panel-heading a {
            text-decoration: none;
            color: #666;
            font-weight: bold;
            font-size: 15px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }

        .panel-login>.panel-heading a.active {
            color: #029f5b;
            font-size: 18px;
        }

        .panel-login>.panel-heading hr {
            margin-top: 10px;
            margin-bottom: 0px;
            clear: both;
            border: 0;
            height: 1px;
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
            background-image: -moz-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
            background-image: -ms-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
            background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0));
        }

        .panel-login input[type="text"],
        .panel-login input[type="email"],
        .panel-login input[type="password"] {
            height: 45px;
            border: 1px solid #ddd;
            font-size: 16px;
            -webkit-transition: all 0.1s linear;
            -moz-transition: all 0.1s linear;
            transition: all 0.1s linear;
        }

        .panel-login input:hover,
        .panel-login input:focus {
            outline: none;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            border-color: #ccc;
        }

        .btn-login {
            background-color: #59B2E0;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #59B2E6;
        }

        .btn-login:hover,
        .btn-login:focus {
            color: #fff;
            background-color: #53A3CD;
            border-color: #53A3CD;
        }

        .forgot-password {
            text-decoration: underline;
            color: #888;
        }

        .forgot-password:hover,
        .forgot-password:focus {
            text-decoration: underline;
            color: #666;
        }

        .btn-register {
            background-color: #1CB94E;
            outline: none;
            color: #fff;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1CB94A;
        }

        .btn-register:hover,
        .btn-register:focus {
            color: #fff;
            background-color: #bddac6;
            border-color: #939b95;
        }

        .btn-register1 {
            background-color: #0b110e;
            outline: none;
            color: #faf7f7;
            font-size: 14px;
            height: auto;
            font-weight: normal;
            padding: 14px 0;
            text-transform: uppercase;
            border-color: #1f2220;
        }

        .btn-register1:hover,
        .btn-register1:focus {
            color: #cf4f55;
            background-color: #58645c;
            border-color: #373a38;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row"> 
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <a href="#" class="active" id="login-form-link">Customer SignUp</a>
                            </div>
                            <div class="col-xs-6">
                                <a href="#" id="register-form-link">Vehicle Owner SignUp</a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" method="PaxudOST" action="{{ route('register') }}" role="form"
                                    style="display: block;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username" id="name" tabindex="1" class="form-control"
                                            placeholder="Username" name="name" :value="old('name')" required autofocus
                                            autocomplete="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" tabindex="1" class="form-control"
                                            placeholder="Email Address" type="email" name="email" :value="old('email')"
                                            required autocomplete="username">
                                    </div>
                                    <div class="form-group">
                                        <input id="password" tabindex="2" class="form-control" placeholder="Password"
                                            type="password" name="password" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <input id="password_confirmation" tabindex="2" class="form-control"
                                            placeholder="Confirm Password" type="password" name="password_confirmation"
                                            required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <div class="flex items-center justify-end mt-4">
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                            <x-primary-button class="ml-4">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" method="POST" action="{{ route('register') }}" role="form"
                                    style="display: none;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="username" id="name" tabindex="1" class="form-control"
                                            placeholder="Username" name="name" :value="old('name')" required autofocus
                                            autocomplete="name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" tabindex="1" class="form-control"
                                            placeholder="Email Address" type="email" name="email" :value="old('email')"
                                            required autocomplete="username">
                                    </div>
                                    <div class="form-group">
                                        <input id="password" tabindex="2" class="form-control" placeholder="Password"
                                            type="password" name="password" required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <input id="password_confirmation" tabindex="2" class="form-control"
                                            placeholder="Confirm Password" type="password" name="password_confirmation"
                                            required autocomplete="new-password">
                                    </div>
                                    <div class="form-group">
                                        <div class="flex items-center justify-end mt-4">
                                            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                                href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                            <x-primary-button class="ml-4">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(function() {

$('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
     $("#register-form").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});
$('#register-form-link').click(function(e) {
    $("#register-form").delay(100).fadeIn(100);
     $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
});

});

</script>

</html>