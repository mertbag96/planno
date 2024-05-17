@extends('app')

@section('title')
    About us | Planno
@endsection

@section('content')

    <section class="about-us">

        <div class="about-us-banner container">

            <h1>At Planno, we do things differently...</h1>

            <h6>
                We’re committed to building a company and culture with a lasting impact on the world.
            </h6>

            <img src="{{ asset("assets/images/about-us/banner.png") }}" alt="About us">

        </div>

    </section>

    <section class="partners">

        <div class="partners-content container">

            <h3>
                Our partners
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

    <section class="about-us">

        <div class="about-us-values py-5">

            <div class="container d-flex flex-column justify-content-center align-items-center">

                <div class="values-description w-100">

                    <h1>Our core values</h1>

                    <p>
                        They are few, but they are mighty. From creating processes to decision-making and
                        recruiting, we build our five core values into nearly every single thing we do.
                    </p>

                </div>

                <div class="values w-100">

                    <div class="value">

                        <img src="{{ asset("assets/images/about-us/ambition.png") }}" alt="Mastery" class="value-icon ms-3">

                        <div class="value-details">

                            <h3>Ambition</h3>

                            <p>
                                You aspire to put a dent in the universe. You set high standards for yourself
                                and those around you. You solve issues that have a high impact on our customers
                                and our company.
                            </p>

                        </div>

                    </div>

                    <div class="value">

                        <img src="{{ asset("assets/images/about-us/mastery.png") }}" alt="Mastery" class="value-icon ms-3">

                        <div class="value-details">

                            <h3>Mastery</h3>

                            <p>
                                You care deeply about the quality of your work. You’re continuously learning and
                                pushing yourself to the limits of your ability. As a champion of your craft, you are
                                also a champion of your well-being – you work intensely, then disconnect completely.
                            </p>

                        </div>

                    </div>

                    <div class="value">

                        <img src="{{ asset("assets/images/about-us/communication.png") }}" alt="Mastery" class="value-icon">

                        <div class="value-details">

                            <h3>Communication</h3>

                            <p>
                                Your communication is clear, concise, and engaging. You keep others in the loop
                                and never go radio silent. You speak respectfully and foster warm relationships
                                through your interactions. You’re culturally and socially aware and can
                                appropriately navigate social situations.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="about-us-how-we-work py-5">

            <div class="container d-flex flex-column justify-content-center align-items-center">

                <h1>How we work?</h1>

                <p>
                    Radical? Only for now. By using our core values to model our behavior, we show the world
                    that a more empowering future of work is possible – and is already happening.
                </p>

                <div class="articles pt-2 pb-4">

                    <a href="#" class="article">

                        <img src="{{ asset("assets/images/about-us/teamwork.png") }}" alt="Team work" class="article-image">

                        <div class="article-detail">

                            <h6>We embrace teamwork</h6>

                            <p>
                                People have the space and trust to disconnect to focus on deep work.
                                No one is expected to respond to messages immediately.
                            </p>

                        </div>

                    </a>

                    <a href="#" class="article">

                        <img src="{{ asset("assets/images/about-us/trust.png") }}" alt="Team work" class="article-image">

                        <div class="article-detail">

                            <h6>We trust our teammates</h6>

                            <p>
                                Autonomy and transparency are more effective motivators
                                than time tracking and management.
                            </p>

                        </div>

                    </a>

                    <a href="#" class="article">

                        <img src="{{ asset("assets/images/about-us/health.png") }}" alt="Team work" class="article-image">

                        <div class="article-detail">

                            <h6>We care about our team</h6>

                            <p>
                                Adjusting to remote work can be hard. We respect that challenge and support
                                people throughout their remote career.
                            </p>

                        </div>

                    </a>

                    <a href="#" class="article">

                        <img src="{{ asset("assets/images/about-us/values.png") }}" alt="Team work" class="article-image">

                        <div class="article-detail">

                            <h6>We embed our values</h6>

                            <p>
                                Design is never neutral. We build products that embody our values
                                and respect our users’ time and attention.
                            </p>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>

@endsection
