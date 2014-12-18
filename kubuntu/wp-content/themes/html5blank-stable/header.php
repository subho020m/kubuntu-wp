<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/bootstrap.min.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/queries.css" type="text/css" media="screen" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>\js/scripts1.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>\js/bootstrap.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>\js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>\js/unslider.min.js"></script>
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<header class="clearfix">
		    <div class="logo col-md-2">
				<a href="index.html"><img src="\kubuntu\wp-content\themes\html5blank-stable\img/logo.png" alt="Kubuntu" id="logo"></a>
			</div>
				<nav class="clearfix">
					<ul class="clearfix">
					<li><a href="news.html" >News</a></li>
					<li><a href="download.html">Download</a></li>
					<li><a href="community.html">Community</a></li>
					<li><a href="support.html">Support</a></li>
					<li><a href="donate.html">Donate</a></li>
					<li><a href="tshirt.html" class="last">T-Shirts</a></li>
				
				<!-- Social Media header -->
					<li><a href="https://twitter.com/kubuntu"><i class="fa fa-twitter"></i></a></li>
					<li><a href="http://facebook.com/kubuntu.org"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://plus.google.com/107577785796696065138/posts"><i class="fa fa-google-plus"></i></a></li>
				<!--End Social Media Header -->
			        </ul>
				</nav>
		
			<div class="pullcontainer">
			<a href="#" id="pull"><i class="fa fa-bars fa-2x"></i></a>
			</div>     
		</header>
		
	<!-- End Header-->