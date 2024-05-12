@extends('app')

@section('content')

    <section class="pricing">

        <h1>
            Stay on top of your life, work, and team tasks
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

        <div class="plans-table container">

            <h3>
                Compare Plans
            </h3>

            <div>

                <div class="mb-5">

                    <div>

                        <div class="plan-table">

                            <div class="w-25">

                                <h5>
                                    Essentials
                                </h5>

                            </div>

                            <div class="w-25">

                                <h5>
                                    Beginner
                                </h5>

                                <p>
                                    You have some basic, personal tasks to organize.
                                </p>

                            </div>

                            <div class="w-25">

                                <h5>
                                    Pro
                                </h5>

                                <p>
                                    You rely on Planno to manage work tasks and larger projects.
                                </p>

                            </div>

                            <div class="w-25">

                                <h5>
                                    Business
                                </h5>

                                <p>
                                    Your team needs to manage tasks across many projects.
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Personal projects
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    5
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    300
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    300 for each member
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Due dates & times
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Priority levels
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Sub-tasks
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Task reminders
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-xmark"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    File uploads
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    5 MB
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    100 MB
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    100 MB
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="mb-5">

                    <div>

                        <div class="plan-table">

                            <div class="w-25">

                                <h5>
                                    Task views
                                </h5>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Beginner
                                    </strong>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Pro
                                    </strong>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Business
                                    </strong>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    List layout
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Board layout
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    In label, filter, and personal project views
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    In team projects, too
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Calendar layout
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-xmark"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Custom filters
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    3
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    150
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    150 for each member
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="mb-5">

                    <div>

                        <div class="plan-table">

                            <div class="w-25">

                                <h5>
                                    Collaboration
                                </h5>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Beginner
                                    </strong>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Pro
                                    </strong>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Business
                                    </strong>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    People per personal project
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    5
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    10
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    25
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Comments
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Assigned tasks
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    A team workspace
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-xmark"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-xmark"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <div>

                    <div>

                        <div class="plan-table">

                            <div class="w-25">

                                <h5>
                                    Advanced
                                </h5>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Beginner
                                    </strong>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Pro
                                    </strong>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <strong>
                                        Business
                                    </strong>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Recurring due dates
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Labels
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Task descriptions
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Productivity visualizations
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    90+ integrations
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Task duration
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-xmark"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    AI Assistant
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-xmark"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Auto backups
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    Limited
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    <i class="fa-solid fa-check"></i>
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Activity history
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    1 week
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    Unlimited
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    Unlimited
                                </p>

                            </div>

                        </div>

                        <hr>

                        <div class="plan-table">

                            <div class="w-25">

                                <p>
                                    Themes
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    4
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    8
                                </p>

                            </div>

                            <div class="w-25">

                                <p>
                                    10
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

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
