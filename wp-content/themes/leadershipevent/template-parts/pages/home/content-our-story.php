<?php
  $title = get_sub_field('title');
  $left_content = get_sub_field('left_content');
  $right_content = get_sub_field('right_content');
  $speaker_image = get_sub_field('speaker_image');
  $tag_line = get_sub_field('tag_line');
  // echo "<pre>";
  // var_dump($image_url);
  // echo "</pre>";

  if ($title || $left_content || $right_content || $speaker_image || $tag_line) { ?>
  <section class="our-story">
    <div class="wrapper">
      <?php echo $title ? $title : null; ?>
      <ul class="story-content">
        <?php if ($left_content) { ?>
          <li class="leadership-conference">
            <?php echo $left_content ? $left_content : null; ?>
            <ul class="action-container">
              <li class="action-links">
                <a href="#FIXME" class="action-speaker-button action-button" title="Meet speakers">Meet speakers</a>
              </li>
              <li class="action-links">
                <a href="#FIXME" class="action-schedule-button action-button" title="Check out schedule">Check out Schedule</a>
              </li>
            </ul>
          </li>
        <?php }
          if ($right_content || $speaker_image || $tag_line) { ?>
          <li class="leadership-conference">
            <?php echo $right_content ? $right_content : null; 
              if ($speaker_image || $tag_line) { ?>
              <ul class="people-container">
                <?php
                  if ($speaker_image) {
                    foreach ($speaker_image as $image) {
                      $image_url = $image['image']['url'] ? $image['image']['url'] : null;
                      $image_alt = $image['image']['alt'] ? $image['image']['alt'] : $tag_line; ?>
                  <li class="people-list">
                    <figure class="people-image">
                      <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
                    </figure>
                  </li>
                <?php }
                  } 
                  if ($tag_line) { ?>
                  <li class="people-list">
                    <p class="paragraph"><?php echo $tag_line; ?></p>
                  </li>
                <?php } ?>
              </ul>
            <?php } ?>
          </li>
        <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>