<?php
/* Template Name: Next Schedule */
  
  get_header();

  $post_per_page = 10;
  $args = array(
    'post_type' => 'schedule',
    'orderby' => 'title',
    'order' =>'ASC',
    'post_status' => 'publish',
    'posts_per_page' => $post_per_page,
  );

  $query = new WP_Query($args);
  if ($query->have_posts()) {
    while ($query->have_posts()) {
      $query->the_post();
      $title = get_the_title();
      $description = get_field('description');
      $permalink = get_the_permalink();
      $image_url = get_field('image')['url'] ? get_field('image')['url'] : null;
      $image_alt = get_field('image')['alt'] ? get_field('image')['alt'] : $title;
      $speaker_name = get_field('speaker_name');
      $speaker_image_url = get_field('speaker_image')['url'] ? get_field('speaker_image')['url'] : null;
      $speaker_image_alt = get_field('speaker_image')['alt'] ? get_field('speaker_image')['alt'] : $speaker_name;
      $speaker_position = get_field('speaker_position');
      $starting_time = get_field('starting_time');
      $ending_time = get_field('ending_time');
      $room = get_field('room');

      if ($title || $description || $permalink || $image_url || $speaker_name || $speaker_image_url || $speaker_position || $starting_time || $ending_time || $room) { ?>
      <section class="schedule-section">
        <div class="wrapper">
          <figure>
            <img src="" alt="">
          </figure>
        </div>
      </section>
    <?php }
        }
      }
  get_footer();
?>