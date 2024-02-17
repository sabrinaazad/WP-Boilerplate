<section class="section section--hero full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>);" id="<?php echo the_sub_field('id')?>">
	<div class="section__wrapper">

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h1 class="heading"><?php echo $heading; ?></h1>
        <?php endif; ?>
        
        <?php $subheading = get_sub_field('subheading');
        if ($subheading) : ?>
            <h4 class="subheading"><?php echo $subheading; ?></h4>
        <?php endif; ?>

        <?php $button = get_sub_field('button');
        if ($button) :
            $link_url = $button['url'];
            $link_title = $button['title'];
            $link_target = $button['target'] ? $button['target'] : '_self';
        ?>
        <div class="button__wrapper">
            <a class="btn btn--primary" href="<?php echo $link_url ?>" target="<?php echo $link_target ?>"><?php echo $link_title ?></a>
        </div>
        <?php endif; ?>
        

    </div>
</section>