<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/css/bootstrap-theme.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/inc/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/font-awesome/css/font-awesome.min.css" type="text/css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>
<body>



<div class="container">
	<header>
		<div class="row">
			<div class="col-md-12">
				<div class="menu1">
					<div class="div1">
						<ul>
							<li><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/home.png" alt="">Home</a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/supp.png" alt="">Support</a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/about.png" alt="">About</a></li>
							<li><a href="//seo-brain.com/sitemap.html"><img src="<?php bloginfo('template_url'); ?>/img/sitemap.png" alt="">Sitemap</a></li>
						</ul>
					</div>
					<div class="div2">
						<form method="get" class="form-search" action="//seo-brain.com/">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control2 search-query" placeholder="Search..." value="" name="s">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default" name="submit" id="searchsubmit" value="Search">
											<span><img src="<?php bloginfo('template_url'); ?>/img/search.png" alt=""></span>
										</button>
									</span>
								</div>
							</div>
						</form>
					</div>
					<div class="div3">
						<ul>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/fb.png" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/gpl.png" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/in.png" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/pin.png" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/tw.png" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/tam.png" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/inst.png" alt=""></a></li>
							<li><a href=""><img src="<?php bloginfo('template_url'); ?>/img/rss.png" alt=""></a></li>
						</ul>
					</div>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="registr">
				<p><a href="">Login</a>/<a href="">Sign up</a></p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="logo">
				<a href="//seo-brain.com"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="logo"></a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="menu2">
				<ul id="nav1">
					<li><a href="//seo-brain.com/blog">Блог</a></li>
					<li><a href="#seo">SEO</a></li>
					<li><a href="#marketing">Marketing</a></li>
					<li><a href="#smm">SMM</a></li>
					<li><a href="#orm">ORM</a></li>
					<li class="comm"><a href="/development-online-shop">Разработка</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>