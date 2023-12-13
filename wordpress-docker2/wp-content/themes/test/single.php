
<?php
get_header();
?>


<h1>hi</h1>

<?php if (have_posts()):
 while (have_posts()): the_post()?>
 <h1 class="single-title" ><?php the_title() ?></h1>
 <p class="single-content"  ><?php the_content(); ?></p>
 <p> <?php the_post();?> </p>
 <?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
?>
