
    <?php
get_header();
?>


<h1>hidsfaa</h1>

<?php if (have_posts()):
 while (have_posts()): the_post()?>
 <h1 class="page-title" ><?php the_title() ?></h1>
 <p class="page-content"  ><?php the_content(); ?></p>
 <?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
?>
