    </main>
    <!--main section end-->
    <!--footer section start-->
    <footer>
      <div class="wrapper">
        <div class="top-footer">
          <?php
            $blog_name = get_bloginfo('name');
            $blog_url = get_bloginfo('url');
          ?>
          <h6 class="footer-heading">
            <a href="<?php echo $blog_url; ?>" class="main-logo" title="<?php echo $blog_name; ?>"><?php echo $blog_name; ?></a>
          </h6>
          <ul class="footer-social-icon">
            <li class="footer-social-list">
              <a href="#FIXME" class="footer-icon" target="_blank" title="Facebook">Facebook</a>
            </li>
            <li class="footer-social-list">
              <a href="#FIXME" class="footer-icon" target="_blank" title="Instagram">Instagram</a>
            </li>
            <li class="footer-social-list">
              <a href="#FIXME" class="footer-icon" target="_blank" title="Whatsapp">Whatsapp</a>
            </li>
            <li class="footer-social-list">
              <a href="#FIXME" class="footer-icon" target="_blank" title="Youtube">Youtube</a>
            </li>
          </ul>
        </div>
        <div class="bottom-footer">
          <?php wp_nav_menu( array(
            'theme_location' => 'secondary',
            'menu_class' => 'footer-navbar',
            'container' => 'nav',
            'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          ) ); ?>
          <div class="bottom-footer-content">
            <p class="paragraph">Copyright &copy; 2022 Leadership Event Co., Ltd. All Rights Reserved.</p>
            <p class="paragraph">Design: <a href="#FIXME" target="_blank" class="credit" title="TemplateMo">TemplateMo</a></p>
          </div>
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