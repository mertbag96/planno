@extends("pages.auth.layout")

@section("title")
    Log in to Planno
@endsection

@section("content")

    <h1>Log in to Planno</h1>

    <form action="#" method="POST" autocomplete="off" novalidate>

        @csrf

        <div class="form-item mb-4">

            <label for="email">Email</label>

            <input type="email" name="email" id="email">

        </div>

        <div class="form-item mb-4">

            <label for="password">Password</label>

            <input type="password" name="password" id="password">

        </div>

        <div class="form-item mb-4">

            <button type="submit">Log in</button>

        </div>

        <div class="form-item mb-4">

            <a href="{{ route("auth.forget-password") }}" class="forget-your-password">
                Did you forget your password?
            </a>

        </div>

        <div class="form-item mb-4">

            <div class="disclaimer">

                By continuing with your email, you agree to Planno's
                <a href="{{ route("privacy") }}" target="_blank">privacy policy</a>
                and
                <a href="{{ route("terms") }}" target="_blank">service terms</a>.

            </div>

        </div>

        <hr>

        <div class="form-item">

            <div class="sign-up">

                You don't have an account?

                <a href="{{ route("auth.signup") }}">
                    Sign up
                </a>

            </div>

        </div>

    </form>

@endsection

@section("image")

    <img src="{{ asset("assets/images/authentication/login.png") }}" alt="Log in">

@endsection
