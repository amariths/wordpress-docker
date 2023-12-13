<?php
    /*
    Template Name: menu
    */
get_header();
?>

<div class="bg" >
    <h5 class="menu-content">Sidebar menu</h5>
<?php
 wp_nav_menu(array(
        'theme_location' => 'sidebar',
        'menu_class' => 'menu-primar',
        'container' => false,
    ));
    ?>
</div>

<?php if (have_posts()):
 while (have_posts()): the_post()?>
 <h1 class="page-title"  ><?php the_title() ?></h1>
 <p class="page-content"  ><?php the_content(); ?></p>
 <?php endwhile; ?>
<?php endif; ?>



<?php
get_footer();
?>
