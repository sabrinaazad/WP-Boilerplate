<section class="section section--banner-cta full-width" style="background-color:<?php echo the_sub_field('background_color'); ?>" id="<?php echo the_sub_field('id')?>">
    <div class="section__wrapper">
        
        <?php $heading = get_sub_field('heading');
            if( $heading ): ?>
                <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        
        <?php $subheading = get_sub_field('subheading');
            if( $subheading ): ?>
                <h4 class="subheading"><?php echo $subheading; ?></h4>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
            if( $blurb ): ?>
                <div class="blurb"><?php echo $blurb; ?></div>
        <?php endif; ?>

        <?php $button = get_sub_field('button');
            if( $button ): 
            $button_url = $button['url'];
            $button_title = $button['title'];
            $button_target = $button['target'] ? $button['target'] : '_self';
            ?>
        <div class="button__wrapper">       
            <a class="btn btn--primary" href="<?php echo $button_url ?>" target="<?php echo $button_target ?>"><?php echo $button_title ?></a>     
        </div>  
        <?php endif; ?>

    </div>
</section>