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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php  echo get_bloginfo('stylesheet_directory') ?>/css/animation_page.css">    
    
	<?php /*?>BOOTSTRAP 3.3.5<?php */?>
    <link rel="stylesheet" type="text/css" href="<?php  echo get_bloginfo('stylesheet_directory') ?>/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <script src="<?php echo get_bloginfo('stylesheet_directory') ?>/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    
    <?php /*?>Font Awesome<?php */?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <?php include_once("compartir_rs.php"); ?>
	<link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    
	<?php wp_head(); ?>

</head>
<body>
	<div class="wrapper container">
		<header>
            <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
            <hr>
            <?php /*?><label for="show-menu" class="show-menu">Ver Menú</label>
            <input type="checkbox" id="show-menu" role="button"><?php */?>
            <?php /*?>MENU ORIGINAL<?php */?>
            <?php //wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>          
            <?php
                // Get the nav menu based on $menu_name (same as 'theme_location' or 'menu' arg to wp_nav_menu)
                // This code based on wp_nav_menu's code to get Menu ID from menu slug
                $args = array(
                    'order'                  => 'ASC',
                    'orderby'                => 'menu_order',
                    'post_type'              => 'nav_menu_item',
                    'post_status'            => 'publish',
                    'output'                 => ARRAY_A,
                    'output_key'             => 'menu_order',
                    'nopaging'               => true,
                    'update_post_term_cache' => false );                    
                $menu = wp_get_nav_menu_items("Menu", $args);
            ?>
            
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <?php /*?><a class="navbar-brand" href="#">EL OPINANTE</a><?php */?>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">                    
                    <?php                    
                        foreach($menu as $m){ 
                        $dropdown = false;
                    ?>      
                        <?php if($m->menu_item_parent == "0"){ ?>
                            <li class="<?php 
                                            foreach($menu as $ms){
                                                if($ms->menu_item_parent == $m->ID){
                                                    echo "dropdown";
                                                    $dropdown = true;
                                                    break;
                                                }
                                            }
                            ?>">
                                <a href="<?php echo $m->url; ?>" class="<?php echo ($dropdown)? "dropdown-toggle":"";?>" <?php echo ($dropdown)? 'data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"':""; ?>><?php echo $m->title; ?> <?php echo ($dropdown)? '<span class="caret"></span>':'' ?></a> 
                                <?php if($dropdown){ ?>
                                <ul class="dropdown-menu">
                                <?php 
                                    foreach($menu as $msi){ ?>
                                        <?php if($msi->menu_item_parent == $m->ID){ ?><li><a href="<?php echo $msi->url; ?>"><?php echo $msi->title; ?></a></li> <?php } ?>
                                <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <?php } ?>
                    
                    <?php
                        }
                    ?>
                  </ul>                  
                 <?php /*?> <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>                    
                  </ul><?php */?>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>            
        </header>