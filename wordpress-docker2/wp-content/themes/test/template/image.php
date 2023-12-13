<?php
    /*
    Template Name: image
    */
get_header();
?>


<?php if (have_posts()):
 while (have_posts()): the_post()?>
  <img class="img" src="<?= the_post_thumbnail_url("large") ?>" alt="">
 <h1 class="img-title" ><?php the_title() ?></h1>
 <p class="img-content" ><?php the_content(); ?></p>

 <?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
?>
