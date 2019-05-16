<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <section class="page">
        <div class="header">
            <div class="container">
                <h1 class="header__h1"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="container py-5">
            <?php the_content(); ?>	
        </div>
    </section>
<?php endwhile; ?>
<?php get_footer(); ?>