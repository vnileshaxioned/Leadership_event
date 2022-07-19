<?php
  get_header();
  // $banner_title = get_sub_field('banner_title');
  // $event_date_from = get_field('event_date_from');
  // $event_date_to = get_field('event_date_to');
  // $event_location = get_field('event_location');
  // $banner_video = get_field('banner_video');
  // echo "<pre>";
  // print_r($banner_title);
  // echo "</pre>";
  // echo $banner_title;
    get_template_part('template-parts/pages/home/content', 'banner');
    get_template_part('template-parts/pages/home/content', 'highlight');
    get_template_part('template-parts/pages/home/content', 'our-story');
    get_template_part('template-parts/pages/home/content', 'our-speaker');
    get_template_part('template-parts/pages/home/content', 'next-schedule');
    get_template_part('template-parts/pages/home/content', 'event-speaker');
    get_template_part('template-parts/pages/home/content', 'get-your-ticket');
    get_template_part('template-parts/pages/home/content', 'here-you-go');
    get_template_part('template-parts/pages/home/content', 'contact');

    // if (have_rows('home_page')) {
    // while (have_rows('home_page')) {
    //   the_row();

    //   var_dump(get_row_layout());
      
    //   switch (get_row_layout()) {
    //     case 'highlight_section':
    //       get_template_part('template-parts/pages/home/content', 'highlight');
    //       break;
    //     case 'our_story_section';
    //       get_template_part('template-parts/pages/home/content', 'our-story');
    //       break;
    //     case 'our_speaker_section';
    //       get_template_part('template-parts/pages/home/content', 'our-speaker');
    //       break;
    //     case 'next_schedule_section';
    //       get_template_part('template-parts/pages/home/content', 'next-schedule');
    //       break;
    //     case 'event_speaker_section';
    //       get_template_part('template-parts/pages/home/content', 'event-speaker');
    //       break;
    //     case 'get_your_ticket_section';
    //       get_template_part('template-parts/pages/home/content', 'get-your-ticket');
    //       break;
    //     case 'here_you_go_section';
    //       get_template_part('template-parts/pages/home/content', 'here-you-go');
    //       break;
    //     case 'contact_section';
    //       get_template_part('template-parts/pages/home/content', 'contact');
    //       break;
    //     }
    //   }
    // }
  get_footer();
?>