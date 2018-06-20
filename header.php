<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title(); ?></title>

	<!-- Definir viewport para dispositivos web móviles -->
	<meta name="viewport" content="width=device-width, minimum-scale=1">

    <link rel="shortcut icon" type="image/png"  href="<?php echo get_bloginfo('stylesheet_directory'); ?>/favicon.png" />    
    <link rel="shortcut icon" type="image/png"  href="/favicon.png" />   

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php /*?> jQuery <?php */?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <?php /*?><script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script><?php */?>
    <link rel="stylesheet" type="text/css" href="<?php  echo get_bloginfo('stylesheet_directory') ?>/css/animation_page.css">    
    
	<?php /*?>BOOTSTRAP 3.3.5<?php */?>
    <?php /*?><link rel="stylesheet" type="text/css" href="<?php  echo get_bloginfo('stylesheet_directory') ?>/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="<?php echo get_bloginfo('stylesheet_directory') ?>/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script><?php */?>
    
    <?php /*?>BOOTSTRAP 4.1.5<?php */?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <?php /*?>Font Awesome<?php */?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <?php include_once("compartir_rs.php"); ?>
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
	<?php wp_head(); ?>

</head>
<body>