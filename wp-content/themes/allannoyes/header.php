<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Allan Noyes – Graphic Designer</title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(). '/style/style.css' ?>" />
		<script src="<?php echo get_stylesheet_directory_uri(). '/js/script.js' ?>"></script>

	</head>
	<body>
		<header>
			<nav>
				<div class="nav-bar" id="topNav">
					<a class="nav-logo" href="allannoyes.com/index.php" alt="Allan Noyes Logo"><span>No</span>Yes</a>
					<ul>

						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

					</ul>
				</div>
			</nav>
		</header>
