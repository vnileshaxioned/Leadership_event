<?php
  $contents = get_sub_field('highlight_contents');

  if ($contents) { ?>
  <section class="highlight">
    <div class="wrapper">
      <ul class="highlight-container">
        <?php
          foreach ($contents as $content) {
            $title = $content['title'];
            $image_url = $content['image']['url'] ? $content['image']['url'] : null;
            $image_alt = $content['image']['alt'] ? $content['image']['alt'] : $title;
            $video_url = $content['video']['url'] ? $content['video']['url'] : null;
            $video_mime_type = $content['video']['mime_type'];

            if ($title || $image_url || $video_url) { ?>
          <li class="highlight-list">
            <?php if ($image_url) { ?>
              <figure class="highlight-image">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" />
              </figure>
            <?php } 
              echo $title ? '<h3 class="highlight-heading"><a href="#FIXME" class="highlight-link">'.$title.'</a></h3>' : null; ?>
          </li>
        <?php }
          } ?>
      </ul>
    </div>
  </section>
<?php } ?>