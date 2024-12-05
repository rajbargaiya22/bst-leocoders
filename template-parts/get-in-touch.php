<?php
/**
 * The template part for Get In Touch section
 *
 * @package rj-bst
 */
?>

<!-- start section -->
<section class="section section--bg-img jarallax" data-speed="0.3" data-img-position="50% 60%" style="background-image: url(img/bg_4.jpg);background-color: #f95a3f;">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                <div class="section-heading section-heading--white section-heading--center">
                    <h5 class="__subtitle">Main products</h5>

                    <h2 class="__title">Get in Touch</h2>
                </div>

                <div class="spacer py-6"></div>

                <!-- <form class="form-subscribe js-contact-form" action="#">
                    <div class="input-wrp">
                        <input class="textfield" placeholder="Name" name="name" type="text" />
                    </div>

                    <div class="input-wrp">
                        <input class="textfield" placeholder="Email" name="email" type="text" inputmode="email" x-inputmode="email" />
                    </div>

                    <label class="input-wrp">
                        <textarea class="textfield" placeholder="Message" name="message"></textarea>
                    </label>

                    <button class="custom-btn custom-btn--big custom-btn--s4 wide" type="submit" role="button">Subscribe</button>

                    <div class="form__note"></div>

                    
                </form> -->
                <?php
                    echo do_shortcode('[contact-form-7 id="f4a97b9" title="Contact form 1"]');
                ?>

                
            </div>
        </div>
    </div>
</section>
<!-- end section -->