@extends('layouts.web.web')

@section('content')
<section class="contact">
        <div class="container">

            <div class="contact-text" data-aos-easing="linear" data-aos="fade-up" data-aos-duration="1000">
                <h1>Contact Us</h1>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201934.40928134552!2d-122.48566773353377!3d37.737861973284986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1527075885798"
                    width="1110" height="434" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>


            <form data-aos-easing="linear" data-aos="fade-up" data-aos-duration="1000">
                <div class="contact-boxes">
                    <input type="text" placeholder="Your name" required>
                    <input type="email" placeholder="Your email" required>
                    <input type="text" placeholder="Website" required>
                </div>
                <div class="text-area">
                    <textarea name="text" id="contact-area" placeholder="Your message"></textarea>
                </div>

                <button type="submit">GET A QUOTE</button>

            </form>
        </div>
    </section>

@endsection