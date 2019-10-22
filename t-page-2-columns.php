<?php
/*
Template Name: Layout 2 Columns
*/
?>
<?php get_header(); ?>
<?php include_once("header-image.php"); ?>

	<div id="header-fade">
		&nbsp;
	</div>
	<div id="main" class="clearfix">
		<div class="centralizado">
			<!-- Coluna da Esquerda -->
			<div class="caixa main-sidebar" id="main-left-sidebar-for-two-columns-layout">
				<?php get_sidebar("sistemas-pagamento-sidebar"); ?>
			</div>
						
			<!-- Coluna Central -->
			<div class="caixa main-content" id="main-content-for-two-columns-layout">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				<?php endwhile; endif; ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
			</div>
		<!-- centralizado -->
		</div>
	<!-- main -->
	</div>
<!-- wrap -->
</div>

<?php get_footer(); ?>