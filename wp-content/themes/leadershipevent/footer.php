    </main>
    <!--main section end-->
    <!--footer section start-->
    <footer>
      <div class="wrapper">
        <div class="top-footer">
          <?php
            get_template_part('template-parts/modules/footer/footer', 'logo');
            get_template_part('template-parts/modules/footer/footer', 'social-link');
          ?>
        </div>
        <div class="bottom-footer">
          <?php 
            wp_nav_menu(array(
              'theme_location' => 'secondary',
              'menu_class' => 'footer-navbar',
              'container' => 'nav',
              'items_wrap' => '<ul class="%2$s">%3$s</ul>',
            )); 
            
            get_template_part('template-parts/modules/footer/footer', 'copyright');
          ?>
          <div class="go-to-top">
            <a href="#FIXME" class="top-button" title="Go to top">Go to top</a>
          </div>
        </div>
      </div>
    </footer>
    <!--footer section end-->
  </div>
  <!--container end-->
  <?php wp_footer(); ?>
</body>
</html>