<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/wp-content/themes/gold/assets/img/logo/favicon.png" type="image/x-icon">
	<title><?php wp_title(); ?></title>
	<?php
	wp_head();
	?>

	<meta property="og:image" content="/wp-content/themes/gold/assets/img/logo/favicon.png" />

	<meta name="yandex-verification" content="118161ac4674a89f" />
	<meta name="google-site-verification" content="XPLH9OtDnx86Lodxsl_R9VCzuHHTMyihMSijmu4Hl-M" />

	<meta name="mailru-domain" content="V23VXUVpuMg4tnki" />
</head>

<body itemscope itemtype="http://schema.org/WebPage" class="ori-digital-studio">





	<div id="preloader"></div>
	<div class="up">
		<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
	</div>
	<div class="cursor"></div>
	<!-- Start of header section
	============================================= -->
	<header itemscope itemtype="http://schema.org/WPHeader" id="ori-header" class="ori-header-section header-style-one">
		<div class="ori-header-content-area">
			<div class="ori-header-content d-flex align-items-center justify-content-between">
				<div class="brand-logo">
					<a href="<?php echo get_home_url(); ?>"><img src="/wp-content/themes/gold/assets/img/logo/logo1.png" alt=""></a>
				</div>
				<div class="ori-main-navigation-area">






					<nav class="ori-main-navigation clearfix ul-li">

						<?php
						wp_nav_menu(array(
							'theme_location' => 'header_menu',
							'container' => null,
							'menu_class' => 'nav navbar-nav clearfix',
							'menu_id' => 'main-nav',
							'items_wrap' => '<ul class="%2$s" itemscope itemtype="http://www.schema.org/SiteNavigationElement">%3$s</ul>',
							'walker' => new Custom_Walker_Nav_Menu() // Используем ваш класс

						));
						?>

						<!--
						<ul id="main-nav" class="nav navbar-nav clearfix">
							<li class="dropdown ori-megamenu">
								<a href="!#">Home</a>
							</li>
							<li><a target="_blank" href="about.html">About</a></li>
							<li class="dropdown">
								<a href="!#">Shop</a>
								<ul class="dropdown-menu clearfix">
									<li><a target="_blank" href="shop.html">Shop Page </a></li>
									<li><a target="_blank" href="shop-single.html">Shop Details</a></li>
									<li><a target="_blank" href="cart.html">Cart Page</a></li>
									<li><a target="_blank" href="check-out.html">Check Out Page</a></li>
								</ul>
							</li>

							<li class="dropdown">
								<a class="" href="!#">News</a>
								<ul class="dropdown-menu clearfix">
									<li><a target="_blank" href="blog.html">News </a></li>
									<li><a target="_blank" href="blog.html">News 2 </a></li>

								</ul>
							</li>
							<li class="dropdown">
								<a href="!#">Portfolio</a>
								<ul class="dropdown-menu clearfix">
									<li><a target="_blank" href="portfolio.html">Portfolio </a></li>
									<li><a target="_blank" href="portfolio-single.html">Portfolio Details</a></li>
								</ul>
							</li>
						</ul>

					-->
					</nav>
				</div>
				<div class="ori-header-sidebar-search d-flex align-items-center">
					<div class="ori-search-btn">
						<button class="search-box-outer"><i class="fal fa-search"></i></button>
					</div>
					<div class="ori-sidenav-btn navSidebar-button">
						<button><i class="fal fa-bars"></i></button>
					</div>
				</div>
			</div>
			<div class="mobile_menu position-relative">
				<div class="mobile_menu_button open_mobile_menu">
					<i class="fal fa-bars"></i>
				</div>
				<div class="mobile_menu_wrap">
					<div class="mobile_menu_overlay open_mobile_menu"></div>
					<div class="mobile_menu_content">
						<div class="mobile_menu_close open_mobile_menu">
							<i class="fal fa-times"></i>
						</div>
						<div class="m-brand-logo">
							<a href="!#"><img src="/wp-content/themes/gold/assets/img/logo/logo1.png" alt=""></a>
						</div>


						<nav class="mobile-main-navigation  clearfix ul-li">


							<?php
							wp_nav_menu(array(
								'theme_location' => 'header_menu',
								'container' => null,
								'menu_class' => 'nav navbar-nav clearfix',
								'menu_id' => 'm-main-nav',
								'items_wrap' => '<ul class="%2$s" itemscope itemtype="http://www.schema.org/SiteNavigationElement">%3$s</ul>',
								'walker' => new Custom_Walker_Nav_Menu() // Используем ваш класс

							));
							?>
						</nav>
					</div>
				</div>
				<!-- /Mobile-Menu -->
			</div>
		</div>
	</header><!-- /header -->

	<?php get_search_form(); ?>


	<!-- Sidebar sidebar Item -->
	<?php
	get_template_part('tp-sidebar-about');
	?>
	<!-- -->