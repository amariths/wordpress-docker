
    <?php wp_head(); ?>
<?php
get_header();
?>



<?php if (have_posts()):
 while (have_posts()): the_post()?>
 <div class="container " >
    <div class="row align-items-center" >
 <img class="hem-img col" src="<?= the_post_thumbnail_url("large") ?>" alt="">

 <h1 class="hem-title"><?php the_title() ?></h1>
 <p class="hem-content"><?php the_content(); ?></p>
 </div>
</div>
 <?php endwhile; ?>
<?php endif; ?>



<?php
get_footer();

?>
