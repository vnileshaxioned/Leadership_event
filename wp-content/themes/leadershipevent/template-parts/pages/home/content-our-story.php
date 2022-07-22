<?php
  $title = get_sub_field('title');
  $left_content = get_sub_field('left_content');
  $primary_cta = get_sub_field('primary_cta');
  $secondary_cta = get_sub_field('secondary_cta');
  $right_content = get_sub_field('right_content');
  $speaker_image = get_sub_field('speaker_image');
  $tag_line = get_sub_field('tag_line');

  if ($title || $left_content || $right_content || $speaker_image || $tag_line || $primary_cta || $secondary_cta) { ?>
  <section class="our-story">
    <div class="wrapper">
      <?php echo $title ? '<div class="wysiwyg-editor">'.$title.'</div>' : null; ?>
      <div class="story-content">
        <?php if ($left_content || $primary_cta || $secondary_cta) { ?>
          <div class="leadership-conference">
            <?php echo $left_content ? '<div class="wysiwyg-editor">'.$left_content.'</div>' : null;
              if ($primary_cta || $secondary_cta) { ?>
              <ul class="action-container">
                <?php if ($primary_cta) { 
                  $primary_cta_title = $primary_cta['title'];
                  $primary_cta_url = $primary_cta['url']; ?>
                  <li class="action-links">
                    <?php echo $primary_cta_title ? '<a href="'.$primary_cta_url.'" class="action-speaker-button action-button" title="'.$primary_cta_title.'">'.$primary_cta_title.'</a>' : null; ?>
                  </li>
                <?php }
                  if ($secondary_cta) { 
                    $secondary_cta_title = $secondary_cta['title'];
                    $secondary_cta_url = $secondary_cta['url']; ?>
                  <li class="action-links">
                    <?php echo $secondary_cta_title ? '<a href="'.$secondary_cta_url.'" class="action-schedule-button action-button" title="'.$secondary_cta_title.'">'.$secondary_cta_title.'</a>' : null; ?>
                  </li>
                <?php } ?>
              </ul>
            <?php } ?>
          </div>
        <?php }
          if ($right_content || $speaker_image || $tag_line) { ?>
          <div class="leadership-conference">
            <?php echo $right_content ? '<div class="wysiwyg-editor">'.$right_content.'</div>' : null; 
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
                    <span class="paragraph"><?php echo $tag_line; ?></span>
                  </li>
                <?php } ?>
              </ul>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
<?php } ?>