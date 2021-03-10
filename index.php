<?php get_header(); ?>
<main class="main-content container"> 
    <div class="main-content__right-side">
        <?php 
            $recent_posts = wp_get_recent_posts(array(
            'numberposts' => 1, 
            'post_status' => 'publish' ));
            foreach( $recent_posts as $post_item ) :  
            $the_excerpt = get_the_excerpt($post_item[0]);
            ?>

            <div class="blog-last-post">
                <div>
                    <span class="blog-last-post__title"><?php echo $post_item['post_title'] ?></span>
                    <p class="blog-last-post__description"><?php echo $the_excerpt ?></p>
                    <span class="blog-last-post__date">نوشته شده در <?php echo the_time('l j F  Y') ?></span>
                    <a href="<?php echo get_permalink($post_item['ID']) ?>" class="blog-last-post__link">
                        ادامه مطلب
                        <svg width="29" height="16" viewBox="0 0 29 16" fill="black" style="vertical-align: middle; margin-right: 0.2rem; max-width: 1.7rem;">
                            <path d="M0.292892 7.29289C-0.0976315 7.68342 -0.0976315 8.31658 0.292892 8.70711L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34315C8.46159 1.95262 8.46159 1.31946 8.07107 0.928932C7.68054 0.538408 7.04738 0.538408 6.65685 0.928932L0.292892 7.29289ZM29 7L1 7V9L29 9V7Z" />
                        </svg>
                    </a>
                </div>
            </div>
            
        <?php endforeach ?>

        <div class="article-wrapper">

            <div class="article-list">
                <?php 
                $slug = (get_queried_object()) ? get_queried_object()->slug : null;
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
                $myposts = get_posts($args);
        
                $the_year = null;
                $the_month = null;
                $first_year = true;
                $first_month = true; 
                foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
                    <?php
                    if ( $the_year != get_the_date('Y') ) {
                        $the_year = get_the_date('Y'); 
                        echo '<div class="date-year-divider"><span>' . $the_year . '</span></div>';
                        
                        $first_year = false;
                    }
        
                    if ( get_option('showing_months_in_archive') && $the_month != get_the_date('M') ) {
                        $the_month = get_the_date('M');
                        echo $the_month . '<br>';
                    }
        
                    $tag_title = get_post_meta(get_the_ID(), 'meta-tag-title', true);
                    $tag_color = get_post_meta(get_the_ID(), 'meta-tag-color', true);
                    ?>
                    <article>
                        <span class="date date-month-day">
                            <?=get_the_date('d F')?>
                        </span>
                        <?php if ( $tag_title && get_option('meta_tag_option') ) : ?>
                            <span class="meta-tag-title" style="background-color: #<?=$tag_color?>"><?=$tag_title?></span>
                        <?php endif; ?>
                        <h3 class="archive__post-title">
                            <a href="<?php the_permalink() ?>"><?=the_title();?></a>
                        </h3>
                        &nbsp;
                        <?php if ( get_option('showing_comments_count_in_archive') ) : ?>
                            <span class="archive-comment-count"><?= comments_number(0 , 1, '%') ?></span>
                        <?php endif; ?>
                    </article>
                <?php 
                endforeach; 
                wp_reset_postdata();
                ?>
            </div><!-- /.article-list -->
        </div>
    </div>

    
    <aside class="blog-sidebar">
        <div class="sidebar-box">
            <figure class="sidebar-avatar">
                <?php
                    $my_email = 'mkhnsz1996@gmail.com';
                    $user = get_user_by('email', $my_email);
                    if ( $user ) : ?>
                        <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>"/>
                    <?php endif; ?>
                <figcaption><?php echo  $user->display_name ?></figcaption>
            </figure>

            <span class="sidebar-user-info-text"><?php bloginfo('description'); ?></span>
        </div>
    </aside>
</main> 
<?php get_footer(); ?>