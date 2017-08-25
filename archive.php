<?php get_header(); ?>
<div class="container"> 

<?php 
$slug = get_queried_object()->slug;
$args = array(
    'post_status' => 'publish',
    'post_type' => 'post',
    'nopaging' => true, 
);
if ( is_category() ) {
    $args['category_name'] = $slug;
} elseif ( is_tag() ) {
    $args['tag_slug__in'] = $slug;
}
$myposts = get_posts( $args );
$the_year = null;
$the_month = null;
$first_year = true;
$first_month = true; 
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <?php
    if ( $the_year != get_the_date('Y') ) {
        $the_year = get_the_date('Y'); 
        echo ($first_year) ? 
            '<div class="date-year-divider"><span>' . $the_year . '</span></div>' : 
            '<div class="date-year-divider"><span>' . $the_year . '</span></div>';
        
        $first_year = false;
    }
    ?>
    <article>
        <span class="date date-month-day"><?=the_date('d/m')?></span><h3 class="archive__post-title"><a href="<?php the_permalink() ?>"><?=the_title();?></a></h3>
    </article>
<?php 
endforeach; 
wp_reset_postdata();
?>
</div> 
<?php get_footer(); ?>