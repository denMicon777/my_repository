<!DOCTYPE html>
<head lang="ru">
  <meta charset="UTF-8">
  <title><?php bloginfo('name') ?><?php wp_title() ?> </title>
<?php wp_head() ?>
</head>
<body>

<div class="wrap">
  <div class="container">

<div class="row">
  <div class="col-md-12 text-center">
    <img src="<?=get_template_directory_uri() . '/images/logo.jpg'?>">
  </div>
</div>

<nav class="navbar navbar-default" role="navigation">
	
	<?php wp_nav_menu([
	  'container' => 'div',
	  'container_class' => 'collapse navbar-collapse',
	  'container_id' => 'bs-example-navbar-collapse-1',
	  'menu_class' => 'nav navbar-nav',
	  'theme_location' => 'header_menu',
	]); ?>
	
</nav>