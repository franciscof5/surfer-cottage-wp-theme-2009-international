<ul>	
	<!-- box_gray -->
	<div id="box_gray" class="padding10">
		<h3>Email updates</h3>
		<p><hr />
		<p><input type="text" size="18" />
		<p><br /></p>
		
		<h3>Syndication</h3>
		<p><hr />
		<p><a href="<?php bloginfo('rss_url');?>">surfers feed (RSS)</a></p>
		<p><a href="#">surfers widget</a></p>
		<p><br /></p>
		
		<h3>Get Connected</h3>
		<p><hr />
		<p>grain edit on</p>
		<p><a href="#">facebook</a> / <a href="#">myspace</a> / <a href="#">twitter</a></p>
		<p><br /></p>
		
		<h3>Contribute</h3>
		<p><hr />
		<p><a href="#">submit a history link</a></p>
		<p><br /></p>
	</div>
	<li><br /></li>
	<li>
	<div class="aktt_twitter_extra">
		<div class="aktt_twitter_extra_image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/widgets/twitter_pic.jpg" alt="Twitter pic" /></div>
		<div class="float_l"><br /><img src="<?php bloginfo('stylesheet_directory'); ?>/images/widgets/surfer_cottage_logo_small_gray.png" alt="Twitter pic" /></div>
	</div>
	<?php if(function_exists('aktt_sidebar_tweets')) { aktt_sidebar_tweets();} ?>
	<div class="aktt_twitter_extra"><div class="aktt_twitter_extra_image"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/widgets/twitter_logo_s.png" height="16" width="60"/></div><a href="#" class="float_r">Join the Conversation</a></div>
	</li>
	<!-- rest -->
</ul>