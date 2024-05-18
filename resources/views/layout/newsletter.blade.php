<section class="newsletter">

    <div class="newsletter-content container">

        <div>

            <h1>Subscribe to our newsletter</h1>

            <h6>Receive updates on the latest news and offers.</h6>

        </div>

        <div class="newsletter-form">

            <form action="#" method="POST" class="position-relative" autocomplete="off">

                @csrf

                <label for="newsletter" class="d-none"></label>

                <input type="email" name="newsletter" id="newsletter" placeholder="Please enter your email" required>

                <button type="submit">Subscribe</button>

            </form>

        </div>

    </div>

</section>
