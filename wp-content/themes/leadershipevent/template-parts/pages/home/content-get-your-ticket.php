<?php
  $title = get_sub_field('title');
  $tickets = get_sub_field('tickets');

  if ($title || $tickets) { ?>
  <section class="get-your-tickets">
    <div class="wrapper">
      <?php
        echo $title ? '<h4 class="section-heading">'.$title.'</h4>' : null;
          if ($tickets) { ?>
        <ul class="ticket-content">
          <?php
            foreach ($tickets as $ticket) {
              $ticket_title = $ticket['ticket_title'];
              $price = $ticket['price'];
              $contents = $ticket['content'];
              $short_description = $ticket['short_description'];
              $buy_tickets_cta = $ticket['buy_tickets_cta'];
              
              if ($ticket_title || $price || $contents || $short_description || $buy_tickets_cta) { ?>
            <li class="ticket-content-list">
              <?php if ($ticket_title || $price) { ?>
                <div class="ticket-head">
                  <?php
                    echo $ticket_title ? '<h5 class="ticket-heading">'.$ticket_title.'</h5>' : null;
                    echo $price ? '<span class="ticket-price">$'.$price.'</span>' : null;
                  ?>
                </div>
              <?php }
                if ($contents || $short_description || $buy_tickets_cta) { ?>
                <ul class="ticket-container">
                  <?php
                    if ($contents) {
                      foreach ($contents as $content) {
                        $list = $content['list']; ?>
                    <li class="ticket-list">
                      <p class="paragraph"><?php echo $list; ?></p>
                    </li>
                  <?php }
                    }
                    if ($short_description) { ?>
                    <li class="ticket-list">
                      <p class="paragraph"><?php echo $short_description; ?></p>
                    </li>
                  <?php }
                    if ($buy_tickets_cta) {
                      $cta_title = $buy_tickets_cta['title'];
                      $cta_url = $buy_tickets_cta['url']; ?>
                    <li class="ticket-list">
                      <a href="<?php echo $cta_url; ?>" class="buy-ticket-button" title="<?php echo $cta_title; ?>"><?php echo $cta_title; ?></a>
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