<x-layout>
    <x-breadcrumbs :message="$page_title" />
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head wow fadeInUp" data-wow-delay=".4s"
                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="single-head">
                            <div class="contant-inner-title">
                                <h2>Our Contacts &amp; Location</h2>
                                <p>Business consulting excepteur sint occaecat cupidatat consulting non proident.</p>
                            </div>
                            <div class="single-info">
                                <h3>Opening hours</h3>
                                <ul>
                                    <li>Daily: 9.30 AM–6.00 PM</li>
                                    <li>Sunday &amp; Holidays: Closed</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <h3>Contact info</h3>
                                <ul>
                                    <li>77408 Satterfield Motorway Suite</li>
                                    <li>469 New Antonetta, BC K3L6P6</li>
                                    <li><a href="mailto:info@yourwebsite.com">example@info.com</a></li>
                                    <li><a href="tel:(617) 495-9400-326">(617) 495-9400-326</a></li>
                                </ul>
                            </div>
                            <div class="single-info contact-social">
                                <h3>Social contact</h3>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="lni lni-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="form-main">
                            <div class="form-title">
                                <h2>Get in Touch</h2>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form.</p>
                            </div>
                            <form class="form" method="post"
                                action="https://demo.graygrids.com/themes/classigrids/assets/mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Your Name"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Your Subject"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Your Email"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Your Phone"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="submit" class="btn">Submit Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
