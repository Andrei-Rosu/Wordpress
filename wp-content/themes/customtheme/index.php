<?php get_header();?>
    


<?php
// La boucle wordpress(wordpress loop ) permet d'afficher plusieurs contenus selon la page visitée.
// Si la page en question affiche seulement un article, cette boucle ne sera parcourue q'une seule fois.
// Sur une page contenant une liste d'articles , elle sera parcourue autant de fois qu'il ya d'articles.
while(have_posts()): // while ($i<$nbPosts)
    the_post();
    if(is_front_page() && is_home()): ?>
    <h2><?php the_title(); ?></h2>
<?php else: ?>
<h1><?php the_title() ;?></h1>
<?php endif; ?>
<article>
<?php the_content(); ?>
</article>
<?php
the_posts_pagination( array(
    'prev_text'          =>  'Previous page',
    'next_text'          =>  'Next page', 
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
) ); 
?>
<?php endwhile; ?>

<?php get_footer(); ?>