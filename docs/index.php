<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="theme-color" content="#000000">
  <link rel="manifest" href="<?php echo plugin_dir_path( __FILE__ ); ?>manifest.json">
  <link rel="shortcut icon" href="<?php echo plugin_dir_path( __FILE__ ); ?>favicon.ico">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>
  <link href="<?php echo plugins_url( 'static/css/main.c17080f1.css', __FILE__ ) ?>" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
  <noscript>You need to enable JavaScript to run this app.</noscript>
  <div id="root"></div>
  <script type="text/javascript" src="<?php echo plugins_url( 'static/js/main.a0b7d8d3.js', __FILE__ ) ?>"></script>
</body>
<?php get_footer(); ?>

</html>