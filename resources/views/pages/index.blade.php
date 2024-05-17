@extends('app')

@section('title')
    Planno | Plan your day, save your time!
@endsection

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

    <section class="pricing">

        <h1>
            Pricing
        </h1>

        <p>
            Use Planno for free forever or upgrade to unlock our most powerful features for work and collaboration.
        </p>

        <div class="package-switcher">

            <button class="package-switch-button active">Monthly</button>

            <button class="package-switch-button">Annually</button>

        </div>

        <div class="pricing-content container">

            <div class="package package-beginner shadow-sm">

                <h2 class="title">
                    Beginner
                </h2>

                <p class="description">
                    Start organizing your tasks and goals for free
                </p>

                <span class="price">
                    <span class="package-price">$0</span>
                    <span class="per">/ month</span>
                </span>

                <a href="{{ route('auth.login') }}">
                    Choose plan
                </a>

                <ul>

                    <li>
                        <p class="category">
                            An account with:
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            5 personal projects
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Smart quick add
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Flexible list & board layouts
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            3 filter views
                        </p>

                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            1 week activity history
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Integrate email, calendar, and more
                        </p>
                    </li>

                </ul>

            </div>

            <div class="package package-pro popular shadow-sm">

                <h2 class="title">
                    Pro
                </h2>

                <p class="description">
                    Stay on top of all your tasks and goals, at work and at home
                </p>

                <span class="price">
                    <span class="package-price">$25</span>
                    <span class="per">/ month</span>
                </span>

                <a href="{{ route('auth.login') }}">
                    Choose plan
                </a>

                <ul>

                    <li>
                        <p class="category">
                            Everything in Beginner, plus:
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            500 personal projects
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Calendar layout
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Task reminders & duration
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            200 filter views
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Unlimited activity history
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            AI Assistant
                        </p>
                    </li>

                </ul>

            </div>

            <div class="package package-business shadow-sm">

                <h2 class="title">
                    Business
                </h2>

                <p class="description">
                    Simplify and organize your team’s work, too
                </p>

                <span class="price">
                    <span class="package-price">$50</span>
                    <span class="per">/ month</span>
                </span>

                <a href="{{ route('auth.login') }}">
                    Choose plan
                </a>

                <ul>

                    <li>
                        <p class="category">
                            Everything in Pro, plus team features:
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Pro for all team members
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Up to 1000 team projects
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Calendar layout for team projects
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            1000 team members & guests
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Team roles & permissions
                        </p>
                    </li>

                    <li>
                        <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="18" height="18">
                            <path d="M8 2.751a5.25 5.25 0 1 0 0 10.5 5.25 5.25 0 0 0 0-10.5Zm-4.773.477a6.75 6.75 0 1 1 9.546 9.546 6.75 6.75 0 0 1-9.546-9.546Zm7.303 2.91a.75.75 0 0 1 0 1.06L7.864 9.865a.75.75 0 0 1-1.061 0L5.47 8.532A.75.75 0 0 1 6.53 7.47l.803.803L9.47 6.138a.75.75 0 0 1 1.06 0Z"></path>
                        </svg>
                        <p>
                            Centralized team billing
                        </p>
                    </li>

                </ul>

            </div>

        </div>

    </section>

@endsection

@section('scripts')

    <script>

        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll('.package-switch-button');
            buttons.forEach(button => {
                button.addEventListener('click', function(event) {
                    buttons.forEach(btn => {
                        btn.classList.remove('active');
                    });
                    this.classList.add('active');
                    let type = this.innerHTML;
                    const per = document.querySelectorAll(".per");
                    const pro = document.querySelector(".package-pro .package-price");
                    const business = document.querySelector(".package-business .package-price");
                    if (type === "Monthly") {
                        per.forEach(p => {
                            p.innerHTML = "/ month";
                        });
                        pro.innerHTML = "$25";
                        business.innerHTML = "$50";
                    } else {
                        per.forEach(p => {
                            p.innerHTML = "/ year";
                        });
                        pro.innerHTML = "$275";
                        business.innerHTML = "$550";
                    }
                });
            });
        });

    </script>

@endsection
