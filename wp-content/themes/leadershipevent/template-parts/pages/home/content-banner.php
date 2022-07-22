<?php
  $banner_content = get_field('banner_content');
  $title = $banner_content['title'];
  $event_location = $banner_content['event_location'];
  $video_url = $banner_content['video']['url'];
  $video_mime_type = $banner_content['video']['mime_type'];
  $event_date_from = DateTime::createFromFormat('Ymd', $banner_content['event_date_from'])->format('F j');
  $event_date_to = DateTime::createFromFormat('Ymd', $banner_content['event_date_to'])->format('j, Y');
  $contents = $banner_content['highlight_contents'];

  if ($title || $event_date_from || $event_date_to || $event_location || $video_url || $contents) { ?>
  <section class="banner">
    <div class="wrapper">
      <?php if ($video_url) { ?>
        <video class="banner-video" autoplay muted loop>
          <source src="<?php echo $video_url; ?>" type="<?php echo $video_mime_type; ?>">
          Your browser does not support the video tag.
        </video>
      <?php } 
        if ($title || $event_date_from || $event_date_to || $event_location || $contents) { ?>
        <div class="banner-content">
          <?php echo $title ? '<div class="wysiwyg-editor">'.$title.'</div>' : null; 
            if ($event_date_from || $event_date_to || $event_location) { ?>
            <div class="date-location">
              <?php
                echo ($event_date_from && $event_date_to) ? '<span class="date">'.$event_date_from.' to '.$event_date_to.'</span>': null;
                echo $event_location ? '<span class="location">'.$event_location.'</span>' : null;
              ?>
            </div>
          <?php } ?>
          <div class="slide-down">
            <a href="#FIXME" class="slide-down-button" title="Slide down">Slide down</a>
          </div>
        </div>
        <ul class="highlight-container">
        <?php
          foreach ($contents as $content) {
            $title = $content['title'];
            $image_url = $content['image']['url'] ? $content['image']['url'] : null;
            $image_alt = $content['image']['alt'] ? $content['image']['alt'] : $title;

            if ($title || $image_url) { ?>
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
        <?php
          foreach ($contents as $content) {
            $title = $content['title'];
            $video_url = $content['video']['url'] ? $content['video']['url'] : null;
            $video_mime_type = $content['video']['mime_type'];

            if ($video_url) { ?>
            <div class="video-modal">
              <video class="highlight-video" controls>
                <source src="<?php echo $video_url; ?>" type="<?php echo $video_mime_type; ?>">
                Your browser does not support the video tag.
              </video>
            </div>
          <?php }
            }
          } ?>
      </div>
    </section>
  <?php } ?>