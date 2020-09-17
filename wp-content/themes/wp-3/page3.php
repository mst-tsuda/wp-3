<?php
/*
Template Name: page3
*/
?>

<?php load_template(TEMPLATEPATH . '/header.php'); ?>

<div class="home">
        <p>
          <?php while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
          <?php endwhile; ?>
        </p
</div>

<?php get_footer(); ?>