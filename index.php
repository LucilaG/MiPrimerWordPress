<?php
get_header();
if(have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class= "post">
        <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <?php the_content()?>
    </article>

<?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();
?>