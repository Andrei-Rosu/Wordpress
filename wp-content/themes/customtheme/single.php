
<?php get_header();?>
<?php while(have_posts()): the_post();?>
<article>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="content">
            <?php the_content();?>
        </div>
</header>
</article>
<?php get_footer();?>
