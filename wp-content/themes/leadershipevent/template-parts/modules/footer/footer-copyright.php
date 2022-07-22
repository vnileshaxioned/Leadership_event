<?php
  $copyright = get_field('copyright', 'option');
  $design_by = get_field('design_by', 'option');
  $design_by_title = $design_by['title'];
  $design_by_url = $design_by['url'] ? $design_by['url'] : '#FIXME';
  if ($copyright || $design_by_title || $design_by_url) { ?>
  <div class="bottom-footer-content">
    <?php
      echo $copyright ? '<span class="paragraph">'.$copyright.'</span>' : null;
      echo $design_by_title ? '<span class="paragraph">Design: <a href="'.$design_by_url.'" target="_blank" class="credit" title="'.$design_by_title.'">'.$design_by_title.'</a></span>' : null;
    ?>
  </div>
<?php } ?>