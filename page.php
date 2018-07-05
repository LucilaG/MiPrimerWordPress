<?php
get_header();
if(have_posts()) :
    while (have_posts()) : the_post(); ?>

    <article class= "post page">
         <?php if ( $post->post_parent ) {
                 $children = wp_page_menu( array(
                  'menu_class'   => 'nav_child_page',
                  'child_of' => $post ->post_parent, 
                  'title_li' => '', 
                  'echo' => 0 )
                );
                } else {
                    $children = wp_page_menu( array(
		            'menu_class'   => 'nav_child_page',
                    'child_of' => $post->ID, 
                    'title_li' => '',
                    'echo' => 0 ) );
                } if ( $children ) : 
        ?> 
        <?php echo $children; ?> 
        <?php endif; ?>﻿
        <h3><?php the_title();?></h3>
        <?php the_content()?>
    </article>
    
<?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

get_footer();
?>