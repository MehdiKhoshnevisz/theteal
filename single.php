<?php get_header(); ?> 
<div class="container"> 
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="post-date-divider">
            <span><?php the_time('l j F  Y') ?></span>
        </div>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="post-title">
                <?php the_title(); ?>
            </h1>
            <div>
                <p class="comments-number"><?php comments_number(__('بدون دیدگاه'), '1 ' . __('دیدگاه'), '% ' . __('دیدگاه‌ها')); ?></p>
            </div>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <br><br>
        <p>
            <?php if (get_the_tags()) {?>
                <?php _e('Tags')?>:
                <?php foreach (get_the_tags() as $tag) { ?>
                    <a href="<?php echo get_term_link($tag->term_id)?>" class="post-tag"><?php echo $tag->name?></a>
                <?php } ?>
            <?php } ?> 
        </p> 
    <?php comments_template(); ?>
    <?php endwhile; ?>
</div><!--.container-->
<?php get_footer(); ?>
