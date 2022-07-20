<?php
  $section_content = get_sub_field('section_content');
  $add_speaker = get_sub_field('add_speaker');
  
  if ($section_content || $add_speaker) { ?>
  <section class="our-speaker">
    <div class="wrapper">
      <ul class="speaker-top-container">
        <?php echo $section_content ? '<li class="speaker-content">'.$section_content.'</li>' : null; 
        
        if ($add_speaker) {
          $name = $add_speaker[0]['name'];
          $position = $add_speaker[0]['position'];
          $social_links = $add_speaker[0]['social_links'];
          $image_url = $add_speaker[0]['image']['url'] ? $add_speaker[0]['image']['url'] : null;
          $image_alt = $add_speaker[0]['image']['alt'] ? $add_speaker[0]['image']['alt'] : null;
          
          if ($name || $position || $image_url || $social_links) { ?>
          <li class="speaker-content">
            <?php if ($image_url) { ?>
              <figure>
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
                <figcaption>Featured</figcaption>
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
            <?php } ?>
          </li>
        <?php }
          } ?>
      </ul>
      <?php if ($add_speaker) { ?>
        <ul class="speaker-bottom-container">
          <?php
            array_shift($add_speaker);
            foreach ($add_speaker as $speakers) {
              $name = $speakers['name'];
              $position = $speakers['position'];
              $social_links = $speakers['social_links'];
              $image_url = $speakers['image']['url'] ? $speakers['image']['url'] : null;
              $image_alt = $speakers['image']['alt'] ? $speakers['image']['alt'] : null;
              
              if ($name || $position || $image_url || $social_links) { ?>
            <li class="speaker-image-list">
              <?php if ($image_url) { ?>
                <figure class="speaker-imge">
                  <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
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
              <?php } ?>
            </li>
          <?php }
            } ?>
        </ul>
      <?php } ?>
    </div>
  </section>
<?php } ?>