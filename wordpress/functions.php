<?php

    function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu' => __('Header Menu'),
                'big-header-menu' => __('Big header menu'),
                'footer-menu' => __('Footer Menu')
            )
        );
    }
    add_action('init', 'register_my_menus');

    function create_primary_contact() {
        ?>
            <section class="contact">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <a href="index.html" class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="">
                                <span class="logo__text ml-2">plný měšec</span>
                            </a>
                            <h2 class="contact__h2">pronto credit s.r.o</h2>
                            <p class="contact__p small mb-2">rok zalozeni 2007</p>
                            <p class="contact__p small">spolecnosc je zapsana</p>
                            <p class="contact__p small">v obchodnim rejstriku vedenem</p>
                            <p class="contact__p small">mestskym soudem v praze pod</p>
                            <p class="contact__p small">spisovou znackou c 214024</p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marker.png" alt="">
                            <h2 class="contact__h2 mt-3">sidlo spolecnosti</h2>
                            <p class="contact__p small">rybna 716/24</p>
                            <p class="contact__p small">stare mesto</p>
                            <p class="contact__p small">110 00 praha</p>
                            <p class="contact__p small">1ic: 275 25 210</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-md-6 col-lg-12 mb-4 ">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail.png" alt="" class="mt-3">
                                    <h2 class="contact__h2 mt-3">e-mail adresa</h2>
                                    <p class="contact__p small">info@prontopujcka.cz</p>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone.png" alt="">
                                    <h2 class="contact__h2 mt-3">telefonni spojeni</h2>
                                    <p class="contact__p small">+420 778 000 002</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }

    function create_secondary_contact() {
        ?>
            <section class="contact contact--blue">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <a href="index.html" class="logo">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_2.png" alt="">
                                <span class="logo__text ml-2">plný měšec</span>
                            </a>
                            <h2 class="contact__h2 mt-3">pronto credit s.r.o</h2>
                            <p class="contact__p small mb-2">rok zalozeni 2007</p>
                            <p class="contact__p small">spolecnosc je zapsana</p>
                            <p class="contact__p small">v obchodnim rejstriku vedenem</p>
                            <p class="contact__p small">mestskym soudem v praze pod</p>
                            <p class="contact__p small">spisovou znackou c 214024</p>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/marker_2.png" alt="">
                            <h2 class="contact__h2 mt-3">sidlo spolecnosti</h2>
                            <p class="contact__p small">rybna 716/24</p>
                            <p class="contact__p small">stare mesto</p>
                            <p class="contact__p small">110 00 praha</p>
                            <p class="contact__p small">1ic: 275 25 210</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-md-6 col-lg-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mail_2.png" alt="" class="mt-2">
                                    <h2 class="contact__h2 mt-3">e-mail adresa</h2>
                                    <p class="contact__p small">info@prontopujcka.cz</p>
                                </div>
                                <div class="col-md-6 col-lg-12">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone_2.png" alt="" class="mt-3">
                                    <h2 class="contact__h2 mt-3">telefonni spojeni</h2>
                                    <p class="contact__p small">+420 778 000 002</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }
?>