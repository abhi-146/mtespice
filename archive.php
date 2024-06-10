<?php get_header(); ?>

<main>
    <h1><?php the_archive_title(); ?></h1>
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            get_template_part( 'content', get_post_format() );
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
