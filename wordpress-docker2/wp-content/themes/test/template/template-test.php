<?php
    /*
    Template Name: Test
    */
get_header();
?>

<h1>this is template</h1>

<?php if (have_posts()):
 while (have_posts()): the_post()?>
 <h1><?php the_title() ?></h1>
 <p><?php the_content(); ?></p>
 <?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
?>
