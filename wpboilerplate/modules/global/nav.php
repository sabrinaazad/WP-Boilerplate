
<nav class="nav full-width" id="mainNav">
   
        <div class="topbar__wrapper desktop-only">
            <div class="topbar">
                <div class="left">
                    <?php if ( get_field('topbar_phone', 'options') ) : ?>
                        <div class="phone">
                            <a href="tel:<?php echo the_field('topbar_phone', 'options'); ?>"><?php echo the_field('topbar_phone', 'options'); ?></a>
                        </div>
                    <? endif; ?>
                    <?php if( have_rows('topbar_icons', 'options') ): ?>
                        <div class="icons">
                            <?php while( have_rows('topbar_icons', 'options') ) : the_row();
                                $link = get_sub_field('link');
                                $icon = get_sub_field('icon');
                                $alt = get_sub_field('alt'); ?>
                                <a class="icon" href="<?php echo $link ?>">
                                    <img src="<?php echo $icon?>" alt="<?php echo $alt?>" />
                                </a>
                            <?php endwhile; ?>
                        </div>
                    <?php else : endif;?>
                </div>
                <div class="right">
                    <div class="nav__drawer">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'top-nav',
                            'container' => '',
                            'items_wrap' => '
                                <ul class="top-nav">
                                    %3$s
                                </ul>'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="main__wrapper">

            <div class="logo">
            <? if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }?>
            </div>

            <div class="bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav">
                            %3$s
                        </ul></div>'
                ));
                ?>

            </div>

            <?php echo get_search_form();?>

        </div>
</nav>
