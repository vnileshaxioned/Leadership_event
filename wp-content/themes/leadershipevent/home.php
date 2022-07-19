<?php
  get_header();

    get_template_part('template-parts/pages/home/content', 'banner');
    get_template_part('template-parts/pages/home/content', 'highlight');
    get_template_part('template-parts/pages/home/content', 'our-story');
    get_template_part('template-parts/pages/home/content', 'our-speaker');
    get_template_part('template-parts/pages/home/content', 'next-schedule');
    get_template_part('template-parts/pages/home/content', 'event-speaker');
    get_template_part('template-parts/pages/home/content', 'get-your-ticket');
    get_template_part('template-parts/pages/home/content', 'here-you-go');
    get_template_part('template-parts/pages/home/content', 'contact');
     
  get_footer();
?>