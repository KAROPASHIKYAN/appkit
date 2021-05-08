<?php get_header();


$countMenuItem = (int) 0;

if ( have_rows('sections') ): $countMenuItem ++;

while ( have_rows( 'sections') ): the_row();

    if (get_row_layout() == 'hero') {
        get_template_part ('includes/sections/hero');
        }
    elseif (get_row_layout() == 'about') {
        get_template_part ('includes/sections/about');
        }
    elseif (get_row_layout() == 'contract') {
        get_template_part ('includes/sections/contract');
        }
    elseif (get_row_layout() == 'features') {
        get_template_part ('includes/sections/features');
        }
    elseif (get_row_layout() == 'pricing') {
        get_template_part ('includes/sections/pricing');
        }
    elseif (get_row_layout() == 'team') {
        get_template_part('includes/sections/team');
        }
    elseif (get_row_layout() == 'testimonials') {
        get_template_part('includes/sections/testimonials');
    }

    endwhile;
    endif;

$sections = get_field ('sections');
b($sections);
sections('hero');


sections('about');
sections('testimonials');
sections('features');
sections('team');
sections('pricing');
sections('contact');

get_footer(); ?>
