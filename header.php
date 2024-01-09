<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->

<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <div class="container container-fluid">
      <!-- Left content -->
      <div class="navbar-text">
       <img src="http://health-pal.local/wp-content/uploads/2023/11/Logo.png" alt="logo" width="100%">
      </div>
  
      <!-- Middle content -->
      <div class="navbar-collapse collapse justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/') ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/about') ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/services') ?>">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('/contacts') ?>">Contacts</a>
          </li>
        </ul>
      </div>
  
      <!-- Right content -->
      <div class="navbar-text ms-auto">
        <button>Download Now</button>
      </div>
    </div>
  </nav>

