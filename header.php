<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

<?php wp_head(); ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
  <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'shoreditch' ); ?></a>

  <nav class="site-navbar">
    <div class="site-navbar__desktop-logo-container">
      <a href="http://www.ican.mx/">
        <img class="ican-navbar-logo" src="<?php echo get_template_directory_uri() . '/img/logos/ican-logo.png' ?>" alt="Logo">
      </a>
    </div>
    <div class="site-navbar__menu-container">
      <div class="site-navbar__menu">
        <a href="http://www.ican.mx/" class="site-navbar__menu-link">
          <span class="ican-font-metropolis-semibold ican-site-link nav-link">INICIO</span>
        </a>
      </div>
      <div class="site-navbar__menu">
        <a href="http://www.ican.mx/nosotros.html" class="site-navbar__menu-link">
          <span class="ican-font-metropolis-semibold ican-site-link nav-link">NOSOTROS</span>
        </a>
      </div>
      <div class="site-navbar__menu">
        <a href="http://www.ican.mx/cic.html" class="site-navbar__menu-link">
          <span class="ican-font-metropolis-semibold ican-site-link nav-link">CIC</span>
        </a>
      </div>
      <div class="site-navbar__menu nav-selected-link-container">
        <a href="cic.html" class="site-navbar__menu-link active">
          <span class="ican-font-metropolis-semibold ican-site-link nav-link nav-selected-link">BLOG</span>
        </a>
      </div>
      <div class="site-navbar__menu">
        <a href="http://www.ican.mx/contacto.html" class="site-navbar__menu-link">
          <span class="ican-font-metropolis-semibold ican-site-link nav-link">CONTACTO</span>
        </a>
      </div>
    </div>
    <div data-attribute="" class="navbar-hamburguer-visibility"  id="hamburgerMenu">
      <div data-attribute="">
        <img class="hamburger-menu-icon" src="<?php echo get_template_directory_uri() . '/img/icons/menu.png' ?>" data-attribute="">
      </div>
    </div>
    <div class="hamburger-menu-container" id="menuContainer" data-attribute="">
      <div class="hamburger-menu-header" data-attribute="">
        <div class="" data-attribute="">
          <a href="http://www.ican.mx/" data-attribute="">
            <img class="hamburger-logo" src="<?php echo get_template_directory_uri() . '/img/logos/ican-logo.png' ?>" data-attribute="">
          </a>
        </div>
        <div class="hamburger-close-container" id="hideHamburger">
          <img class="hamburger-close" src="<?php echo get_template_directory_uri() . '/img/icons/close-menu.png' ?>">
        </div>
      </div>
      <div class="hamburger-menu-body ican-font-metropolis-regular" data-attribute="">
        <a data-attribute="" href="http://www.ican.mx/" class="hamburger-menu-link {% if section == 'index' %}link-active{% endif %}">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">INICIO</span>
          </div>
        </a>
        <a data-attribute="" href="http://www.ican.mx/nosotros.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">NOSOTROS</span>
          </div>
        </a>
        <a data-attribute="" href="http://www.ican.mx/cic.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">CIC</span>
          </div>
        </a>
        <a data-attribute="" href="cic.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">BLOG</span>
          </div>
        </a>
        <a data-attribute="" href="http://www.ican.mx/contacto.html" class="hamburger-menu-link">
          <div class="hamburger-link-container">
            <div class="hamburger-stroke-container">
              <div class="hamburger-stroke"></div>
            </div>
            <span class="hamburger-text">CONTACTO</span>
          </div>
        </a>
      </div>
    </div>
  </nav>

  <div id="content" class="site-content">
    <div class="site-content-title-wrapper">
      <h1 class="site-content-special-title ican-font-hindsiliguri-bold">Blog</h1>
      <div class="site-content-title-container">
        <h2 class="site-content-title ican-font-hindsiliguri-bold ">Blog</h2>
      </div>
    </div>
    <?php if ( get_header_image() ) : ?>
      <div class="header-image">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
          <img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">
        </a>
      </div><!-- .header-image -->
    <?php endif; // End header image check. ?>

<script type="text/javascript">
  window.addEventListener('scroll', function(e) {
  if (e.view) {
    last_known_scroll_position = e.view.pageYOffset;
  }
  else {
    last_known_scroll_position = window.scrollY;
  }
  if (!ticking) {
    window.requestAnimationFrame(function() {
      doSomething(last_known_scroll_position);
      ticking = false
    });
  }
  ticking = true;
});

function showMenu() {
  document.querySelector('#menuContainer').style.width = '85%';
  document.querySelector('#hamburgerMenu').style.display = 'none';
}

function hideMenu() {
  document.querySelector('#menuContainer').style.width = '0%';
  document.querySelector('#hamburgerMenu').style.display = 'inline';
}

window.addEventListener('click', function(e) {
  if (!e.target.dataset.hasOwnProperty('attribute')) {
    hideMenu();
  }
});

/*Events of touchstart to mobile version*/

var showHamburger = document.querySelector('#hamburgerMenu');

showHamburger.addEventListener('touchstart', function(e) {
  e.preventDefault();
  showMenu();
});

var hideHamburger = document.querySelector('#hideHamburger');

hideHamburger.addEventListener('touchstart', function(e) {
  e.preventDefault();
  hideMenu();
});

/* Events of click to desktop version*/

showHamburger.addEventListener('click', function(e) {
  e.preventDefault();
  showMenu();
});

hideHamburger.addEventListener('click', function(e) {
  e.preventDefault();
  hideMenu();
});


</script>
