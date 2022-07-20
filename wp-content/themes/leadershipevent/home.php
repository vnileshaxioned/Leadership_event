<?php
/* Template Name: Home Page */

  get_header();

    $banner_content = get_field('banner_content');

    if ($banner_content) {
      get_template_part('template-parts/pages/home/content', 'banner');
    }

    if (have_rows('homepage_module')) {
    while (have_rows('homepage_module')) {
      the_row();
      
      switch (get_row_layout()) {
        case 'highlight_section':
          get_template_part('template-parts/pages/home/content', 'highlight');
          break;
        case 'our_story_section';
          get_template_part('template-parts/pages/home/content', 'our-story');
          break;
        case 'our_speaker_section';
          get_template_part('template-parts/pages/home/content', 'our-speaker');
          break;
        case 'next_schedule_section';
          get_template_part('template-parts/pages/home/content', 'next-schedule');
          break;
        case 'event_speaker_section';
          get_template_part('template-parts/pages/home/content', 'event-speaker');
          break;
        case 'get_your_ticket_section';
          get_template_part('template-parts/pages/home/content', 'get-your-ticket');
          break;
        case 'here_you_go_section';
          get_template_part('template-parts/pages/home/content', 'here-you-go');
          break;
        case 'contact_section';
          get_template_part('template-parts/pages/home/content', 'contact');
          break;
        }
      }
    }
  get_footer();
?>