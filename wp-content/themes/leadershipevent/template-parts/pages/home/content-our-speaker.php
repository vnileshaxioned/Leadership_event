<?php
  $section_content = get_sub_field('section_content');
  $feature_speaker = get_sub_field('feature_speaker');
  $speakers = get_sub_field('speakers');

  function ourSpeaker($name, $position, $social_links, $image_url, $image_alt, $figcaption = '') {
    if ($image_url) { ?>
      <figure>
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
        <?php echo $figcaption ? '<figcaption>'.$figcaption.'</figcaption>' : null; ?>
      </figure>
    <?php } 
      if ($name || $position || $social_links) { ?>
      <ul class="speaker-inner-content">
        <?php if ($name || $position) { ?>
          <li class="speaker-content-list">
            <?php
              echo $name ? '<h5 class="speaker-content-heading">'.$name.'</h5>' : null;
              echo $position ? '<p class="speaker-position">'.$position.'</p>' : null;
            ?>
          </li>
        <?php }
          if ($social_links) { ?>
          <li class="speaker-content-list">
            <ul class="social-links">
              <?php
                foreach ($social_links as $social_link) {
                  $social_app_name = $social_link['social_app_name'];
                  $social_url = $social_link['social_url'];?>
                <li class="social-icon-list">
                  <a href="<?php echo $social_url; ?>" class="social-icon <?php echo strtolower($social_app_name); ?>" target="_blank" title="<?php echo ucfirst($social_app_name); ?>"><?php echo ucfirst($social_app_name); ?></a>
                </li>
              <?php } ?>
            </ul>
          </li>
        <?php } ?>
      </ul>
    <?php }
      }
  if ($section_content || $speakers || $feature_speaker) { ?>
  <section class="our-speaker">
    <div class="wrapper">
      <div class="speaker-top-container">
        <?php
          echo $section_content ? '<div class="speaker-content left-content-speaker"><div class="wysiwyg-editor">'.$section_content.'</div></div>' : null; 

          if ($feature_speaker) {
            $name = $feature_speaker['name'];
            $figcaption = $feature_speaker['caption'];
            $position = $feature_speaker['position'];
            $social_links = $feature_speaker['social_links'];
            $image_url = $feature_speaker['image']['url'] ? $feature_speaker['image']['url'] : null;
            $image_alt = $feature_speaker['image']['alt'] ? $feature_speaker['image']['alt'] : null;

            if ($name || $position || $social_links || $image_url || $image_alt || $figcaption) { ?>
            <div class="speaker-content right-content-speaker">
              <?php ourSpeaker($name, $position, $social_links, $image_url, $image_alt, $figcaption); ?>
            </div>
          <?php }
            } ?>
        </div>
        <?php if ($speakers) { ?>
        <ul class="speaker-bottom-container">
          <?php
            foreach ($speakers as $speaker) {
              $name = $speaker['name'];
              $figcaption = $speaker['caption'];
              $position = $speaker['position'];
              $social_links = $speaker['social_links'];
              $image_url = $speaker['image']['url'] ? $speaker['image']['url'] : null;
              $image_alt = $speaker['image']['alt'] ? $speaker['image']['alt'] : null;

              if ($name || $position || $social_links || $image_url || $image_alt || $figcaption) { ?>
              <li class="speaker-image-list">
                <?php ourSpeaker($name, $position, $social_links, $image_url, $image_alt); ?>
              </li>
            <?php }
              } ?>
          </ul>
        <?php } ?>
      </div>
    </section>
  <?php } ?>