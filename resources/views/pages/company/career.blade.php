@extends('app')

@section('title')
    Careers - Planno
@endsection

@section('content')

    <section class="careers">

        <div class="careers-content">

            <div class="careers-banner">

                <div class="careers-banner-content container">

                    <div>

                        <h6>Careers at Planno</h6>

                        <h1>Work with us</h1>

                        <p class="mb-4">
                            Explore remote-friendly, flexible opportunities and join our mission
                            to make work life simpler, more pleasant and more productive.
                        </p>

                        <a href="#opportunities" class="mt-2">
                            View Career Opportunities
                        </a>

                    </div>

                    <div>

                        <img src="{{ asset("assets/images/careers/banner.png") }}" alt="Careers">

                    </div>

                </div>

            </div>

            <div class="careers-advantages container">

                <h3 class="mb-5">A company that supports your ambitious goals and personal wellbeing</h3>

                <div class="career-advantages">

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="me-2">
                                <path fill="#202020" fill-rule="evenodd" d="M5.826 1.466a.498.498 0 0 0-.093.046 9.497 9.497 0 0 0-4.51 12.123 9.5 9.5 0 0 0 11.893 5.34.504.504 0 0 0 .1-.036 9.5 9.5 0 1 0-7.39-17.473ZM17.21 5.5A8.496 8.496 0 0 0 10 1.5c-1.219 0-2.41.262-3.5.754V3.5a2 2 0 0 0 2 2H9A2.5 2.5 0 0 1 11.5 8a1.5 1.5 0 1 0 3 0A2.5 2.5 0 0 1 17 5.5h.211Zm.535 1H17A1.5 1.5 0 0 0 15.5 8a2.5 2.5 0 0 1-5 0A1.5 1.5 0 0 0 9 6.5h-.5a3 3 0 0 1-3-3v-.711A8.498 8.498 0 0 0 1.633 8.5H3A2.5 2.5 0 0 1 5.5 11v1A1.5 1.5 0 0 0 7 13.5 2.5 2.5 0 0 1 9.5 16v2.485a8.498 8.498 0 0 0 3-.361V16a2.5 2.5 0 0 1 2.5-2.5h2.746a8.501 8.501 0 0 0 0-7Zm-.535 8H15a1.5 1.5 0 0 0-1.5 1.5v1.746a8.5 8.5 0 0 0 3.711-3.246ZM8.5 18.367V16A1.5 1.5 0 0 0 7 14.5 2.5 2.5 0 0 1 4.5 12v-1A1.5 1.5 0 0 0 3 9.5H1.514A8.5 8.5 0 0 0 8.5 18.367Z" clip-rule="evenodd"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Work from anywhere</h6>

                            <p>
                                You can work from anywhere in the world. We never place restrictions on locations.
                            </p>

                        </div>

                    </div>

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="me-2">
                                <path fill="#202020" fill-rule="evenodd" d="M10 2a7.5 7.5 0 0 1 5.645 12.438l1.71 1.708a.5.5 0 0 1-.639.765l-.07-.057-1.708-1.709A7.475 7.475 0 0 1 10 17c-1.89 0-3.619-.7-4.938-1.855l-1.708 1.71a.5.5 0 0 1-.765-.639l.057-.07 1.71-1.708A7.5 7.5 0 0 1 10 2Zm0 1a6.5 6.5 0 1 0 0 13 6.5 6.5 0 0 0 0-13Zm-.5 1.5a.5.5 0 0 1 .492.41L10 5v4h2.5a.5.5 0 0 1 .09.992L12.5 10h-3a.5.5 0 0 1-.492-.41L9 9.5V5a.5.5 0 0 1 .5-.5ZM2.232 1.06a2.5 2.5 0 0 1 3.536 0l.337.338a.5.5 0 0 1-.707.707l-.337-.337a1.5 1.5 0 0 0-2.122 0l-.67.671a1.5 1.5 0 0 0 0 2.122l.336.337a.5.5 0 0 1-.707.707l-.337-.337a2.5 2.5 0 0 1 0-3.536l.671-.672ZM17.637.94l.13.121.672.671a2.5 2.5 0 0 1 .122 3.405l-.122.13-.335.337a.5.5 0 0 1-.765-.638l.057-.07.336-.335a1.5 1.5 0 0 0 .103-2.008l-.103-.114-.67-.67a1.5 1.5 0 0 0-2.009-.104l-.114.103-.335.336a.5.5 0 0 1-.765-.638l.057-.07.336-.335A2.5 2.5 0 0 1 17.637.94Z" clip-rule="evenodd"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Design your own schedule</h6>

                            <p>
                                Work during the time of day that’s best for you. You are encouraged
                                to work 8-hour days and no more than 40 hours/week.
                            </p>

                        </div>

                    </div>

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" fill="none" class="me-2">
                                <path fill="#202020" fill-rule="evenodd" d="M5 0c.276 0 .5.236.5.526v2.07c.813.042 1.481.189 2.068.447.705.31 1.258.766 1.786 1.322a.546.546 0 0 1 0 .744.483.483 0 0 1-.708 0c-.472-.497-.919-.855-1.464-1.095-.446-.196-.981-.324-1.682-.364v5.836c1.106.058 2.145.316 2.952.86.958.648 1.548 1.677 1.548 3.099 0 1.468-.752 2.484-1.744 3.107-.823.518-1.823.778-2.756.846v2.076c0 .29-.224.526-.5.526a.514.514 0 0 1-.5-.526v-2.07c-.815-.042-1.486-.189-2.115-.44-.745-.299-1.41-.735-2.162-1.263a.544.544 0 0 1-.139-.73.485.485 0 0 1 .693-.146c.748.525 1.333.902 1.963 1.154.507.203 1.058.33 1.76.37v-5.834c-1.1-.053-2.14-.289-2.948-.823C.586 9.053 0 8.02 0 6.555c0-1.51.748-2.53 1.748-3.146.825-.507 1.825-.747 2.752-.809V.526C4.5.236 4.724 0 5 0Zm-.5 3.655c-.796.061-1.609.27-2.248.663C1.502 4.779 1 5.482 1 6.555c0 1.119.422 1.808 1.084 2.246.6.396 1.432.608 2.416.66V3.655Zm1 6.886v5.802c.79-.067 1.603-.291 2.244-.694C8.502 15.17 9 14.465 9 13.444c0-1.065-.418-1.76-1.088-2.212-.601-.407-1.434-.636-2.412-.693Z" clip-rule="evenodd"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Negotiation-free compensation package</h6>

                            <p>
                                Our formula-based salaries are calculated based on industry-benchmarked
                                skills and geographical location – no stressful negotiation required.
                            </p>

                        </div>

                    </div>

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="me-2">
                                <path fill="#202020" fill-rule="evenodd" d="M6.232 1.232A2.5 2.5 0 0 1 8 .5h4A2.5 2.5 0 0 1 14.5 3v1.5H17A2.5 2.5 0 0 1 19.5 7v10a2.5 2.5 0 0 1-2.5 2.5H3A2.5 2.5 0 0 1 .5 17V7A2.5 2.5 0 0 1 3 4.5h2.5V3a2.5 2.5 0 0 1 .732-1.768ZM6.5 4.5h7V3A1.5 1.5 0 0 0 12 1.5H8A1.5 1.5 0 0 0 6.5 3v1.5ZM3 5.5A1.5 1.5 0 0 0 1.5 7v4.915c5.425 2.106 11.575 2.104 17 0V7A1.5 1.5 0 0 0 17 5.5H3Zm15.5 7.485a24.68 24.68 0 0 1-17 0V17A1.5 1.5 0 0 0 3 18.5h14a1.5 1.5 0 0 0 1.5-1.5v-4.015Z" clip-rule="evenodd"></path><path fill="#202020" d="M10.707 10.293a1 1 0 1 0-1.414 1.415 1 1 0 0 0 1.414-1.415Z"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Continue your education</h6>

                            <p>
                                You’ll have a recurring budget to spend on attending conferences,
                                taking courses, and purchasing books.
                            </p>

                        </div>

                    </div>

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="me-2">
                                <path fill="#202020" fill-rule="evenodd" d="M1.232 1.232A2.5 2.5 0 0 1 3 .5h2A2.5 2.5 0 0 1 7.5 3v2A2.5 2.5 0 0 1 5 7.5H3A2.5 2.5 0 0 1 .5 5V3a2.5 2.5 0 0 1 .732-1.768ZM3 1.5A1.5 1.5 0 0 0 1.5 3v2A1.5 1.5 0 0 0 3 6.5h2A1.5 1.5 0 0 0 6.5 5V3A1.5 1.5 0 0 0 5 1.5H3Zm8.232-.268A2.5 2.5 0 0 1 13 .5h2A2.5 2.5 0 0 1 17.5 3v2A2.5 2.5 0 0 1 15 7.5h-2A2.5 2.5 0 0 1 10.5 5V3a2.5 2.5 0 0 1 .732-1.768ZM13 1.5A1.5 1.5 0 0 0 11.5 3v2A1.5 1.5 0 0 0 13 6.5h2A1.5 1.5 0 0 0 16.5 5V3A1.5 1.5 0 0 0 15 1.5h-2ZM1.232 11.232A2.5 2.5 0 0 1 3 10.5h2A2.5 2.5 0 0 1 7.5 13v2A2.5 2.5 0 0 1 5 17.5H3A2.5 2.5 0 0 1 .5 15v-2a2.5 2.5 0 0 1 .732-1.768ZM3 11.5A1.5 1.5 0 0 0 1.5 13v2A1.5 1.5 0 0 0 3 16.5h2A1.5 1.5 0 0 0 6.5 15v-2A1.5 1.5 0 0 0 5 11.5H3Zm11-1a.5.5 0 0 1 .5.5v2.5H17a.5.5 0 0 1 0 1h-2.5V17a.5.5 0 0 1-1 0v-2.5H11a.5.5 0 0 1 0-1h2.5V11a.5.5 0 0 1 .5-.5Z" clip-rule="evenodd"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Subscribe to apps and services</h6>

                            <p>
                                You’ll have a monthly budget to spend on services that help you do your job:
                                home internet, work apps, music subscription, etc.
                            </p>

                        </div>

                    </div>

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="me-2">
                                <path fill="#202020" fill-rule="evenodd" d="M1.232 1.232A2.5 2.5 0 0 1 3 .5h14A2.5 2.5 0 0 1 19.5 3v10a2.5 2.5 0 0 1-2.5 2.5h-4.11l.561 2.244.903.902A.5.5 0 0 1 14 19.5H6a.5.5 0 0 1-.354-.854l.903-.902.56-2.244H3A2.5 2.5 0 0 1 .5 13V3a2.5 2.5 0 0 1 .732-1.768ZM1.5 11.5h17V13a1.5 1.5 0 0 1-1.5 1.5H3A1.5 1.5 0 0 1 1.5 13v-1.5Zm17-1h-17V3A1.5 1.5 0 0 1 3 1.5h14A1.5 1.5 0 0 1 18.5 3v7.5Zm-10.36 5-.655 2.621a.5.5 0 0 1-.131.233l-.147.146h5.586l-.147-.146a.501.501 0 0 1-.131-.233L11.86 15.5H8.14Z" clip-rule="evenodd"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Purchase the hardware you need</h6>

                            <p>
                                You will have access to a recurring budget to spend on work-related equipment.
                            </p>

                        </div>

                    </div>

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="me-2">
                                <path fill="#202020" d="M8 0c5.523 0 10 4.477 10 10a9.968 9.968 0 0 1-2.93 7.071.5.5 0 0 1-.706 0L8 10.707.854 17.854a.5.5 0 0 1-.708-.708L7.293 10 .929 3.636a.5.5 0 0 1 0-.707A9.968 9.968 0 0 1 7.999 0Zm7.567 5.125c-.3 1.988-1.9 4.759-4.388 7.346l3.529 3.53A8.965 8.965 0 0 0 17 10c0-1.797-.526-3.47-1.433-4.875ZM6.236 7.529l4.235 4.235c3.307-3.45 4.854-7.167 3.893-8.128-.961-.961-4.678.586-8.128 3.893ZM8 1a8.96 8.96 0 0 0-6 2.292l3.529 3.53c2.587-2.488 5.358-4.089 7.346-4.389A8.958 8.958 0 0 0 8 1Z"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Recharge with generous time off</h6>

                            <p>
                                You get 8 weeks (40 days) of PTO per year to use as they wish on
                                vacations and national holidays.
                            </p>

                        </div>

                    </div>

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="me-2">
                                <path fill="#202020" fill-rule="evenodd" d="M12.192 1.118a.5.5 0 0 1 .374-.134c4.393.29 7.934 3.479 7.934 8.043a.5.5 0 0 1-.007.083c-.504 3-1.28 4.796-2.707 5.789-1.4.973-3.314 1.084-5.786 1.084-2.472 0-4.386-.11-5.785-1.084-1.428-.993-2.204-2.789-2.708-5.789A.5.5 0 0 1 4 8.527h8.033V1.483a.5.5 0 0 1 .159-.365Zm.841 7.41h6.45c-.233-3.522-2.929-6.047-6.45-6.495v6.494Zm6.37 1H4.597c.492 2.564 1.188 3.855 2.188 4.55 1.1.766 2.686.905 5.214.905 2.528 0 4.114-.14 5.215-.905 1-.695 1.695-1.986 2.187-4.55Z" clip-rule="evenodd"></path><path fill="#202020" fill-rule="evenodd" d="M5.402 12.993a.5.5 0 0 1 .588.392l.7 3.5a.5.5 0 0 1-.98.196l-.7-3.5a.5.5 0 0 1 .392-.588Zm11.72 1.505a.5.5 0 0 1 .363.606l-.5 2a.5.5 0 0 1-.97-.242l.5-2a.5.5 0 0 1 .606-.364ZM7.5 18a.5.5 0 0 1 .5-.5h7a.5.5 0 1 1 0 1H8a.5.5 0 0 1-.5-.5Z" clip-rule="evenodd"></path><path fill="#202020" fill-rule="evenodd" d="M16.5 17.483a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0ZM6.5 17.5a1 1 0 1 0 0 2 1 1 0 0 0 0-2Zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0ZM.5 6.983a.5.5 0 0 1 .5-.5h2a1.5 1.5 0 0 1 1.5 1.5v1a.5.5 0 0 1-1 0v-1a.5.5 0 0 0-.5-.5H1a.5.5 0 0 1-.5-.5Z" clip-rule="evenodd"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Spend time with your new baby</h6>

                            <p>
                                New parents receive 5 weeks of paid parental leave in addition
                                to 13 weeks of paid pregnancy-related medical leave.
                            </p>

                        </div>

                    </div>

                    <div class="career-advantage">

                        <div>

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" class="me-2">
                                <path fill="#202020" fill-rule="evenodd" d="M12.134 1.182C12.978.686 13.828.5 14.8.5c2.053 0 4.7 1.915 4.7 5.071 0 1.578-.665 3.254-2.128 5.162-1.463 1.906-3.75 4.079-7.065 6.661a.5.5 0 0 1-.614-.788c3.285-2.56 5.498-4.673 6.885-6.482C17.965 8.318 18.5 6.851 18.5 5.571c0-2.558-2.153-4.071-3.7-4.071-.828 0-1.496.154-2.16.544-.68.398-1.385 1.06-2.252 2.128a.5.5 0 1 1-.776-.63c.898-1.107 1.692-1.874 2.522-2.36Z" clip-rule="evenodd"></path><path fill="#202020" fill-rule="evenodd" d="M7.866 1.182C7.022.686 6.172.5 5.2.5 3.147.5.5 2.415.5 5.571c0 1.578.665 3.254 2.128 5.162 1.463 1.906 3.75 4.079 7.065 6.661a.5.5 0 0 0 .614-.788c-3.285-2.56-5.498-4.673-6.885-6.482C2.035 8.318 1.5 6.851 1.5 5.571 1.5 3.013 3.653 1.5 5.2 1.5c.828 0 1.496.154 2.16.544.68.398 1.385 1.06 2.252 2.128a.5.5 0 0 0 .776-.63c-.898-1.107-1.692-1.874-2.522-2.36Z" clip-rule="evenodd"></path>
                            </svg>

                        </div>

                        <div>

                            <h6>Invest in your health and wellness</h6>

                            <p>
                                Take care of yourself with a monthly budget for things like a gym
                                membership, healthy snacks, massages, health insurance, etc.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            <div class="careers-process container">

                <h3 class="mb-5">Our transparent application process</h3>

                <div class="process-steps">

                    <div class="process-step">

                        <div class="step">
                            <span>1</span>
                        </div>

                        <div class="process-title">Submit your application</div>

                        <p class="process-detail">
                            Follow the steps to complete the online application and respond to the
                            longer-form application questions. We encourage candidates to spend time reading
                            our blog to get to know our company, values and products.
                        </p>

                    </div>

                    <div class="process-step">

                        <div class="step">
                            <span>2</span>
                        </div>

                        <div class="process-title">Interviews and test project</div>

                        <p class="process-detail">
                            Once your application has passed an internal review, you’ll receive an email from
                            careers@planno.com to schedule your first interview with someone from the Planno team
                            over Google Meet. You may be requested to complete a test project that highlights
                            your technical capabilities.
                        </p>

                    </div>

                    <div class="process-step">

                        <div class="step">
                            <span>3</span>
                        </div>

                        <div class="process-title">Decision</div>

                        <p class="process-detail">
                            You’ll always hear back from us via our careers@planno.com email address –
                            we manually review and respond to every candidate’s application. If the hiring
                            committee has agreed to hire you, you’ll receive an official offer to join our team.
                        </p>

                    </div>

                    <div class="process-step">

                        <div class="step">
                            <span>4</span>
                        </div>

                        <div class="process-title">Onboarding and mentorship</div>

                        <p class="process-detail">
                            Leading up to your start date, you’ll be invited to a meticulously crafted Planno
                            project that outlines your first months at Planno. You’ll also be paired with a mentor
                            and have the opportunity to spend a week working with them in person wherever
                            they’re located.
                        </p>

                    </div>

                </div>

            </div>

            <div class="p-5" id="opportunities"></div>

            <div class="careers-opportunities container">

                <h3 class="mb-5">Career Opportunities</h3>

                <div class="careers-header">

                    <p>
                        Explore career opportunities at Planno.
                    </p>

                    <select name="department" id="department" class="form-select">
                        <option value="0">All</option>
                        <option value="1">Marketing</option>
                        <option value="2">Engineering</option>
                    </select>

                </div>

                <div class="career-opportunities">

                    <a href="#" class="opportunity">

                        <div class="opportunity-details">

                            <div class="opportunity-title">
                                Head of Marketing
                            </div>

                            <div class="opportunity-tags">
                                <span>Full-time</span>
                                <span class="fw-bolder">•</span>
                                <span>On site</span>
                            </div>

                        </div>

                        <div class="opportunity-apply">
                            Apply now
                            <i class="fa-solid fa-arrow-right ms-1"></i>
                        </div>

                    </a>

                    <a href="#" class="opportunity">

                        <div class="opportunity-details">

                            <div class="opportunity-title">
                                Backend Engineer
                            </div>

                            <div class="opportunity-tags">
                                <span>Full-time</span>
                                <span class="fw-bolder">•</span>
                                <span>Remote</span>
                            </div>

                        </div>

                        <div class="opportunity-apply">
                            Apply now
                            <i class="fa-solid fa-arrow-right ms-1"></i>
                        </div>

                    </a>

                    <a href="#" class="opportunity">

                        <div class="opportunity-details">

                            <div class="opportunity-title">
                                Data Analyst
                            </div>

                            <div class="opportunity-tags">
                                <span>Part-time</span>
                                <span class="fw-bolder">•</span>
                                <span>Remote</span>
                            </div>

                        </div>

                        <div class="opportunity-apply">
                            Apply now
                            <i class="fa-solid fa-arrow-right ms-1"></i>
                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>

@endsection
