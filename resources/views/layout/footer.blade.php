<footer>

    <div class="footer-container container">

        <div class="footer-logo">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#5d0cb0" width="32" height="32" class="me-2">
                    <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM240 320h-48v48c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h96c52.9 0 96 43.1 96 96s-43.1 96-96 96zm0-128h-48v64h48c17.6 0 32-14.4 32-32s-14.4-32-32-32z"/>
                </svg>
                Planno
            </a>

            <p>
                Join thousands of people who organize work and life with Planno.
            </p>

        </div>

        <div class="footer-content">

            <ul>

                <li class="m-0">
                    <p>Features</p>
                    <a href="{{ route('how-it-works') }}">How It Works</a>
                    <a href="{{ route('for-teams') }}">For Teams</a>
                    <a href="{{ route('pricing') }}">Pricing</a>
                </li>

                <li>
                    <p>Resources</p>
                    <a href="{{ route('integrations') }}">Integrations</a>
                    <a href="{{ route('templates') }}">Templates</a>
                    <a href="{{ route('getting-started') }}">Getting Started</a>
                    <a href="{{ route('help-center') }}">Help Center</a>
                </li>

                <li>
                    <p>Company</p>
                    <a href="{{ route('about-us') }}">About Us</a>
                    <a href="{{ route('career') }}">Careers</a>
                    <a href="{{ route('contact-us') }}">Contact Us</a>
                </li>

                <li>
                    <a href="https://twitter.com/" target="_blank" class="social-media-link">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <a href="https://youtube.com/" target="_blank" class="social-media-link">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://facebook.com/" target="_blank" class="social-media-link">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                    <a href="https://instagram.com/" target="_blank" class="social-media-link">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>

            </ul>

        </div>

        <div class="footer-other">

            <ul>

                <li>
                    <a href="{{ route('security') }}" target="_blank" class="me-2">
                        Security
                    </a>
                </li>

                <li>|</li>

                <li>
                    <a href="{{ route('privacy') }}" target="_blank" class="ms-2 me-2">
                        Privacy
                    </a>
                </li>

                <li>|</li>

                <li>
                    <a href="{{ route('terms') }}" target="_blank" class="ms-2 me-4">
                        Terms
                    </a>
                </li>

                <li>
                    <p>
                        &copy; Planno Inc.
                    </p>
                </li>

            </ul>

        </div>

    </div>

</footer>
