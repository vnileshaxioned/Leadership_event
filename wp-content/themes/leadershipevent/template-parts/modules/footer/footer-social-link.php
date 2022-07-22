<?php
  $social_links = get_field('social_links', 'option');

  if ($social_links) { ?>
    <ul class="footer-social-icon">
      <?php
        foreach ($social_links as $social_link) {
          $social_app_name = $social_link['social_app_name'];
          $url = $social_link['url'];

          if ($social_app_name && $url) { ?>
            <li class="footer-social-list">
                <a href="<?php echo $url; ?>" class="footer-icon" target="_blank" title="<?php echo $social_app_name; ?>"><?php echo $social_app_name; ?></a>
            </li>
        <?php }
          } ?>
      </ul>
    <?php } ?>