<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
    <head>
        <title><?php echo bloginfo("name"); ?></title>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <?php wp_head(); ?>
    </head>
	<body class="no-sidebar is-preload">
		<div id="page-wrapper">

		
				<section id="header">		
      
                     <h1><a href="<?php home_url(); ?>"><?php bloginfo("name"); ?></a></h1>

<?php
$arg = array(
    'theme_location' => 'principal',
    'container' => 'nav',
    'container_id' => 'nav'
);
wp_nav_menu($arg);
?>
				</section>