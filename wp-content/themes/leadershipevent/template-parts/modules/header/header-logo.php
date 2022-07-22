<?php
  $logo_image = get_field('header_logo_image', 'option');
  $logo_name = get_field('header_logo_name', 'option');
  $site_name = $logo_name ? $logo_name : get_bloginfo('name');
  $image_url = $logo_image['url'] ? $logo_image['url'] : null;
  $image_alt = $logo_image['alt'] ? $logo_image['alt'] : $site_name;

  if ($site_name || $image_url) { ?>
  <h1>
    <a href="<?php echo get_home_url(); ?>" class="main-logo" title="<?php echo $site_name; ?>">
      <?php if ($image_url) { ?>
        <figure>
          <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
        </figure>
      <?php }
        echo $site_name; ?></a>
  </h1>
<?php } ?>