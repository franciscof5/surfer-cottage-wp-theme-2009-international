<?php
/*
NÃO Ë A PAGINA INICIAL, PAGINA INICIAL LOCALZIADA t-home.php
É AS PÁGINAS (NÃO É POST)
*/
?>
<?php get_header(); ?>
	
	<div id="main" class="clearfix">
		<!-- Content Column -->
		<div class="padding10 main-content" />
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
				<div class="entry">
					<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
				</div>
			</div>
			<?php endwhile; endif; ?>
			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
		</div>
		
		<!-- Sidebar Middle-Right Column -->
		<div id="main-sidebar-ad" class="sidebar padding10" />
			<?php get_sidebar('advertising'); ?>
		</div>
		
		<!-- Sidebar Right Column -->
		<div id="main-sidebar-sections" class="sidebar padding10" />
			<?php get_sidebar('sections'); ?>
		</div>

	</div>
</div>

<?php get_footer(); ?>
