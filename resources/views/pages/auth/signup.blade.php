@extends("pages.auth.layout")

@section("title")
    Sign up to Planno for free
@endsection

@section("content")

    <h1>Sign up to Planno</h1>

    <form action="#" method="POST" autocomplete="off" novalidate>

        @csrf

        <div class="form-item mb-4">

            <label for="first-name">First name</label>

            <input type="text" name="first_name" id="first-name">

        </div>

        <div class="form-item mb-4">

            <label for="last-name">Last name</label>

            <input type="text" name="last_name" id="last-name">

        </div>

        <div class="form-item mb-4">

            <label for="email">Email</label>

            <input type="email" name="email" id="email">

        </div>

        <div class="form-item mb-4">

            <label for="password">Password</label>

            <input type="password" name="password" id="password">

        </div>

        <div class="form-item mb-4">

            <button type="submit">Sign up</button>

        </div>

        <div class="form-item mb-4">

            <div class="disclaimer">

                By signing up, you agree to Planno's
                <a href="{{ route("privacy") }}" target="_blank">privacy policy</a>
                and
                <a href="{{ route("terms") }}" target="_blank">service terms</a>.

            </div>

        </div>

        <hr>

        <div class="form-item">

            <div class="sign-up">

                You already have an account?

                <a href="{{ route("auth.login") }}">
                    Log in
                </a>

            </div>

        </div>

    </form>

@endsection

@section("image")

    <img src="{{ asset("assets/images/authentication/signup.png") }}" alt="Sign up">

@endsection
