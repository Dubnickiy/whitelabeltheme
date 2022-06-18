<?php
get_header();
?>

<?php while (have_posts()) : the_post(); ?>
<div class="single-card">
              <?php the_post_thumbnail(); ?>
                <h4 class="single-card-title"><?php the_title(); ?></h4>
               <div class="single-text"> <?php the_content(); ?></div>
            </div>
<?php endwhile; ?>
<?php
get_footer();
?>