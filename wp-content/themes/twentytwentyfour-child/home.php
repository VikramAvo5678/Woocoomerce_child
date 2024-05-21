<?php get_header();?>
<?php
$args = array(
    'posts_per_page' => 3, 
    'orderby' => 'post_date',
    'order' => 'ASC',
    'post_type' => 'movies', 
    'post_status' => 'publish'
);
$query = new WP_Query($args);
if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php echo get_the_post_thumbnail('thumbnail'); ?>

        <?php if ( has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        <?php endif; ?>
        <?php the_content();?>
        <?php
    endwhile;
endif;
?>
<?php get_footer();?>
