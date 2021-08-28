<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Celestial
 * @since Celestial 1.0
 */
 ?>
 <?php
  $TEMPLATE_PATH = parse_url(get_template_directory_uri(), PHP_URL_PATH);
  $WPULR = get_bloginfo('wpurl');
?>
 <!DOCTYPE html>

 <html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <base href="/wpreact">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <link rel="stylesheet" href="/wpreact/wp-content/themes/marvel/styles.css" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="/wpreact/wp-content/themes/marvel/styles.css"></noscript>
    </head>
<body>
  <app-root></app-root>
<script src="/wpreact/wp-content/themes/marvel/runtime.js" defer></script><script src="/wpreact/wp-content/themes/marvel/polyfills.js" defer></script><script src="/wpreact/wp-content/themes/marvel/main.js" defer></script>
</html>