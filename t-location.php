<?php
/*
Template Name: Location
*/
?>

<?php get_header(); ?>
	
	<div id="main" class="clearfix">
		<!-- Content Column -->
		<div id="main-location" class="main-content padding10 float_l" />
			<!--
			Logo pequeno
			hr
				2 clunas
				
				2-location
			location
			hr
			pichlemu hills
			br
			services
			hr
			Surf Shop
			bla bla link
			
			-->
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/surfer_cottage_logo_small.png" alt="Logo" />
			<hr />
			<div>
				<div class="float_l">
					<p><span class="mark-red"> &nbsp </span><a href="#">www.surferscottage.com</a></p>
					<p><span class="mark-red"> &nbsp </span>Los Hangares S/N Parcela 10<br />
					   <span class="mark-margin"> &nbsp </span>Pichilemu<br />
					   <span class="mark-margin"> &nbsp </span>Chile</p>
					<p><span class="mark-red"> &nbsp </span>+56 72 84 1697</p>
					<p><span class="mark-red"> &nbsp </span><a href="mailto:master@surferscottage.com">master@surferscottage.com</a></p>
					<p><br /></p>
				</div>
				<div class="float_r">
				<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.cl/maps?hl=en&amp;georestrict=input_srcid:0a6e1e8c52c86ecd&amp;ie=UTF8&amp;view=map&amp;cid=15672419548699179549&amp;q=Surfer's+Cottage&amp;hq=Surfer's+Cottage&amp;hnear=&amp;source=embed&amp;ll=-34.379429,-72.005939&amp;spn=0.049586,0.072956&amp;z=13&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.cl/maps?hl=en&amp;georestrict=input_srcid:0a6e1e8c52c86ecd&amp;ie=UTF8&amp;view=map&amp;cid=15672419548699179549&amp;q=Surfer's+Cottage&amp;hq=Surfer's+Cottage&amp;hnear=&amp;source=embed&amp;ll=-34.379429,-72.005939&amp;spn=0.049586,0.072956&amp;z=13&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
				</div>
			</div>
			<div class="clearboth">
				<h3>Location</h3>
				<hr />
				<p><span class="mark-red"> &nbsp </span><a href="#">Pichelemu hills</a></p>
				<br />
				<h3>Services</h3>
				<hr />
				<p><span class="mark-red"> &nbsp </span><a href="#">SurfShop</a></p>
				<p><span class="mark-margin"> &nbsp </span><small>Surf Experience, Green Surf Cottage and Studio booking time, Surf Gourmet Experience, Wine & Food Experience at Colchagua Wine Valley</small></p>
			</div>
		</div>
		
		<!-- Sectios -->
		<div id="main-sidebar-ad" class="sidebar padding10" />
			<?php get_sidebar('advertising'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
