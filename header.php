<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	
	<title>
		<?php if (is_home()) { 
		echo bloginfo('name');
		} elseif (is_404()) {
		echo '404 Not Found';
		} elseif (is_category()) {
		echo 'Category:'; wp_title('');
		} elseif (is_search()) {
		echo 'Search Results';
		} elseif ( is_day() || is_month() || is_year() ) {
		echo 'Archives:'; wp_title('');
		} else {
		echo bloginfo('name');
		}
		?>
	</title>

	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta name="description" content="<?php bloginfo('description');  ?>" />
	<?php if(is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php }?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<!-- Surfer Cottage -->
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/include/banner_rotator/swfobject.js"></script>
	<?php wp_head(); ?>

</head>

<body>

<div id="wrap" class="centralized">
	<div id="header-logotipo">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/surfer_cottage_logotipo.png" width="550" height="75" alt="Surfer Cottage Logo" />
	</div>
	<!-- If flash dont load than it become visible else flash will be on top of it -->
	<div id="header-image-alternative">
		<h1>Video</h1>
		<p>Video Player here<p>
		<hr />
		<p>Just put the video player</p>
		<br /><br /><br />
		<br />
		<p align="right">asdasd</p>
	</div>
	<div id="header-image">
		<script type="text/javascript">
			var so = new SWFObject("<?php bloginfo('stylesheet_directory'); ?>/include/banner_rotator/banner.swf", "mymovie", "950", "400", "8");
			so.addVariable("xmlPath", "<?php bloginfo('stylesheet_directory'); ?>/include/banner_rotator/data.xml");// <----You can change the path to the XML file here.
			so.addParam("menu", "false");
			so.write("header-image");
		</script>
	</div>

	<div id="header-menu">
		<ul id="ul-header-menu">
			<?php wp_list_pages('title_li=&depth=1') /*
			<li><p><a href="<?php bloginfo('url'); ?>" class="menu_button" id="menu_home" onfocus="if(this.blur)this.blur()">HOME</a></p></li>
			<li><p><a href="<?php bloginfo('url'); ?>/about" class="menu_button" id="menu_about" onfocus="if(this.blur)this.blur()">ABOUT</a></p></li>
			<li><p><a href="<?php bloginfo('url'); ?>/packages" class="menu_button" id="menu_packages" onfocus="if(this.blur)this.blur()">PACKAGES</a></p></li>
			<li><p><a href="<?php bloginfo('url'); ?>/book" class="menu_button" id="menu_book" onfocus="if(this.blur)this.blur()">BOOK YOUR TIME</a></p></li>
			<li><p><a href="<?php bloginfo('url'); ?>/location" class="menu_button" id="menu_location" onfocus="if(this.blur)this.blur()">LOCATION</a></p></li>
			<li><p><a href="<?php bloginfo('url'); ?>/contact" class="menu_button" id="menu_contact" onfocus="if(this.blur)this.blur()">CONTACT US</a></p></li>
			*/ ?>
		</ul>
	</div>
