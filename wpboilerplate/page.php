<?php

get_header();

// Check value exists.
if (have_rows('modules')) :
    // Loop through rows.
    while (have_rows('modules')) : the_row();
        
        // Case: banner-cta layout.
        if (get_row_layout() == 'banner_cta') :
            get_template_part('modules/banner-cta');
        endif;     

        // Case: featured-blogs layout.
        if (get_row_layout() == 'featured_blogs') :
            get_template_part('modules/featured-blogs');
        endif;

        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;

        // Case: side-by-side layout.
        if (get_row_layout() == 'side_by_side') :
            get_template_part('modules/side-by-side');
        endif;      

        // Case: text-editor layout.
        if (get_row_layout() == 'text_editor') :
            get_template_part('modules/text-editor');
        endif;

    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

get_footer();
