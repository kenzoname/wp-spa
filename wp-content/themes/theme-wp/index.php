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
?>
 <!DOCTYPE html>

 <html <?php language_attributes(); ?> class="no-js">
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <base href="/">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <link rel="stylesheet" href="/wpreact/wp-content/themes/theme-wp/styles.31d6cfe0d16ae931b73c.css" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="/wpreact/wp-content/themes/theme-wp/styles.126751776dafe9b69f19.css"></noscript>
    </head>
<body>
  <app-root></app-root>
<script src="/wpreact/wp-content/themes/theme-wp/runtime.851ee4347a3fdf2a013e.js" defer></script><script src="/wpreact/wp-content/themes/theme-wp/polyfills.8139d85b674dccd09e85.js" defer></script><script src="/wpreact/wp-content/themes/theme-wp/main.52d70fc24f509d10491b.js" defer></script>
</html>