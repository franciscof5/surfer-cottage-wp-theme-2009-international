<?php
/*
Template Name: Sidebar Ultimos Posts
*/
?>

<?php get_header(); ?>
	<div id="header-image">
		<div id="header-image-content" class="centralizado">
			<div id="header-image-content-logo">
				<a href="/index.php"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo-f5sites-site.png" alt="F5sites Logotipo" /></a>
			</div>
			<div id="header-image-content-slogan">
				<?php
				$slogam1 = "Seu site est&aacute; ficando pra tr&aacute;s? Hora de se mexer.";
				$slogam2 = "Algu&eacute;m j&aacute fez seu layout? Podemos transform&aacute;-lo em site!";
				$slogam3 = "Seu site levado a s&eacute;rio!";
				$slogam4 = "Tem apenas uma id&eacute;ia? N&oacute;s fazemos o resto!";
				$slogam5 = "Nosso site é um tema do WordPress. Já percebeu?";
				?>
				<h1><?php 
				$final = ${$slogam.rand(1, 4)};
				echo ${"slogam".rand(1, 4)};
				 ?></h1>
			</div>
			<div id="header-image-content-slide">
				<a href="/index.php"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/deslizador-ipod-jobs.png" alt="Imagens de sites criados pele nossa agencia" /></a>
			</div>
		</div>
		<!--
		Laço Esquerdo
		<div id="laco-esquerdo" class="laco">
			&nbsp;
		</div>
		MSN
		<iframe src="http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=b3c2c5f0adb318ef@apps.messenger.live.com&mkt=pt-br&useTheme=true&themeName=blue&foreColor=333333&backColor=E8F1F8&linkColor=333333&borderColor=AFD3EB&buttonForeColor=333333&buttonBackColor=EEF7FE&buttonBorderColor=AFD3EB&buttonDisabledColor=EEF7FE&headerForeColor=0066A7&headerBackColor=8EBBD8&menuForeColor=333333&menuBackColor=FFFFFF&chatForeColor=333333&chatBackColor=FFFFFF&chatDisabledColor=F6F6F6&chatErrorColor=760502&chatLabelColor=6E6C6C" width="300" height="300" style="border: solid 1px black; width: 300px; height: 300px;" frameborder="0"></iframe>
		-->
	</div>
	<div id="header-fade">
		&nbsp;
	</div>
	<div id="main" class="clearfix">
		<div class="centralizado">
			<div id="main-content">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				<?php endwhile; endif; ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		
	
			<div id="main-sidebar">
					<?php get_sidebar('ultimos-posts'); ?>
			</div>
		<!-- centralizado -->
		</div>
	<!-- main -->
	</div>
<!-- wrap -->
</div>

<?php get_footer(); ?>