<footer class="footer full-width" id="footer" style="background-color: <?php echo the_sub_field('footer_background_color'); ?>;">
    <section class="section section--footer">
        <div class="logo__wrapper">
            <a href="/"><img src="<?php echo the_field('footer_logo', 'options'); ?>" alt="Logo" class="logo"></a>
        </div>
        <div class="details__wrapper">
            <p><?php echo the_field('footer_details_block', 'options'); ?></p>
        </div>
        <?php if( have_rows('footer_icons', 'options') ): ?>
            <div class="icons__wrapper">
                <?php while( have_rows('footer_icons', 'options') ) : the_row();
                    $link = get_sub_field('link');
                    $icon = get_sub_field('icon');
                    $alt = get_sub_field('alt'); ?>
                    <a class="icon" href="<?php echo $link ?>">
                        <img src="<?php echo $icon?>" alt="<?php echo $alt?>" />
                    </a>
                <?php endwhile; ?>
            </div>
        <?php else : endif;?>
        <div class="nav__drawer">
            <?php wp_nav_menu(array(
                'theme_location' => 'footer-nav',
                'container' => '',
                'items_wrap' => '
                    <ul class="footer-nav">
                        %3$s
                    </ul>
                    '
            )); ?>
        </div>
        <div class="info__wrapper">
            <p><?php echo the_field('footer_info_block', 'options'); ?></p>
        </div>
    </section>
</footer>