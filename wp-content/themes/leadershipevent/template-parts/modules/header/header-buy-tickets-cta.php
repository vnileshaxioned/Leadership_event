<?php
  $ctas = get_field('cta', 'option');

  if ($ctas) {
    foreach ($ctas as $cta) {
      $title = $cta['link']['title'];
      $url = $cta['link']['url']; ?>
    <div class="cta">
      <a href="<?php echo $url; ?>" class="buy-ticket-button" title="<?php echo $title; ?>"><?php echo $title; ?></a>
    </div>
<?php }
  } ?>