<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Shoreditch
*/

?>
  </div><!-- #content -->
  <footer class="site-footer bg-img-base">
    <div class="site-footer-first-section">
      <div class="site-footer-logo-container">
        <a href="http://www.ican.mx/">
          <img class="site-footer-logo" src="<?php echo get_template_directory_uri() . '/img/logos/ican-logo-variant.png' ?>">
        </a>
      </div>
      <div class="site-footer-separator"></div>
      <div class="site-footer-links-section">
        <div class="site-footer-links-container">
          <div class="site-footer-link-space">
            <a href="http://www.ican.mx/">
              <span class="ican-site-link ican-font-metropolis-regular">INICIO</span>
            </a>
          </div>
          <div class="site-footer-link-space">
            <a href="http://www.ican.mx/nosotros.html">
              <span class="ican-site-link ican-font-metropolis-regular">NOSOTROS</span>
            </a>
          </div>
          <div class="site-footer-link-space">
            <a href="http://www.ican.mx/cic.html">
              <span class="ican-site-link ican-font-metropolis-regular">CIC</span>
            </a>
          </div>
        </div>
        <div class="site-footer-links-container">
          <div class="site-footer-link-space">
            <a href="">
              <span class="ican-site-link ican-font-metropolis-regular link-selected">BLOG</span>
            </a>
          </div>
          <div class="site-footer-link-space">
            <a href="http://www.ican.mx/contacto">
              <span class="ican-site-link ican-font-metropolis-regular">CONTACTO</span>
            </a>
          </div>
        </div>
        <div class="site-footer-links-container">
          <div class="site-footer-link-space footer-social-network-margin">
            <a href="https://www.linkedin.com/company/ican-ac/" target="_blank">
              <div class="footer-social-link-container">
                <div class="footer-icon-social-container">
                  <img class="footer-icon-in" src="<?php echo get_template_directory_uri() . '/img/icons/ican-in.png' ?>">
                </div>
                <span class="ican-site-link site-link-margin-top">InstitutodelCannabis</span>
              </div>
            </a>
          </div>
          <div class="site-footer-link-space">
            <a href="https://www.facebook.com/medicinalmx/" target="_blank">
              <div class="footer-social-link-container">
                <div class="footer-icon-social-container">
                  <img class="footer-icon-fb" src="<?php echo get_template_directory_uri() . '/img/icons/ican-fb.png' ?>">
                </div>
                <span class="ican-site-link site-link-margin-top">medicinalmx</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-warnings-container">
      <div class="site-footer-notice-container">
        <a href="http://www.ican.mx/aviso-de-privacidad.html">
          <span class="ican-site-link ican-font-metropolis-regular">Aviso de privacidad</span>
        </a>
      </div>
      <div class="site-footer-notice-container">
        <a href="http://www.ican.mx/aviso-legal.html">
          <span class="ican-site-link ican-font-metropolis-regular">Aviso legal</span>
        </a>
      </div>
    </div>
  </footer>

</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
