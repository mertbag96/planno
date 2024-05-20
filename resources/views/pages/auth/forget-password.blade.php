@extends("pages.auth.layout")

@section("title")
    Can't you log in to your account? Do you need to reset your password?
@endsection

@section("content")

    <h1 class="mb-2">Forgot your password?</h1>

    <h6 class="mb-4">
        To reset your password, please enter your Planno account's email.
    </h6>

    <form action="#" method="POST" autocomplete="off" novalidate>

        @csrf

        <div class="form-item mb-4">

            <label for="email">Email</label>

            <input type="email" name="email" id="email">

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

@endsection

@section("image")

    <img src="{{ asset("assets/images/authentication/reset-password.png") }}" alt="Reset password">

@endsection
