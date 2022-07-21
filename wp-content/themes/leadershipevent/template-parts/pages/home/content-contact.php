<?php
  $background_image = get_sub_field('background_image');
  $background_image_url = $background_image['url'];
  $title = get_sub_field('title');

  if ($background_image_url || $title) { ?>
  <section class="contact" <?php echo $background_image_url ? 'style="background-image: url('.$background_image_url.');"' : null; ?> >
    <div class="wrapper">
      <div class="contact-content">
        <?php echo $title ? '<h5 class="contact-heading">'.$title.'</h5>' : null; ?>
        <form action="#FIXME" class="contact-form" method="post">
          <div class="form-container">
            <div class="form-group">
              <input type="text" name="name" class="form-content" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="text" name="email" class="form-content" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" name="subject" class="form-content" placeholder="Subject">
            </div>
          </div>
          <div class="form-textarea">
            <textarea name="message" cols="30" rows="5" placeholder="Message"></textarea>
          </div>
          <div class="form-textarea">
            <input type="submit" name="contact_submit" class="contact-submit-button" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </section>
<?php } ?>