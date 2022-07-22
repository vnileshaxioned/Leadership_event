<?php
  $title = get_sub_field('title');
  $contents = get_sub_field('contents');

  if ($title || $contents) { ?>
  <section class="next-schedules">
    <div class="wrapper">
      <?php echo $title ? '<div class="wysiwyg-editor">'.$title.'</div>' : null; ?>
      <ul class="schedule-tabs">
        <li class="schedule-tab-list">
          <h5 class="schedule-tab-heading">Day one</h5>
          <span class="schedule-date">July 12, 2022</span>
        </li>
        <li class="schedule-tab-list schedule-tab-active">
          <h5 class="schedule-tab-heading">Day two</h5>
          <span class="schedule-date">July 14, 2022</span>
        </li>
        <li class="schedule-tab-list">
          <h5 class="schedule-tab-heading">Day three</h5>
          <span class="schedule-date">July 16, 2022</span>
        </li>
        <li class="schedule-tab-list">
          <h5 class="schedule-tab-heading">Day four</h5>
          <span class="schedule-date">July 18, 2022</span>
        </li>
      </ul>
      <?php if ($contents) { ?>
        <ul class="schedule-post">
          <?php
            foreach ($contents as $content) {
              $post_id = $content->ID;
              $title = $content->post_title;
              $excerpt = $content->post_excerpt;
              $image = get_field('image', $post_id);
              $image_url = $image['url'] ? $image['url'] : null;
              $image_alt = $image['alt'] ? $image['alt'] : $title;
              $speaker_image = get_field('speaker_image', $post_id);
              $speaker_image_url = $speaker_image['url'] ? $speaker_image['url'] : null;
              $speaker_image_alt = $speaker_image['alt'] ? $speaker_image['alt'] : $speaker_name;
              $speaker_name = get_field('speaker_name', $post_id);
              $speaker_position = get_field('speaker_position', $post_id);
              $starting_time = get_field('starting_time', $post_id);
              $ending_time = get_field('ending_time', $post_id);
              $room = get_field('room', $post_id);

              if ($title || $excerpt || $image_url || $speaker_image_url || $speaker_name || $speaker_position || $starting_time || $ending_time || $room) { ?>
              <li class="schedule-post-list">
                <?php if ($image_url) { ?>
                  <figure class="schedule-image">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
                  </figure>
                <?php }
                  if ($title || $excerpt) { ?>
                  <div class="schedule-post-content">
                    <?php
                      echo $title ? '<h5 class="medium-content-heading">'.$title.'</h5>' : null;
                      echo $excerpt ? '<p class="paragraph">'.$excerpt.'</p>' : null;

                      if ($speaker_image_url || $speaker_name || $speaker_position || $starting_time || $ending_time || $room) { ?>
                      <ul class="schedule-info">
                        <li class="schedule-info-list">
                          <?php if ($speaker_image_url) { ?>
                            <figure class="schedule-info-image">
                              <img src="<?php echo $speaker_image_url; ?>" alt="<?php echo $speaker_image_alt; ?>" />
                            </figure>
                          <?php }
                            if ($speaker_name || $speaker_position) { ?>
                            <div class="schedule-content">
                              <?php
                                echo $speaker_name ? '<h6 class="schedule-content-heading">'.$speaker_name.'</h6>' : null;
                                echo $speaker_position ? '<p class="schedule-paragraph">'.$speaker_position.'</p>' : null;
                              ?>
                            </div>
                          <?php } ?>
                        </li>
                        <?php if ($starting_time && $ending_time) { ?>
                          <li class="schedule-info-list">
                            <span class="schedule-duration"><?php echo $starting_time.' - '.$ending_time; ?></span>
                          </li>
                        <?php }
                          if ($room) { ?>
                          <li class="schedule-info-list">
                            <span class="schedule-room"><?php echo $room; ?></span>
                          </li>
                        <?php } ?>
                      </ul>
                    <?php } ?>
                  </div>
                <?php } ?>
              </li>
            <?php }
              } ?>
          </ul>
        <?php } ?>
      </div>
    </section>
  <?php } ?>