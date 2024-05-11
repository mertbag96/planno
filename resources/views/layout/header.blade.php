<header class="sticky-top">

    <nav class="container">

        <a href="{{ route('index') }}" class="logo d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" fill="#5d0cb0" width="32" height="32" class="me-2">
                <path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM240 320h-48v48c0 8.8-7.2 16-16 16h-32c-8.8 0-16-7.2-16-16V144c0-8.8 7.2-16 16-16h96c52.9 0 96 43.1 96 96s-43.1 96-96 96zm0-128h-48v64h48c17.6 0 32-14.4 32-32s-14.4-32-32-32z"/>
            </svg>
            Planno
        </a>

        <div class="menu">

            <a href="{{ route('features') }}" class="menu-item me-3">
                Features
            </a>

            <a href="{{ route('for-teams') }}" class="menu-item me-3">
                For teams
            </a>

            <div class="menu-item menu-hover me-3">
                Resources
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16" width="1em" height="1em" class="ms-1">
                    <path fill-rule="evenodd" d="M3.47 6.47a.75.75 0 0 1 1.06 0L8 9.94l3.47-3.47a.75.75 0 1 1 1.06 1.06l-4 4a.75.75 0 0 1-1.06 0l-4-4a.75.75 0 0 1 0-1.06z" clip-rule="evenodd"></path>
                </svg>
            </div>

            <div class="menu-dropdown shadow-sm">

                <a href="{{ route('integrations') }}">
                    <svg width="24" height="24" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" color="#7a7a7a">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.25 4c0-.966.784-1.75 1.75-1.75h7c.966 0 1.75.784 1.75 1.75v2.001a2.5 2.5 0 1 1 0 4V12A1.75 1.75 0 0 1 10 13.75H3A1.75 1.75 0 0 1 1.25 12V9.534c0-.71.575-1.284 1.284-1.284.437 0 .78.22.996.445a1 1 0 1 0 .001-1.389 1.395 1.395 0 0 1-.996.444c-.71 0-1.285-.576-1.285-1.285V4ZM3 3.75a.25.25 0 0 0-.25.25v2.001a2.5 2.5 0 1 1 0 4V12c0 .138.112.25.25.25h7a.25.25 0 0 0 .25-.25V9.534c0-.71.575-1.284 1.284-1.284.437 0 .78.22.996.445a1 1 0 1 0 .001-1.389 1.395 1.395 0 0 1-.995.444c-.71 0-1.286-.576-1.286-1.285V4a.25.25 0 0 0-.25-.25H3Z" fill="currentColor"></path>
                    </svg>
                    <div class="dropdown-item">
                        <span class="title">Integrations</span>
                        <span class="description">Connect Planno with your other tools</span>
                    </div>
                </a>

                <a href="{{ route('templates') }}">
                    <svg fill="none" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" width="24" height="24" color="#7a7a7a">
                        <path clip-rule="evenodd" d="M9.14.936H7.434a3 3 0 0 0-2.71 1.713 2.992 2.992 0 0 0-2.346.673L1.072 4.418a3 3 0 0 0-.37 4.226l4.658 5.552a3.853 3.853 0 0 0 6.764-1.919l3.012-3.224a3 3 0 0 0-.144-4.24l-1.246-1.165a2.987 2.987 0 0 0-1.81-.798A3.001 3.001 0 0 0 9.14.936zm1.266 2.196c.148.233.234.508.234.804V8.5L6.604 3.691a3.01 3.01 0 0 0-.49-.466 1.5 1.5 0 0 1 1.32-.789H9.14c.532 0 1 .278 1.266.696zm1.734 1.275c.21.064.41.177.582.337l1.246 1.165a1.5 1.5 0 0 1 .072 2.12l-1.9 2.034zm-1.477 7.237a2.341 2.341 0 0 0-.55-1.436L5.935 5.226l-.479-.571a1.495 1.495 0 0 0-1.02-.53 1.495 1.495 0 0 0-1.093.345L2.036 5.567A1.5 1.5 0 0 0 1.85 7.68l2.583 3.079 2.075 2.473a2.353 2.353 0 0 0 4.122-1.119c.026-.155.037-.312.032-.47zm-2.376 1.112a.925.925 0 1 1 0-1.85.925.925 0 0 1 0 1.85z" fill="currentColor" fill-rule="evenodd"></path>
                    </svg>
                    <div class="dropdown-item">
                        <span class="title">Templates</span>
                        <span class="description">Kickstart projects with curated templates</span>
                    </div>
                </a>

                <a href="{{ route('getting-started') }}">
                    <svg width="24" height="24" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" color="#7a7a7a">
                        <g clip-path="url(#lightning-bolt-base_svg__a)">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.996.292a.75.75 0 0 1 .504.709v4.694H14a.75.75 0 0 1 .552 1.258L6.677 15.51a.75.75 0 0 1-1.286-.66l.938-4.543H2a.75.75 0 0 1-.589-1.214L8.161.536a.75.75 0 0 1 .835-.244ZM3.547 8.806H7.25a.75.75 0 0 1 .734.902L7.408 12.5l4.882-5.305H8.75a.75.75 0 0 1-.75-.75V3.162L3.547 8.806Z" fill="currentColor"></path>
                        </g>
                        <defs>
                            <clipPath id="lightning-bolt-base_svg__a">
                                <path fill="#fff" transform="translate(0 .001)" d="M0 0h16v16H0z"></path>
                            </clipPath>
                        </defs>
                    </svg>
                    <div class="dropdown-item">
                        <span class="title">Getting started</span>
                        <span class="description">Set up and run in minutes</span>
                    </div>
                </a>

                <a href="{{ route('help-center') }}">
                    <svg viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" color="#7a7a7a">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="m4.856 3.795 1.317 1.317a3.417 3.417 0 0 1 3.654 0l1.317-1.317a5.25 5.25 0 0 0-6.288 0Zm7.349 1.06-1.318 1.318a3.417 3.417 0 0 1 0 3.653l1.318 1.317a5.252 5.252 0 0 0 0-6.287Zm-1.061 7.35-1.317-1.318a3.417 3.417 0 0 1-3.654 0l-1.317 1.317a5.254 5.254 0 0 0 6.288 0Zm-7.349-1.062a5.248 5.248 0 0 1 0-6.287l1.318 1.317a3.417 3.417 0 0 0 0 3.653l-1.318 1.317ZM6.63 6.66a1.917 1.917 0 1 0 2.74 2.68 1.917 1.917 0 0 0-2.74-2.68Zm-3.409 6.108a1.504 1.504 0 0 0 .012.011 6.75 6.75 0 0 0 9.534 0l.006-.005.006-.006a6.75 6.75 0 1 0-9.558 0Z"></path>
                    </svg>
                    <div class="dropdown-item">
                        <span class="title">Help Center</span>
                        <span class="description">Find answers to all your questions</span>
                    </div>
                </a>

            </div>

            <a href="{{ route('pricing') }}" class="menu-item me-3">
                Pricing
            </a>

            <a href="{{ route('auth.login') }}" class="menu-item menu-button">
                Start for free
            </a>

        </div>

    </nav>

</header>
