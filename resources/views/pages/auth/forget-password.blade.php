<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Can't you log in to your account? Do you need to reset your password?</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/images/icons/favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/icons/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="container-fluid">

@include('layout.cookie')

<section class="authentication">

    <div class="logo-container container">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <i class="fa-solid fa-parking fs-3 me-2"></i>
            <span>Planno</span>
        </a>

    </div>

    <div class="authentication-container container">

        <div class="authentication-content">

            <h1 class="mb-2">Forgot your password?</h1>

            <h6 class="mb-4">
                To reset your password, please enter your Planno account's email.
            </h6>

            <form action="#" method="POST" autocomplete="off">

                @csrf

                <div class="form-item mb-4">

                    <label for="email">Email</label>

                    <input type="email" name="email" id="email" required>

                </div>

                <div class="form-item mb-4">

                    <button type="submit">Reset password</button>

                </div>

                <div class="form-item">

                    <div class="sign-up">

                        Do you remember your password?

                        <a href="{{ route("auth.login") }}">
                            Log in
                        </a>

                    </div>

                </div>

            </form>

        </div>

        <img src="{{ asset("assets/images/authentication/reset-password.png") }}" alt="Reset password">

    </div>

</section>

</body>

<script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>







