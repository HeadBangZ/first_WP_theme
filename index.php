<?php get_header(); ?>

    <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <h3><?php the_title(); ?></h3>
                <small>Posted: <?php the_time('j F, Y'); ?> klokken <?php the_time('H:i') ?> i kategorien: <?php the_category(); ?></small>
                <p><?php the_content(); ?></p>
                <hr>
            <?php endwhile;
        endif;
    ?>

	echo "Hello Thomas!";
	echo "Hello back Toms!";
	echo "Hello Thomas + 1";
<?php get_footer(); ?>

