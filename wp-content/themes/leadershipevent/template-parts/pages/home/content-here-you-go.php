<?php
  $title = get_sub_field('title');
  $location = get_sub_field('location');
  $location_title = get_sub_field('location_title');
  $address = get_sub_field('address');
  $email_id = get_sub_field('email_id');
  $phone_number = get_sub_field('phone_number');

  if ($title || $location || $location_title || $address || $email_id || $phone_number) { ?>
  <section class="here-you-go">
    <div class="wrapper">
      <?php 
        echo $title ? '<div class="wysiwyg-editor">'.$title.'</div>' : null;
          if ($location || $location_title || $address || $email_id || $phone_number) { ?>
        <div class="venue-content">
          <?php //if ($location) { ?>
            <div class="venue-list">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1841333896177!2d-73.98773128504497!3d40.75797467932691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sin!4v1658483099024!5m2!1sen!2sin" class="map-location" allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          <?php //}
            if ($location_title || $address || $email_id || $phone_number) { ?>
            <div class="venue-list">
              <ul class="venu-right-content">
                <?php if ($location_title) { ?>
                  <li class="venu-contact-head">
                    <?php echo $location_title ? '<h5 class="contact-heading">'.$location_title.'</h5>' : null; ?>
                  </li>
                <?php }
                  if ($address) { ?>
                  <li class="venu-contact-list">
                    <?php echo $address ? '<span class="venue-address">'.$address.'</span>' : null; ?>
                  </li>
                <?php }
                  if ($email_id) { ?>
                  <li class="venu-contact-list">
                    <?php echo $email_id ? '<a href="mailto:'.$email_id.'" class="venue-link venue-mail" title="'.$email_id.'">'.$email_id.'</a>' : null; ?>
                  </li>
                <?php }
                  if ($phone_number) { ?>
                  <li class="venu-contact-list">
                    <?php echo $phone_number ? '<a href="tel:'.$phone_number.'" class="venue-link venue-tel" title="'.$phone_number.'">'.$phone_number.'</a>' : null; ?>
                  </li>
                <?php } ?>
              </ul>
            </div>
          <?php } ?>
        </div>
      <?php } ?>
    </div>
  </section>
<?php } ?>