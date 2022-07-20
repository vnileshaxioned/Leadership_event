<?php
  $background_image = get_sub_field('background_image');
  $section_content = get_sub_field('section_content');
  $register_cta = get_sub_field('register_cta');
  $background_image_url = $background_image['url'];

  if ($background_image || $section_content || $register_cta) { ?>
  <section class="event-speaker" <?php echo $background_image_url ? 'style="background-image: url('.$background_image_url.');"' : null; ?> >
    <div class="wrapper">
      <?php if ($section_content || $register_cta) { ?>
        <ul class="event-speaker-content">
          <?php
            echo $section_content ? '<li class="left-speaker-content">'.$section_content.'</li>' : null;

            if ($register_cta) {
              $register_title = $register_cta['title'];
              $register_url = $register_cta['url'];
              ?>
            <li class="right-speaker-content">
              <a href="<?php echo $register_url; ?>" class="event-register-button" title="<?php echo $register_title; ?>"><?php echo $register_title; ?></a>
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
    </div>
  </section>
<?php } ?>