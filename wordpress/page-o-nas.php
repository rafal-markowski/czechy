<?php 
/*
Template Name: O nas
*/
get_header(); ?>
    <section class="o-nas">
        <div class="header">
            <div class="container">
                <h1 class="header__h1">O nas</h1>
            </div>
        </div>
        <div class="container py-5">
            <div class="o-nas__item row">
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/o-nas_1.png" alt="" class="o-nas__img">
                </div>
                <div class="col-lg-6">
                    <h2>pujcka do 100.000 kc</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pellentesque pretium est, vel pharetra enim pretium facilisis. Etiam in venenatis magna. Donec eget dapibus orci.</p>
                </div>
            </div>
            <div class="o-nas__item row text-lg-right">
                <div class="col-lg-6">
                    <h2>lorem ipsum doloret sit amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pellentesque pretium est, vel pharetra enim pretium facilisis. Etiam in venenatis magna. Donec eget dapibus orci.</p>
                </div>
                <div class="col-lg-6 order-first order-lg-last">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/o-nas_2.png" alt="" class="o-nas__img">
                </div>
            </div>
            <div class="o-nas__item row">
                <div class="col-lg-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/o-nas_3.png" alt="" class="o-nas__img">
                </div>
                <div class="col-lg-6">
                    <h2>gavida set perceptonais</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pellentesque pretium est, vel pharetra enim pretium facilisis. Etiam in venenatis magna. Donec eget dapibus orci.</p>
                </div>
            </div>
        </div>
    </section>
<?php create_secondary_contact(); ?>
<?php get_footer(); ?>