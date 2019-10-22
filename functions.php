<?php
if ( function_exists('register_sidebar') ) {
   register_sidebar(array(
		'name' => 'general',
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => '</li>',
       'before_title' => '<h2 class="widget_title">',
       'after_title' => '</h2>',
   ));
   register_sidebar(array(
		'name' => 'sections',
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => '</li>',
       'before_title' => '<h2 class="widget_title">',
       'after_title' => '</h2>',
   ));
   register_sidebar(array(
		'name' => 'advertising',
       'before_widget' => '<li id="%1$s" class="widget %2$s">',
       'after_widget' => '</li>',
       'before_title' => '<h2 class="widget_title">',
       'after_title' => '</h2>',
   ));
   /*register_sidebar ('sistemas-pagamento');
   register_sidebar ('ultimos-posts');*/
}
?>