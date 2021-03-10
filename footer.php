<footer id="footer">
    <div class="container">
        <div>
            <!-- <div>
                <div class="divider">
                    <span><?php _e('Tags') ?></span>
                </div>
                <div id="cloud-tags">
                    <?php $args = array(
                        'smallest'  => 8,
                        'largest'   => 12,
                        'unit'      => 'pt',
                        'number'    => 99,
                        'format'    => 'flat',
                        'orderby'   => 'name',
                        'link'      => 'view',
                        'taxonomy'  => 'post_tag',
                    ); ?>
                    <?php wp_tag_cloud( $args ); ?>
                </div>
            </div> -->
            <div>
                <!-- <div class="divider">
                    <span><?php _e('Categories') ?></span>
                </div> -->
                <ul>
                    <?php
                    foreach (get_categories() as $category) { ?>
                        <li class="brackets blog-category-item">
                            <a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name ?></a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

    <?= get_option('footer_text') ?>
    <?php if ( get_option('footer_text') != null && get_option('footer_text') != '' ) : ?>
        <div class="divider"></div>
    <?php endif; ?>
    <p id="copyright-stuff">
        <a href="https://github.com/TheYahya/thewhite">قالب سبز</a> برگرفته از <a href="https://github.com/TheYahya/thewhite">قالب سفید</a>
    </p>
    </div>
</footer>
<?php wp_footer(); ?>
<script src="<?= get_template_directory_uri() ?>/js/instantclick.min.js" data-no-instant></script>
<script data-no-instant>InstantClick.init();</script>
</body>
</html>
