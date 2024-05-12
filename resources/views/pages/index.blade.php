@extends('app')

@section('content')

    <section class="banner">

        <div class="banner-content container">

            <h1>Plan your day, save your time!</h1>

            <p>
                Organize your work, become focused and organized in your daily life!
            </p>

            <a href="{{ route('auth.login') }}" class="banner-button">
                Start for free
            </a>

        </div>

    </section>

    <section class="partners">

        <div class="partners-content container">

            <h3>
                Our Partners
            </h3>

            <p>
                10+ thousand people and teams trust their sanity and productivity to Planno
            </p>

            <img src="{{ asset('assets/images/partners/microsoft.png') }}" alt="Microsoft">

            <img src="{{ asset('assets/images/partners/disney.png') }}" alt="Disney">

            <img src="{{ asset('assets/images/partners/amazon.png') }}" alt="Amazon">

            <img src="{{ asset('assets/images/partners/netflix.png') }}" alt="Netflix">

            <img src="{{ asset('assets/images/partners/adobe.png') }}" alt="Adobe">

            <img src="{{ asset('assets/images/partners/salesforce.png') }}" alt="Salesforce">

        </div>

    </section>

@endsection
