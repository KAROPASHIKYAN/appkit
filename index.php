<?php get_header();

if (have_rows('sections')):

    while (have_rows('sections')): the_row();

        if (get_row_layout() == 'hero') {
            sections('hero');
        } elseif (get_row_layout() == 'about') {
            sections('about');
        } elseif (get_row_layout() == 'contact') {
            sections('contact');
        } elseif (get_row_layout() == 'features') {
            sections('features');
        } elseif (get_row_layout() == 'pricing') {
            sections('pricing');
        } elseif (get_row_layout() == 'team') {
            sections('team');
        } elseif (get_row_layout() == 'testimonials') {
            sections('testimonials');
        }

    endwhile;
endif;

get_footer();
