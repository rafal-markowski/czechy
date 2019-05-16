    <?php if(is_front_page()): ?>    
        <footer class="footer">
            <div class="footer__top">
    <?php else: ?>
        <footer class="footer footer--two">
    <?php endif; ?>
            <div class="container">
                <div class="row">
                    <div class="footer__item col-lg-6">
                        systém podnikového řízení creditonline &copy;2018
                    </div>
                    <div class="footer__item col-lg-6 justify-content-lg-end">
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'footer-menu',
                                'container' => 'ul',
                                'menu_class' => 'footer__menu'
                            ));
                        ?>
                    </div>
                </div>
            </div>
    <?php if(is_front_page()): ?>   
        </div>
    <?php endif; ?>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <?php if(is_front_page()): ?>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/carousel.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/hero-form.js"></script>
    <?php endif; ?>
    <?php wp_footer(); ?>
</body>
</html>