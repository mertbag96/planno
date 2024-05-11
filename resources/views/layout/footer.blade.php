<footer>

    <div class="footer-container container">

        <div class="footer-logo">

            <a href="{{ route('index') }}" class="logo d-flex align-items-center">
                <i class="fa-solid fa-parking fs-3 me-2"></i>
                <span>Planno</span>
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
