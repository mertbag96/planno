<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in to Planno</title>
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

    <div class="log-in container">

        <div class="log-in-content">

            <h1>Log in to Planno</h1>

            <form action="#" method="POST" autocomplete="off">

                @csrf

                <div class="form-item mb-4">

                    <label for="email">Email</label>

                    <input type="email" name="email" id="email" required>

                </div>

                <div class="form-item mb-4">

                    <label for="password">Password</label>

                    <input type="password" name="password" id="password" required>

                </div>

                <div class="form-item mb-3">

                    <button type="submit">Log in</button>

                </div>

                <div class="form-item mb-3">

                    <a href="{{ route("auth.forget-password") }}" class="forget-your-password">
                        Did you forget your password?
                    </a>

                </div>

                <div class="form-item mb-3">

                    <div class="disclaimer">

                        By continuing with your email, you agree to Planno's
                        <a href="{{ route("privacy") }}" target="_blank">privacy policy</a>
                        and
                        <a href="{{ route("terms") }}" target="_blank">service terms</a>.

                    </div>

                </div>

                <hr>

                <div class="form-item mb-3">

                    <div class="sign-up">

                        You don't have an account?

                        <a href="{{ route("auth.signup") }}">
                            Sign up
                        </a>

                    </div>

                </div>

            </form>

        </div>

        <img src="{{ asset("assets/images/authentication/login.png") }}" alt="Log in">

    </div>

</section>

</body>

<script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>





