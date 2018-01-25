<!-- Conatct Us -->
<section class="contact tri-white-top padding-top-100 padding-bottom-100" id="contact">
    <div class="container" id="contacts">

        <!-- Heading Block -->
        <div class="heading text-center"> <span>Get in Touch</span>
            <h3>Contact Us</h3>
            <hr>
            <i class="fa fa-bookmark-o"></i> </div>

        <!-- Conact Info -->
        <div class="contact-info">
            <ul>
                <li> <i class="fa fa-map-o"></i>
                    <p>121 King Street, Melbourne
                        Victoria 3000 Australia</p>
                </li>
                <li> <i class="fa fa-phone"></i>
                    <p>(02) 123-456-7890</p>
                    <p>(02) 600-700-800</p>
                </li>
                <li> <i class="fa fa-globe"></i>
                    <p>example.com</p>
                    <p> info@example.com</p>
                </li>
                <li> <i class="fa fa-clock-o"></i>
                    <p>Mon-Sat: 10:00am - 11:00pm</p>
                    <p> Sun: 10:00am - 9:00pm</p>
                </li>
            </ul>
        </div>

        <!-- CONTACT FORM -->
        <div class="contact-form text-center">
            <div class="about-text text-center margin-top-80">
                <h1>send us a message </h1>
            </div>

            <!-- Success Msg -->
            <div id="contact_message" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank You. Your Message has been Submitted</div>

            <!-- FORM -->
            <form role="form" id="contact_form" class="contact-form" method="post" onSubmit="return false">
                <ul class="row">
                    <li class="col-sm-6">
                        <label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name *">
                        </label>
                    </li>
                    <li class="col-sm-6">
                        <label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email *">
                        </label>
                    </li>
                    <li class="col-sm-6">
                        <label>
                            <input type="text" class="form-control" name="company" id="company" placeholder="Phone no. *">
                        </label>
                    </li>
                    <li class="col-sm-6">
                        <label>
                            <input type="text" class="form-control" name="website" id="website" placeholder="Subject">
                        </label>
                    </li>
                    <li class="col-sm-12">
                        <label>
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="Your Message *"></textarea>
                        </label>
                    </li>
                    <li class="col-sm-12 text-center">
                        <button type="submit" value="submit" class="btn btn-round btn-dark btn-small" id="btn_submit" onClick="proceed();">Send Message</button>
                    </li>
                </ul>
            </form>
            <?php echo do_shortcode( '[contact-form-7 id="163" title="pizza contact"]' ); ?>
        </div>
    </div>
</section>