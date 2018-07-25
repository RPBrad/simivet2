<?php
$templateDirectory = get_template_directory_uri();

?>
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:og="https://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="" />
  <meta property="og:title" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <link rel="shortcut icon" href="<?php echo $templateDirectory; ?>/images/favicon.ico" />
  <link href="<?php echo $templateDirectory; ?>/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <script defer src="<?php echo $templateDirectory; ?>/all.js"></script>
  <script src="<?php echo $templateDirectory; ?>/js/jquery.min.js"></script>
  <script src="<?php echo $templateDirectory; ?>/js/bootstrap.min.js"></script>
  <?php wp_head(); ?>
</head>
<body>
<?php 
if( !is_front_page()) { 
  include('parts/inc_navbar.php');
} 
?>

