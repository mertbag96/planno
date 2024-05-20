@extends('app')

@section('title')
    Contact us | Planno
@endsection

@section('content')

    <section class="contact-us">

        <div class="contact-us-banner container">

            <div>

                <h6>Get in touch</h6>

                <h1>Contact Us</h1>

                <p>
                    We're here to help and answer any questions you might have.
                    We look forward to hearing from you!
                </p>

                <a href="#contact-us">
                    Contact us
                </a>

            </div>

            <img src="{{ asset("assets/images/contact-us/banner.png") }}" alt="Contact us">

        </div>

        <div class="contact-us-information py-4">

            <div class="contact-us-elements container">

                <a href="https://www.google.com/maps" target="_blank" class="contact-us-element">

                    <div class="element-icon">

                        <i class="fa-solid fa-location-dot"></i>

                    </div>

                    <div class="element-detail">
                        Andre Ridges Apt. 943, South Carolina
                    </div>

                </a>

                <a href="tel:+1-618-738-3828" class="contact-us-element">

                    <div class="element-icon">

                        <i class="fa-solid fa-phone-alt"></i>

                    </div>

                    <div class="element-detail">
                        +1 618 738 3828
                    </div>

                </a>

                <a href="mailto:support@planno.com" class="contact-us-element">

                    <div class="element-icon">

                        <i class="fa-solid fa-envelope"></i>

                    </div>

                    <div class="element-detail">
                        support@planno.com
                    </div>

                </a>

            </div>

        </div>

        <div class="contact-us-faq container">

            <h3>F.A.Q.</h3>

            <div class="accordion accordion-flush" id="faq">

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-1" aria-expanded="false" aria-controls="q-1">
                            Varius lacus tincidunt at tempor ut eu elit?
                        </button>

                    </h2>

                    <div id="q-1" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">
                            In dignissim nisl vel ligula sagittis rhoncus ac et lacus. Nunc consectetur
                            sollicitudin ipsum, sit amet varius lacus tincidunt at. Integer eget elit ut dolor
                            ullamcorper vehicula. Nunc arcu quam, tincidunt a consequat non, scelerisque in risus.
                            Donec nec turpis eu leo imperdiet varius nec non lectus. Donec tristique tortor sed
                            aliquam dictum. Integer at metus nec velit dictum tempor ut eu elit. Quisque ut eros
                            non elit luctus tristique auctor sit amet velit.
                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-2" aria-expanded="false" aria-controls="q-2">
                            Integer lacus dui, euismod varius orci imdatre ultrices convallis neque?
                        </button>

                    </h2>

                    <div id="q-2" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">

                            <p>
                                Fusce dui eros, ultrices sed orci eget, iaculis vehicula mauris. Sed aliquam arcu
                                enim, sed auctor turpis condimentum et. Integer turpis turpis, aliquet et lacinia
                                at, luctus eget elit. Cras et sapien vel arcu rutrum dignissim. Cras mollis sapien
                                leo, ac tincidunt eros suscipit at. Sed velit felis, consequat sed tempor quis,
                                commodo aliquet leo. Nulla facilisi. Donec laoreet risus mauris. Vestibulum ante
                                ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam
                                lobortis lorem nunc, eget dapibus lectus aliquam vel. Integer lacus dui, euismod
                                varius orci in, ultrices convallis neque. Proin cursus sed nisi nec molestie.
                                Maecenas sodales libero est, non imperdiet sapien tincidunt nec. Vestibulum est,
                                feugiat non viverra sagittis, aliquam a nunc. Nullam quam massa, sagittis vitae
                                fringilla at, ultricies quis justo.
                            </p>

                            Pellentesque auctor cursus neque at lobortis. Praesent aliquet metus et quam pellentesque
                            congue a et dui. Praesent pretium mollis nibh nec posuere. Aliquam sit amet mauris at
                            mauris dapibus placerat. Donec volutpat pellentesque lacus, non tincidunt arcu vehicula
                            id. Curabitur libero mi, rhoncus sed nulla vel, pretium mattis odio. Duis vel luctus arcu.
                            In hac habitasse platea dictumst. Morbi ornare commodo libero, non lobortis tortor. Etiam
                            eu neque mauris. In augue erat, ullamcorper vel est aliquam, suscipit congue ligula.
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis
                            egestas. In ullamcorper justo non justo ullamcorper, consectetur consequat metus
                            condimentum. Sed malesuada tempor ex a laoreet. Ut in tortor libero.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-3" aria-expanded="false" aria-controls="q-3">
                            Duis tellus tempor in?
                        </button>

                    </h2>

                    <div id="q-3" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">
                            Nullam accumsan gravida bibendum. Maecenas efficitur consequat velit, ut sollicitudin
                            urna aliquam vitae. Duis tellus sapien, tempor in nisi eu, dictum hendrerit ex. Fusce
                            in euismod urna, at gravida dolor. Nullam quis suscipit libero, et vehicula mauris.
                            Aenean dapibus turpis sem, vitae lobortis augue vestibulum a. Etiam hendrerit in
                            lacus nec facilisis.
                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-4" aria-expanded="false" aria-controls="q-4">
                            Vestibulum scelerisque vel eros eu hendrerit?
                        </button>

                    </h2>

                    <div id="q-4" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">
                            Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                            Proin cursus metus nec congue consectetur. Maecenas quis convallis lorem. Nullam
                            placerat egestas erat, non ultricies lorem ultrices nec. Morbi euismod sem mauris,
                            id tristique leo faucibus id. Aenean nec est sit amet enim dapibus mollis. Donec
                            dapibus justo quis purus elementum, vel efficitur nibh tristique. Vestibulum rhoncus
                            augue ligula, vitae vestibulum quam viverra at. Vestibulum scelerisque vel eros eu
                            hendrerit. Pellentesque pellentesque tellus nec dapibus lacinia. Ut vitae hendrerit
                            nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                            curae; Integer fringilla eget ligula id gravida.
                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-5" aria-expanded="false" aria-controls="q-5">
                            Nunc arcu quam, tincidunt a consequat non, scelerisque in risus nec turpis eu leo?
                        </button>

                    </h2>

                    <div id="q-5" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">

                            <p>
                                Aenean imperdiet, justo eu tristique mollis, eros orci tincidunt mi, non ornare
                                velit lectus in tellus. Nam lacinia massa eget tellus posuere, id dignissim dui
                                aliquam. Maecenas tellus tortor, consectetur at magna eget, semper vehicula velit.
                                Curabitur sed euismod mi, et euismod sem. Nullam eu blandit augue. Vestibulum a
                                posuere lectus. Vestibulum magna metus, aliquet sit amet tellus eget, vulputate
                                facilisis nisi. In ultricies sit amet nunc eu tincidunt.
                            </p>

                            <p>
                                Duis lobortis et orci eu congue. Aliquam dignissim quis diam sit amet commodo.
                                Curabitur lorem lacus, convallis nec faucibus et, pellentesque id tellus. Maecenas
                                a tempus diam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In porttitor,
                                nulla id aliquam maximus, diam augue faucibus diam, ac interdum enim dolor ac magna.
                                Cras tortor nisi, iaculis quis pharetra ut, imperdiet at ligula. Quisque posuere
                                lacus nec consectetur venenatis. Integer consequat scelerisque sem, nec tincidunt
                                metus tempor eget. In tristique tortor quis urna porta, vitae finibus odio ornare.
                                Duis id eros tempor, efficitur eros malesuada, cursus mi.
                            </p>

                            Suspendisse sed nulla dui. Maecenas et ligula volutpat, maximus nisl at, maximus justo.
                            In bibendum aliquam aliquet. Phasellus gravida, turpis id faucibus hendrerit, mi nibh
                            porttitor nisi, suscipit vehicula nisi lorem sit amet mi. Etiam scelerisque augue nec
                            ex luctus, mollis sollicitudin turpis iaculis. Nullam eget lacus turpis. Donec tristique
                            neque odio. Vestibulum eu lobortis risus.

                        </div>

                    </div>

                </div>

                <div class="accordion-item">

                    <h2 class="accordion-header">

                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#q-6" aria-expanded="false" aria-controls="q-6">
                            Nullam eget lacus turpis?
                        </button>

                    </h2>

                    <div id="q-6" class="accordion-collapse collapse" data-bs-parent="#faq">

                        <div class="accordion-body">
                            Pellentesque non erat ut mauris blandit faucibus non vel nisl. Donec feugiat risus velit.
                            Aliquam consectetur ante eget nibh dignissim, et consequat mauris feugiat. Aenean auctor
                            eu tellus congue consectetur. In malesuada sodales sodales. Proin eu fermentum nisl.
                            Vestibulum id augue sed nunc interdum efficitur quis nec dolor. Praesent dignissim risus
                            eu vestibulum congue. Duis vulputate felis et lectus mattis imperdiet. Interdum et
                            malesuada fames ac ante ipsum primis in faucibus. Duis at justo lacinia, mollis ex nec,
                            lacinia turpis. Praesent consequat congue dolor eu porta. Etiam pulvinar nec justo eu
                            efficitur. Aliquam mollis ac arcu consectetur placerat. Vivamus mi diam, pellentesque
                            vitae nulla ut, pharetra pretium justo. Donec eu fermentum quam, quis scelerisque augue.
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div id="contact-us" class="py-2"></div>

        <div class="contact-us-form container">

            <img src="{{ asset("assets/images/contact-us/form.png") }}" alt="Contact form">

            <form action="#" method="POST" class="" autocomplete="off" novalidate>

                <h1 class="w-100">Contact us!</h1>

                <h6 class="w-100">How can we help you?</h6>

                @csrf

                <div class="form-element mb-4">

                    <label for="first-name">First name</label>

                    <input type="text" name="first_name" id="first-name">

                </div>

                <div class="form-element mb-4">

                    <label for="last-name">Last name</label>

                    <input type="text" name="last_name" id="last-name">

                </div>

                <div class="form-element mb-4">

                    <label for="email">Email</label>

                    <input type="email" name="email" id="email" required>

                </div>

                <div class="form-element mb-4">

                    <label for="topic">Topic</label>

                    <input type="text" name="topic" id="topic" required>

                </div>

                <div class="form-element mb-4 w-100">

                    <label for="message">Message</label>

                    <textarea name="message" id="message" class="w-100" rows="6"></textarea>

                </div>

                <div class="form-element mb-4 w-100">

                    <div class="d-flex w-100">

                        <input type="checkbox" name="terms" id="terms">

                        <label for="terms" style="margin: -.25rem 0 0 1rem;">
                            I have read the
                            <a href="{{ route("privacy") }}" target="_blank">privacy policy</a>
                            and accept the
                            <a href="{{ route("terms") }}" target="_blank">service terms</a>.
                        </label>

                    </div>

                </div>

                <div class="form-element w-100">

                    <button type="submit">Submit</button>

                </div>

            </form>

        </div>

    </section>

@endsection
