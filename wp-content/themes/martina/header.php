<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
        <title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'name' );?></title>
        
        
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_stylesheet_uri() ?>" rel="stylesheet" type="text/css"/>
        <?php wp_head(); ?>
        <script>
        jQuery(document).ready(function(){
           jQuery(".wpcf7-form").find("div").removeAttr("style");
        })
        </script>
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55126593-2', 'auto');
  ga('send', 'pageview');

</script>
    </head>