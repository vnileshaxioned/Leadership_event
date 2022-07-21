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
        echo $title ? '<h4 class="section-heading">'.$title.'</h4>' : null;
          if ($location || $location_title || $address || $email_id || $phone_number) { ?>
        <ul class="venue-content">
          <?php //if ($location) { ?>
            <li class="venue-list">
              <figure class="map-location">
                <img src="https://dummyimage.com/500x294/000/fff.jpg" alt="Google Map">
              </figure>
            </li>
          <?php //}
            if ($location_title || $address || $email_id || $phone_number) { ?>
            <li class="venue-list">
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
            </li>
          <?php } ?>
        </ul>
      <?php } ?>
    </div>
  </section>
<?php } ?>