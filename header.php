<!DOCTYPE HTML>


	<html <?php language_attributes(); ?>>
    <head>
        <title><?php echo bloginfo("name"); ?></title>
        <meta charset="<?php bloginfo("charset"); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head(); ?>
    </head>

	<body class="homepage is-preload">
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

					
						<section id="banner">
							<header>
								<h2>Bla bla bla</h2>
								<p>Bla bla bla </p>
							</header>
						</section>

				
						<section id="intro" class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<section class="first">
										<i class="icon featured fa-star"></i>
										<header>
											<h2>Ipsum consequat</h2>
										</header>
										<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="middle">
										<i class="icon featured alt fa-star"></i>
										<header>
											<h2>Magna etiam dolor</h2>
										</header>
										<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
									</section>
								</div>
								<div class="col-4 col-12-medium">
									<section class="last">
										<i class="icon featured alt2 fa-star"></i>
										<header>
											<h2>Tempus adipiscing</h2>
										</header>
										<p>Nisl amet dolor sit ipsum veroeros sed blandit consequat veroeros et magna tempus.</p>
									</section>
								</div>
							</div>
							<footer>
								<ul class="actions">
									<li><a href="#" class="button large">Get Started</a></li>
									<li><a href="#" class="button alt large">Learn More</a></li>
								</ul>
							</footer>
						</section>

				</section>
